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

/*login*/

Route::resource('users', 'UsersController');

/*About*/
Route::get('sobre', function(){
    return View::make('sobre');
});

/*Categorias*/
Route::resource('categorias', 'CategoriasController');