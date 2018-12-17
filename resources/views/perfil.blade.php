@extends('layout.base')

@section('conteudo')

<h1 align="center">Página do Usuário</h1>

<br>
<br>
<br>

<div class="row">

	<div class="col-md-3"></div>

	<div class="col-md-2">
<!--<p align="center"> <a input class="bnt" name="" type="submit" href="/cidades">Gerenciar Cidades</a></p>-->
		<a href="/cidades"><button type="button" class="tqdc btn-primary btn">
    {{ __('Gerenciar Cidades') }}
        </button></a>
	</div>



	<div class="col-md-2">
		<a href="/servicos"><button type="button" class="tqdc btn-primary btn">
    {{ __('Gerenciar Serviços') }}
        </button></a>
<!--<p align="center"> <a input class="bnt" name="" type="submit" href="/servicos">Gerenciar Serviços</a></p>-->
</div>



	<div class="col-md-2">
		<a href="/gerenciar_pais"><button type="button" class="tqdc btn-primary btn">
    {{ __('Gerenciar Pais') }}
        </button></a>
<!--<p align="center"> <a input class="bnt" name="" type="submit" href="/gerenciar_pais">Gerenciar Pais</a></p>-->
</div>

	<div class="col-md-3"></div>

</div>
@endsection