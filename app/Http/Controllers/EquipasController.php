<?php

namespace App\Http\Controllers;

use App\Models\Equipa; // Nome do model corrigido
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EquipasController extends Controller
{
   

    public function index()
    {
        $equipas = Equipa::where('estado', 1)->get();
        return view('equipa.index.index', compact('equipas'));
    }

    public function create()
    {
        return view('equipa.create.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'capa_image' => 'image|nullable',
            'resumo' => 'required|string',
            'funcao' => 'required|string',
        ]);

        $equipa = new Equipa();
        $equipa->nome = $request->nome;
        $equipa->resumo = $request->resumo;
        $equipa->funcao = $request->funcao;
        $equipa->estado = $request->estado ?? 1; // Valor padrão se não enviado

        if ($request->hasFile('capa_image')) {
            $equipa->capa_image = $request->file('capa_image')->store('covers', 'public');
        }

        $equipa->save();
        return redirect()->route('equipas.index')->with('success', 'Membro cadastrado com sucesso.');
    }

    public function edit(Equipa $equipa)
    {
        return view('equipa.edit.index', compact('equipa'));
    }

    public function update(Request $request, Equipa $equipa)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'capa_image' => 'image|nullable',
            'resumo' => 'required|string',
            'funcao' => 'required|string',
        ]);

        $equipa->nome = $request->nome;
        $equipa->resumo = $request->resumo;
        $equipa->funcao = $request->funcao;
        $equipa->estado = $request->estado;

        if ($request->hasFile('capa_image')) {
            Storage::disk('public')->delete($equipa->capa_image);
            $equipa->capa_image = $request->file('capa_image')->store('covers', 'public');
        }

        $equipa->save();
        return redirect()->route('equipas.index')->with('success', 'Membro atualizado com sucesso.');
    }

    public function destroy(Equipa $equipa)
    {
        if ($equipa->capa_image) {
            Storage::disk('public')->delete($equipa->capa_image);
        }
        
        $equipa->delete();
        return redirect()->route('equipas.index')->with('success', 'Membro excluído com sucesso.');
    }
}