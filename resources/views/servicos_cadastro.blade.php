@extends('layout.base')

@section('conteudo')

<h1>Cadastro de Serviços</h1>


@if(empty($servico))
<form action="/servicos_salvar" method="post">
@else
<form action="/servicos_atualizar/{{$servico->id}}" method="post">
@endif

@csrf

@if(empty($servico))
	<p>Nome do Serviço: <input type="text" name="nome"></p>
	<input type="submit" value="Cadastrar">
@else
	<p>Nome do Serviço: <input type="text" name="nome" value="{{$servico->nome}}"></p>
	<input type="submit" value="Atualizar">
@endif

</form>


@endsection