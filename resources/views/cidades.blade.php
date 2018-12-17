@extends('layout.base')

@section('conteudo')

<h1 h1 align="center">Cidades</h1>

<div class="row">

	<div class="col-md-3"></div>

	<div class="col-md-6">

<p  align="center"><a input class="bnt" name="" type="submit" href="/cidades_cadastrar">Cadastrar nova cidade</a></p>

<h3 align="center">Cidades Cadastradas:</h3>
@foreach($cidades as $c)

<div class="row">

	<div class="col-md-6" align="right">
		<h5>{{$c->nome}}</h5>
	</div>

	<div class="col-md-6" align="left">
	<p> | <a href="/cidades_editar/{{$c->id}}"">EDITAR</a> | <a  href="/cidades_remover/{{$c->id}}">REMOVER</a></p>
	</div>

</div>
@endforeach
</div>
</div>

@endsection