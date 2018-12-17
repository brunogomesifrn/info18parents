@extends('layout.base')

@section('conteudo')

<h1 align="center">Dados pessoais</h1>
	<div class="divao">
	

	<form action="" method="post">
		<div class="row">
			<div class="col-md-6">
	<p id ="f">Nome:</p></font><input type="text"  value="" id="nome" name="nome"><br>

	<p id ="f">Data de nascimento:</p></font><input value="" type="text" id="dataN" name="dataN"><br>
	
	<p id ="f">CPF:</p> <input type="text" id="cpf" value="" name="cpf"><br>
		</div>
		<div class="col-md-6">
	<p id ="f">Endereço:</p> <input type="text" value="" id="ender" name="ender"><br>

	<p id ="f">Cep:</p> <input type="text" id="cep" value="" name="cep"><br>

	<p id ="f">E-mail:</p></font><input type="text" value="" id="usuario" name="usuario"><br>
		</div>
		</div>

	</form>
</div>

@endsection
