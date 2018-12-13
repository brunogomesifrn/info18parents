@extends('layout.base')

@section('conteudo')

<h1>Cadastro de Pais</h1>


@if(empty($pai))
<form action="/pais_salvar" method="post">
@else
<form action="/pais_atualizar/{{$pai->id}}" method="post">
@endif

@csrf

@if(empty($pai))
	<p>Nome do Pai: <input type="text" name="nome"></p>
	<p>CPF do Pai: <input type="text" name="cpf"></p>
	<p>RG do Pai: <input type="text" name="rg"></p>
	<p>Email do Pai: <input type="text" name="email"></p>
	<p>Telefone do Pai: <input type="text" name="telefone"></p>
	<p>CRP do Pai: <input type="text" name="crp"></p>
	<p>Cidade: <select name="cidade">
  	<option value="go" selected>Goianinha</option>
	</select></p>
	<input type="submit" value="Cadastrar">
@else
	<p>Nome do Pai: <input type="text" name="nome" value="{{$pai->nome}}"></p>
	<p>CPF do Pai: <input type="text" name="cpf" value="{{$pai->nome}}"></p>
	<p>RG do Pai: <input type="text" name="rg" value="{{$pai->nome}}"></p>
	<p>Email do Pai: <input type="text" name="email" value="{{$pai->nome}}"></p>
	<p>Telefone do Pai: <input type="text" name="telefone" value="{{$pai->nome}}"></p>
	<p>CRP do Pai: <input type="text" name="crp" value="{{$pai->nome}}"></p>
	<input type="submit" value="Atualizar" >
	@endif

</form>


@endsection