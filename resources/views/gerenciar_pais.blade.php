@extends('layout.base')

@section('conteudo')

<h1 h1 align="center">Gerenciar Pais</h1>

<div class="row">

	<div class="col-md-3"></div>

	<div class="col-md-6">

<p align="center"><a input class="bnt" name="" type="submit" href="/pais_cadastrar">Cadastrar novo Pai</a></p>

<h3 align="center">Pais Cadastrados:</h3>
@foreach($pais as $p)


<div class="row">

	<div class="col-md-6" align="right">
		<h5>{{$c->nome}}</h5>
	</div>

	<div class="col-md-6" align="left">

<p> | <a href="/pais_editar/{{$p->id}}"">EDITAR</a> | <a href="/pais_remover/{{$p->id}}">REMOVER</a></p>

		</div>
	</div>

@endforeach
			</div>
	</div>
@endsection