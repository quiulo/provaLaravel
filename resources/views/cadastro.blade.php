@extends('layouts.basico')

@section('title', 'Contato')

@section('body')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>
        <div class="informacao-pagina">
            <div class="cadastro-principal">
                @component('components.formularioCadastro')
                    <p>Nossa equipe analisará sua mensagem e retornará o mais breve possível!</p>
                    <p>Lembrando que nosso tempo de resposta é em média 48 horas.</p>
                @endcomponent
            </div>
        </div>
    </div>

@endsection
