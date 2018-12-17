@extends('layout.base')

@section('conteudo')

<h1 align="center"> Cadastro de Pais</h1>
		

@if(empty($pai))
<form action="/pais_salvar" method="post">
@else
<form action="/pais_atualizar/{{$pai->id}}" method="post">
@endif

@csrf

@if(empty($pai))
<div class="divao">
	<form action="" method="post">
	<div class="row">
	<div class="col-md-6">

	<div style="text-align: right;"><p>Nome do Pai <input type="text" name="nome"></p> <div style="text-align: right;"><p>CPF do Pai: <input type="text" name="cpf"></p>
	</div> </div> 
	
	<div style="text-align: right;"><p>RG do Pai: <input type="text" name="rg"></p> <div style="text-align: right;"> <p>Email do Pai: <input type="text" name="email"></p>
	</div> </div> 

	<div style="text-align: right;"><p>Telefone do Pai: <input type="text" name="telefone"></p> <div style="text-align: right;"> <p>CRP do Pai: <input type="text" name="crp"></p>
	</div> </div> 

	<div style="text-align: center;"><p>Cidade de atendimento: <select name="cidade"></div> 

		@foreach($cidades as $c)
			<option value="{{$c->id}}">{{$c->nome}}</option>
		@endforeach
	</select></p>
	<input type="submit" value="Cadastrar">

			</div>
		</div>

	</form>
</div>

@else
	<p>Nome do Pai: <input type="text" name="nome" value="{{$pai->nome}}"></p>
	<p>CPF do Pai: <input type="text" name="cpf" value="{{$pai->cpf}}"></p>
	<p>RG do Pai: <input type="text" name="rg" value="{{$pai->rg}}"></p>
	<p>Email do Pai: <input type="text" name="email" value="{{$pai->email}}"></p>
	<p>Telefone do Pai: <input type="text" name="telefone" value="{{$pai->telefone}}"></p>
	<p>CRP do Pai: <input type="text" name="crp" value="{{$pai->crp}}"></p>
	<p>Cidade de atendimento: <select name="cidade">
		@foreach($cidades as $c)
			@if($c->id == $pai->id_cidade)
				<option value="{{$c->id}}" selected>{{$c->nome}}</option>
			@else
				<option value="{{$c->id}}">{{$c->nome}}</option>
			@endif
		@endforeach
	</select></p>


	<input type="submit" value="Atualizar" >
	@endif

</form>


@endsection

	