

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

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
