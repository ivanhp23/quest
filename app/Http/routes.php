<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| POST, GET, PUT, DELETE
*/


Route::get('/','ManualController@index');
Route::get('contacto','ManualController@contacto');
Route::get('contenido','ManualController@contenido');
Route::get('admin','ManualController@admin');

Route::resource('usuario','UsuarioController');
Route::resource('log','LogController');

Route::resource('modulo','ModuloController');
Route::resource('tema','TemaController');







