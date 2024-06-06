<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;

class MotoController extends Controller
{
    public function create()
    {
        return view('motos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer|min:1900|max:' . date('Y'),
            'preco' => 'required|numeric|min:0',
        ]);
    
        $moto = Moto::create($request->all());
    
        // Armazena os dados da moto na sessão flash
        Session::flash('moto', $moto);
    
        return redirect()->route('motos.show'); // Redireciona para a página de visualização
    }

    public function show()
{
    $moto = Session::get('moto');

    return view('motos.show', compact('moto'));

    
}


}
