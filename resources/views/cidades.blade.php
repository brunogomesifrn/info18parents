@extends('layout.base')

@section('conteudo')

<h1>Cidades</h1>

<p><a href="/cidades_cadastrar">Cadastrar nova cidade</a></p>

<p>Cidades Cadastradas:</p>
@foreach($cidades as $c)
<p>{{$c->nome}} | <a href="/cidades_editar/{{$c->id}}"">EDITAR</a> | <a href="/cidades_remover/{{$c->id}}">REMOVER</a></p>
@endforeach


@endsection