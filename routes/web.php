<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/pessoais', function () {
    return view('pessoais');
});
Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/pais', function () {
    return view('pais');
});
Route::get('/carrinho', function () {
    return view('carrinho');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/cidades', 'CidadeControlador@index');
Route::get('/cidades_cadastrar', 'CidadeControlador@create');
Route::post('/cidades_salvar', 'CidadeControlador@store');
Route::get('/cidades_remover/{id}', 'CidadeControlador@destroy');
Route::get('/cidades_editar/{id}', 'CidadeControlador@edit');
Route::post('/cidades_atualizar/{id}', 'CidadeControlador@update');


Route::get('/servicos', 'ServicoControlador@index');
Route::get('/servicos_cadastrar', 'ServicoControlador@create');
Route::post('/servicos_salvar', 'ServicoControlador@store');
Route::get('/servicos_remover/{id}', 'ServicoControlador@destroy');
Route::get('/servicos_editar/{id}', 'ServicoControlador@edit');
Route::post('/servicos_atualizar/{id}', 'ServicoControlador@update');
