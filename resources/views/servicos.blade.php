@extends('layout.base')

@section('conteudo')

<h1>Serviços</h1>

<p><a href="/servicos_cadastrar">Cadastrar novo serviço</a></p>

<p>Serviços Cadastrados:</p>
@foreach($servicos as $s)
<p>{{$s->nome}} | <a href="/servicos_editar/{{$s->id}}"">EDITAR</a> | <a href="/servicos_remover/{{$s->id}}">REMOVER</a></p>
@endforeach


@endsection