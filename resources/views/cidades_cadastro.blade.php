@extends('layout.base')

@section('conteudo')

<h1>Cadastro de Cidade</h1>


@if(empty($cidade))
<form action="/cidades_salvar" method="post">
@else
<form action="/cidades_atualizar/{{$cidade->id}}" method="post">
@endif

@csrf

@if(empty($cidade))
	<p>Nome da Cidade: <input type="text" name="nome"></p>
	<input type="submit" value="Cadastrar">
@else
	<p>Nome da Cidade: <input type="text" name="nome" value="{{$cidade->nome}}"></p>
	<input type="submit" value="Atualizar">
@endif

</form>


@endsection