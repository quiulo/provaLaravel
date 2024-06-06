@extends('layouts.basico')

@section('title', 'Visualizar Moto')

@section('body')
    <h1>Dados da Moto Cadastrada</h1>

    @if(session('moto'))
        <p>Modelo: {{ $moto->modelo }}</p>
        <p>Ano: {{ $moto->ano }}</p>
        <p>Preço: {{ $moto->preco }}</p>
    @else
        <p>Nenhum dado de moto cadastrado.</p>
    @endif
@endsection
