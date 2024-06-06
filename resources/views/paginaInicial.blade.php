@extends('layouts.basico')

@section('title', 'Página inicial')

@section('body')
    <div class="conteudo">
        <div class="fundo">
            <div class="informacoes">
                <h1>Bem-vindo ao site da Honda Motos!</h1>
                
                <p> Explore nossa linha de motocicletas de alta performance, projetadas para oferecer a melhor experiência de pilotagem. Descubra modelos, preços, ofertas exclusivas e todas as inovações tecnológicas que fazem da Honda a líder em mobilidade sobre duas rodas. Seja você um entusiasta das estradas ou um piloto urbano, temos a moto perfeita para você. Junte-se a nós e sinta a liberdade de pilotar uma Honda.<p>
                <br>
                <br>
                <br>
                    <hr>
                <br>
                <br>
                <br>
                <h1>Conheça nossas categorias</h1>

            <br>

            </div> 
            
            
                <div class="anuncio1">
                    <img class="moto" src="{{ asset('images/fundo2PaginaInicial.webp') }}">
                <div class="textoAnuncio1">
                    <h1>Nova Honda PCX</h1>
                    <p>
                    Nossa scooter cheia de estilo e ainda mais potente. Só vem!
                    </p>
                </div>

                </div>
        
                <div class="anuncio2">
                    <img class="moto" src="{{ asset('images/fundoPaginaInicial.jpg') }}">

                    <div class="textoAnuncio2">
                        <h1>Experencie a Realidade Aumentada</h1>
                        <p>
                        Explore a função de realidade aumentada e visualize de perto detalhes e diferenciais, além de personalizar e experimentar sua Honda dos sonhos como nunca antes.
                        </p>
                    </div>
                </div>
            

            
            </div>
        </div>
        
        

    </div>

     <div class="conteudoPaginaInicial">
                <a href = "{{ route('site.produtos') }}"><h1 class="categoria">Street</h1></a>
                    <br>
                <div class="motosPaginaInicial">
                    <img class="moto" src="{{ asset('images/moto1.png') }}">
                    <img class="moto" src="{{ asset('images/moto5.png') }}">
                </div>

                    <br>

                <a href = "{{ route('site.produtos') }}"><h1 class="categoria">Adventure</h1></a>

                    <br>

                <div class="motosPaginaInicial">
                    <img class="moto" src="{{ asset('images/moto2.png') }}">
                    <img class="moto" src="{{ asset('images/moto6.png') }}">
                </div>

                    <br>

                <a href = "{{ route('site.produtos') }}"><h1 class="categoria">Off-road</h1></a>

                    <br>

                <div class="motosPaginaInicial">
                    <img class="moto" src="{{ asset('images/moto3.png') }}">
                    <img class="moto" src="{{ asset('images/moto7.png') }}">
                </div>

                <a href = "{{ route('site.produtos') }}"><h1 class="categoria">Sport</h1></a>

                    <br>
                
                <div class="motosPaginaInicial">
                    <img class="moto" src="{{ asset('images/moto4.png') }}">
                    <img class="moto" src="{{ asset('images/moto8.png') }}">
                </div>
            </div>
@endsection
