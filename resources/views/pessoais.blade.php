@extends('layout.base')

@section('conteudo')

<h1 align="center">Dados pessoais</h1>
	<div class="divao">
	

	<form action="" method="post">
		<div class="row">
			<div class="col-md-6">
	<p id ="f">Nome:</p></font><input type="text"  value="Júlio César" id="nome" name="nome"><br>

	<p id ="f">Data de nascimento:</p></font><input value="06/09/2001" type="text" id="dataN" name="dataN"><br>
	
	<p id ="f">CPF:</p> <input type="text" id="cpf" value="700.250.804-07" name="cpf"><br>
		</div>
		<div class="col-md-6">
	<p id ="f">Endereço:</p> <input type="text" value="Meira Lima" id="ender" name="ender"><br>

	<p id ="f">Cep:</p> <input type="text" id="cep" value="59190-000" name="cep"><br>

	<p id ="f">E-mail:</p></font><input type="text" value="juliojcjc1@gmail.com" id="usuario" name="usuario"><br>
		</div>
		</div>

	</form>
</div>

@endsection
