<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function produtos(){
        return view('produtos');
    }

    public function index()
    {
        $produto = Produto::all();
        return view('produto.index', compact('produtos'));
    }

    public function create()
    {
        return view('produto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required',
            'ano' => 'required|integer',
            'preco' => 'required|numeric',
        ]);

        Produto::create($request->all());

        return redirect()->route('produto.index')->with('success', 'Moto cadastrada com sucesso.');
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'modelo' => 'required',
            'ano' => 'required|integer',
            'preco' => 'required|numeric',
        ]);

        $produto->update($request->all());

        return redirect()->route('motos.index')->with('success', 'Moto atualizada com sucesso.');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('motos.index')->with('success', 'Moto deletada com sucesso.');
    }
}
