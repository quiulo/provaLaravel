@extends('layouts.basico')

@section('title', 'Página inicial')

@section('body')
    <div class="conteudo">
        <div class="fundo">
            <div class="informacoes">
                <h1>Bem-vindo ao site da Honda Motos!</h1>
                
                <p> Explore nossa linha de motocicletas de alta performance, projetadas para oferecer a melhor experiência de pilotagem. Descubra modelos, preços, ofertas exclusivas e todas as inovações tecnológicas que fazem da Honda a líder em mobilidade sobre duas rodas. Seja você um entusiasta das estradas ou um piloto urbano, temos a moto perfeita para você. Junte-se a nós e sinta a liberdade de pilotar uma Honda.<p>
                <br>
                <hr>
                <h1>Conheça nossas categorias</h1>
            
            </div> 
            <img class="moto" src="{{ asset('images/fundo2PaginaInicial.webp') }}">
            <img class="moto" src="{{ asset('images/fundoPaginaInicial.jpg') }}">
            <br>
            
            <h1 class="categoria">Street</h1>
                <br>
            <img class="moto" src="{{ asset('images/moto1.png') }}">
                <br>
            <h1 class="categoria">Adventure</h1>
                <br>
            <img class="moto" src="{{ asset('images/moto2.png') }}">
                <br>
            <h1 class="categoria">Off-road</h1>
                <br>
            <img class="moto" src="{{ asset('images/moto3.png') }}">
                <br>
            <h1 class="categoria">Sport</h1>
                <br>
            <img class="moto" src="{{ asset('images/moto4.png') }}">
        </div>
        
        

    </div>
@endsection
