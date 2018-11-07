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
