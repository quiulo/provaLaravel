@extends('layouts.basico')

@section('title', 'Contato')

@section('body')
    <div class="conteudo-pagina">
        
              <div class="conteudoProdutos">
                <h1 class="categoria">Street</h1>

                    <br>

               
                    <div class="motosProdutos">
                        <img class="moto" src="{{ asset('images/moto1.png') }}">
                        <h3>Por apenas R$15.999,99</h3>
                        <img class="moto" src="{{ asset('images/moto5.png') }}">
                        <h3>Por apenas R$17.999,99</h3>
                    </div>
                
                

                    <br>

              <h1 class="categoria">Adventure</h1>

                    <br>

                
                    <div class="motosProdutos">
                        <img class="moto" src="{{ asset('images/moto2.png') }}">
                         <h3>Por apenas R$10.999,99</h3>
                        <img class="moto" src="{{ asset('images/moto6.png') }}">
                         <h3>Por apenas R$8.999,99</h3>
                    </div>
                

                    <br>

                <h1 class="categoria">Off-road</h1>

                    <br>

            
                <div class="motosProdutos">
                    <img class="moto" src="{{ asset('images/moto3.png') }}">
                     <h3>Por apenas R$33.999,99</h3>
                    <img class="moto" src="{{ asset('images/moto7.png') }}">
                     <h3>Por apenas R$31.999,99</h3>
                    <br>
                </div>
            

              <h1 class="categoria">Sport</h1>

                    <br>
                
            
                <div class="motosProdutos">
                    <img class="moto" src="{{ asset('images/moto4.png') }}">
                     <h3>Por apenas R$25.999,99</h3>
                    <img class="moto" src="{{ asset('images/moto8.png') }}">
                     <h3>Por apenas R$28.999,99</h3>
                </div>
            </div>
            
        </div>
       
    </div>

@endsection


