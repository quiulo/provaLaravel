@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Moto</h1>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name="modelo" required>
        </div>
        <div class="form-group">
            <label for="ano">Ano:</label>
            <input type="number" class="form-control" id="ano" name="ano" required>
        </div>
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" class="form-control" id="preco" name="preco" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
