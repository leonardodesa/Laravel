@extends('layout.site')

@section('titulo', 'contatos')

@section('conteudo')

<div>
    <h2>Teste com Rotas:</h2>

    <form action="/contato" method="post">
        {{ csrf_field() }}
        <input type="text" name="nome" placeholder="Nome / POST">
        <button>Enviar</button>
    </form>

    <br>

    <form action="/contato" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        <input type="text" name="nome" placeholder="Nome / PUT">
        <button>Enviar</button>
    </form>
</div>

<div>
    @foreach($contatos as $contato)
        <p>{{ $contato->tel }}</p>
        <p>{{ $contato->nome }}</p>
    @endforeach()
</div>

@endsection
