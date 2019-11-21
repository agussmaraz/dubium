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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verPreguntas', 'PreguntasController@show');
Route::get('/verRespuestas', 'RespuestaController@show');
Route::get('/juego/{id}', 'PreguntasController@detalle');
Route::get('/agregarPreguntas', 'PreguntasController@agregarPreguntas');
Route::post('/agregarPreguntas', 'PreguntasController@agregar')->name('agregarPreguntas');
Route::get('/usuarios', 'UsuarioController@show');
//Creo ruta de registro que simplemente llama ala vista, despues hacemos la logica...
Route::get('/registro' , function (){
    return view('registro');
});