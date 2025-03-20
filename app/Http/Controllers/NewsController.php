<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function list(News $news)
{
    
    return view('news.list.index', compact('news')); // Envia para a view
}
    public function index()
    {
        $news = News::where('estado', 1)->get();
        return view('news.index.index', compact('news'));
    }

    public function create()
    {
        return view('news.create.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'capa_image' => 'image|nullable',
            'imanges_opcional.*' => 'image|nullable',
            'conteudo' => 'required|string',
        ]);
    
        $news = new News();
        $news->titulo = $request->titulo;
        $news->conteudo = $request->conteudo;
        $news->date = $request->date;
        $news->autor = $request->autor;
        $news->resumo = $request->resumo;
        $news->estado = $request->estado;
    
        if ($request->hasFile('capa_image')) {
            $news->capa_image = $request->file('capa_image')->store('covers', 'public');
        }
    
        if ($request->hasFile('imanges_opcional')) {
            $paths = [];
            foreach ($request->file('imanges_opcional') as $image) {
                $paths[] = $image->store('optional', 'public');
            }
            $news->imanges_opcional = $paths; // Remova o json_encode aqui!
        }
    
        $news->save();
        return redirect()->route('news.index')->with('success', 'Notícia criada com sucesso.');
    }
    public function edit(News $news)
    {
        return view('news.edit.index', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'capa_image' => 'image|nullable',
            'imanges_opcional.*' => 'image|nullable', // Campo com nome incorreto (se mantido)
            'conteudo' => 'required|string',
        ]);
    
        $news->titulo = $request->titulo;
        $news->conteudo = $request->conteudo;
        $news->date = $request->date;
        $news->autor = $request->autor;
        $news->resumo = $request->resumo;
        $news->estado = $request->estado;
    
        if ($request->hasFile('capa_image')) {
            Storage::disk('public')->delete($news->capa_image);
            $news->capa_image = $request->file('capa_image')->store('covers', 'public');
        }
    
        if ($request->hasFile('imanges_opcional')) {
            // Deletar imagens antigas (se existirem)
            if ($news->imanges_opcional) {
                foreach ($news->imanges_opcional as $oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
    
            // Adicionar novas imagens
            $paths = [];
            foreach ($request->file('imanges_opcional') as $image) {
                $paths[] = $image->store('optional', 'public');
            }
            $news->imanges_opcional = $paths; // Remova o json_encode aqui!
        }
    
        $news->save();
        return redirect()->route('news.index')->with('success', 'Notícia atualizada com sucesso.');
    }
    public function destroy(News $news)
    {
        Storage::delete($news->capa_image); // Remover a imagem de capa
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Notícia excluída com sucesso.');
    }
}