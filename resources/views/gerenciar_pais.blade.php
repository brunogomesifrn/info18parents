@extends('layout.base')

@section('conteudo')

<h1>Gerenciar Pais</h1>

<p><a href="/pais_cadastrar">Cadastrar novo Pai</a></p>

<p>Pais Cadastrados:</p>
@foreach($pais as $p)
<p>{{$p->nome}} | <a href="/pais_editar/{{$p->id}}"">EDITAR</a> | <a href="/pais_remover/{{$p->id}}">REMOVER</a></p>
@endforeach

@endsection