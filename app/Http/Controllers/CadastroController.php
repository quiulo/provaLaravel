<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required|string',
            'ano' => 'required|integer|min:1900|max:' . date('Y'),
            'preco' => 'required|numeric|min:0',
        ]);
    
        Moto::create($request->all());
    
        return redirect('/motos')->with('success', 'Moto cadastrada com sucesso.');
    }
    
}
