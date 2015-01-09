<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*home*/
Route::get('/', function()
{
	return View::make('home');
});

/*About*/
Route::get('/sobre', function(){
    return View::make('sobre');
});

/*Categorias*/
Route::group(array('before' => 'auth'), function() {
    Route::get('/categorias', 'CategoriasController@create');
    Route::post('/categorias', 'CategoriasController@store');
    Route::get('/categorias/{categoria}', 'CategoriasController@show');
    Route::post('/categorias/{categoria}', 'CategoriasController@update_destroy');
});

/*Movimentos*/
Route::group(array('before' => 'auth'), function() {
    Route::get('/movimentos', 'MovimentosController@index');
    Route::get('/movimentos/{movimento}', 'MovimentosController@show');
    Route::post('/movimentos/{movimento}', 'MovimentosController@update_destroy');
});

/*login*/
Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@dologin');

/*gestao*/
Route::group(array('before' => 'auth'), function() {
    Route::get('gestao', 'GestaoController@index');
});

//Event::listen('illuminate.query', function($query)
//{
//    var_dump($query);
//});