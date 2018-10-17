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
    return view('index');
});
Route::get('/pessoais', function () {
    return view('index');
});
Route::get('/sobre', function () {
    return view('index');
});
Route::get('/contato', function () {
    return view('index');
});
Route::get('/pais', function () {
    return view('index');
});
Route::get('/carrinho', function () {
    return view('index');
});
