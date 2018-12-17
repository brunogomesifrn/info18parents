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

Route::get('/protecao', function () {
    return view('protecao');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/perfil', function () {
    return view('perfil');
})->middleware('auth');


Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/cidades', 'CidadeControlador@index')->middleware('auth');
Route::get('/cidades_cadastrar', 'CidadeControlador@create')->middleware('auth');
Route::post('/cidades_salvar', 'CidadeControlador@store')->middleware('auth');
Route::get('/cidades_remover/{id}', 'CidadeControlador@destroy')->middleware('auth');
Route::get('/cidades_editar/{id}', 'CidadeControlador@edit')->middleware('auth');
Route::post('/cidades_atualizar/{id}', 'CidadeControlador@update')->middleware('auth');


Route::get('/servicos', 'ServicoControlador@index')->middleware('auth');
Route::get('/servicos_cadastrar', 'ServicoControlador@create')->middleware('auth');
Route::post('/servicos_salvar', 'ServicoControlador@store')->middleware('auth');
Route::get('/servicos_remover/{id}', 'ServicoControlador@destroy')->middleware('auth');
Route::get('/servicos_editar/{id}', 'ServicoControlador@edit')->middleware('auth');
Route::post('/servicos_atualizar/{id}', 'ServicoControlador@update')->middleware('auth');

Route::get('/gerenciar_pais', 'PaiControlador@index')->middleware('auth');
Route::get('/pais_cadastrar', 'PaiControlador@create')->middleware('auth');
Route::post('/pais_salvar', 'PaiControlador@store')->middleware('auth');
Route::get('/pais_remover/{id}', 'PaiControlador@destroy')->middleware('auth');
Route::get('/pais_editar/{id}', 'PaiControlador@edit')->middleware('auth');
Route::post('/pais_atualizar/{id}', 'PaiControlador@update')->middleware('auth');