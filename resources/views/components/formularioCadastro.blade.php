<!-- resources/views/motos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Cadastrar Moto</h1>

    <form action="{{ route('motos.store') }}" method="POST">
        @csrf
        <div>
            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required>
        </div>
        <div>
            <label for="ano">Ano:</label>
            <input type="number" id="ano" name="ano" required>
        </div>
        <div>
            <label for="preco">Preço:</label>
            <input type="text" id="preco" name="preco" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
@endsection
