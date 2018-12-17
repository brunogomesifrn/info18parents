<!DOCTYPE html>
<html>
<head>
	<title>Aluguel de pais</title>
	<meta charset="utf-8">
	<!-- Última versão compilada e otimizada do CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="stylesheet" href="style.css">
	

	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/templatemo-style.css')}}">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="csrf-token" content="{{ csrf_token() }}" >
	
                                       <!-- Templatemo style -->

</head>
<body class="bodao">

	
		<div class="row">
		<div class="col-md-4" align="center">

			

		</div>
		<div class="col-md-4" align="center">

			<img src="{{asset('img/logo nova.PNG')}}" width="250" height="200">
			
			

		</div>
		<div class="col-md-4">

			</br>
			</br>
			</br>
			</br>
			</br>
			
			<p align="right" id="pe">Pesquise: <input class="pesq" type="text" name="pesquisa">
			<input class="botao" type="button" name="pesquisar"></p>

		</div>
		</div>
		

		<div class="nav-custom-style">
		<nav>
				<ul>  
		  
		<li class ="menu"><a href="/">Home</a> </li>  
		@guest
		<li class ="menu"><a href="/register">Cadastro</a> </li>
		@endguest
		<li class ="menu"><a href="/pessoais">Dados Pessoais</a> </li> 
		<li class="menu"><a href="/pais">Pais</a></li>
		<li class ="menu"><a href="/contato">Contatos</a></li>  
		@auth
		<li class="menu" id="dmenu"><a href="/perfil">Perfil</a></li>
		@endauth
		<li class ="menu"><a href="/sobre">Sobre</a></li>
		<!--<li class="menu" id="dmenu"><a href="/carrinho">Carrinho</a></li>-->
		
		@guest
		<li class="menu" id="dmenu"><a href="/login">Login</a></li>
		@endguest

		@auth
		<li class="menu" id="dmenu"><a href="/logout">Logout</a></li>
		@endauth


		</div>
				</ul>				
		</nav>
		

<!--<div id="id01" class="modal">
  
  <form class="modal-content animate" action="../logingeral.php" method="post">
    <div class="imgcontainer nego">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="{{asset('img/pessoa.PNG')}}" width="50" height="300" alt="Avatar" class="avatar">
    </div>

    <div class="container nego">
      <label for="uname"><b>Usuário:</b></label>
      <input type="text" class="pesq" placeholder="Seu Usuário" name="uname" required>
  	</br>
      <label for="psw"><b>Senha:</b></label>
      <input type="password" class="pesq" placeholder="Sua Senha" name="psw" required>
        
      </br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Me lembre
      </label>

    </div>
    <div class="container" style="background-color:#f1f1f1">
    	<button type="submit">Login</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>-->


@yield('conteudo')



<div class="foot divao">
	<footer align="center">
		
		<p id="ft" align="center">Feito por Júlio César; José Daniel; Gabriel Barroso e Big Pedro. 
		© Copyright 2017-2018 Broderiz's - All Rights Reserved - Ilegal</p>

	</footer>
	</div>

</body>
</html>
