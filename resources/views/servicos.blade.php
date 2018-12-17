@extends('layout.base')

@section('conteudo')

<h1 h1 align="center">Serviços</h1>

<div class="row">

	<div class="col-md-3"></div>

	<div class="col-md-6" style="text-align: center;">

		<a href="/servicos_cadastrar"><button type="button" class="buton btn-primary btn">
                                {{ __('Cadastrar novo Serviço') }}
                            </button></a>


<h3 align="center">Serviços Cadastrados:</h3>
@foreach($servicos as $s)


<div class="row">

	<div class="col-md-6" align="right">
		<h5>{{$s->nome}}</h5>
	</div>

	<div class="col-md-6" align="left">

<p> | <a href="/servicos_editar/{{$s->id}}"">EDITAR</a> | <a href="/servicos_remover/{{$s->id}}">REMOVER</a></p>

		</div>
	</div>

@endforeach
			</div>
	</div>
@endsection

