<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function list(News $news)
    {
        $news->get();
   
        return view('news.list.index', compact('news'));
    }
    public function index()
    {
        $news = News::all();
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
            $news->capa_image = $request->file('capa_image')->store('covers','public');
        }

        if ($request->hasFile('imanges_opcional')) {
            $paths = []; // Criar um array para armazenar os caminhos
            foreach ($request->file('imanges_opcional') as $image) {
                $paths[] = $image->store('optional','public'); // Adiciona cada caminho ao array
            }
            $news->imanges_opcional = json_encode($paths); // Converte o array para JSON
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
            'imanges_opcional.*' => 'image|nullable',
            'conteudo' => 'required|string',
        ]);

        $news->titulo = $request->titulo;
        $news->conteudo = $request->conteudo;
        $news->date = $request->date;
        $news->autor = $request->autor;
        $news->resumo = $request->resumo;
        $news->estado = $request->estado;

        if ($request->hasFile('capa_image')) {
            Storage::delete($news->capa_image); // Remover a imagem anterior
            $news->capa_image = $request->file('capa_image')->store('covers','public');
        }

         // Upload das imagens opcionais
    if ($request->hasFile('imanges_opcional')) {
        // Remover imagens anteriores
        $old_images = json_decode($news->imanges_opcional);
        foreach ($old_images as $image) {
            Storage::delete($image);
        }
        $paths = []; // Criar um array para armazenar os caminhos
        foreach ($request->file('imanges_opcional') as $image) {
            $paths[] = $image->store('optional','public'); // Adiciona cada caminho ao array
        }
        $news->imanges_opcional = json_encode($paths); // Converte o array para JSON
    }
        $news->save();
        return redirect()->route('news.index')->with('success', 'Notícia atualizada com sucesso.');
    }

    public function destroy(News $news)
    {
        Storage::delete($news->capa_image); // Remover a imagem de capa
        $old_images = json_decode($news->imanges_opcional);
        foreach ($old_images as $image) {
            Storage::delete($image);
        }
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Notícia excluída com sucesso.');
    }
}


