<div class="topo">
    <div class="logo">
        <a href="{{ route('site.index') }}">
            <img src="{{ asset('images/logoHonda.png') }}" alt="Logo Honda">
        </a>
    </div>
    <div class="menu">
        <ul>
            <li>
                <a href="{{ route('site.index') }}">Página inicial</a>
            </li>
            <li>
                <a href="{{ route('site.produtos') }}">Produtos</a>
            </li>
            <li>
                <a href="{{ route('site.sobre') }}">Sobre nós</a>
            </li>
            <li>
                <a href="{{ route('motos.create') }}">Cadastre sua moto</a>
            </li>
        </ul>
    </div>
</div>
