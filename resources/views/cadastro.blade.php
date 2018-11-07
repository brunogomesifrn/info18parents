@extends('layout.base')

@section('cadastro')


	<h1 align="center">Cadastro de usuário</h1>
	<div class="divao">

	<form action="Cad.php" method="post">
	
	<div class="row">
		<div class="col-md-6">
	<p id ="f">Nome:</p><input type="text" id="nome" name="nome"><br>

	<p id ="f">Data de nascimento:</p><input type="text" id="dataN" name="dataN"><br>
	
	<p id ="f">CPF:</p> <input type="text" id="cpf" name="cpf"><br>

	<p id ="f">Endereço:</p> <input type="text" id="ender" name="ender"><br>
	<input class="butonC" type="submit" value="Cadastrar" name="vali" onclick="validarN(); DataNas();validarCPF(); Endereco(); Cep(); validarU();  validarSenha(); Cadastrar()" ></br>
		</div>
		<div class="col-md-6">
	<p id ="f">Cep:</p> <input type="text" id="cep" name="cep"><br>

	<p id ="f">E-mail:</p></font><input type="text" id="usuario" name="email"><br>

	<p id ="f">Senha:</p> <input type="password" id="senha" name="senha"><br>

	<p id ="f">Confirmar Senha:</p><input type="password" id="csenha" name="csenha"><br>

	
	</div>
	</div>	
	</form>
</div>
	

@endsection