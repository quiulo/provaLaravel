@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Moto</h1>
    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $produto->modelo }}" required>
        </div>
        <div class="form-group">
            <label for="ano">Ano:</label>
            <input type="number" class="form-control" id="ano" name="ano" value="{{ $produto->ano }}" required>
        </div>
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" class="form-control" id="preco" name="preco" value="{{ $produto->preco }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
