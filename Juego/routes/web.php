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
//Ruta que retorna la vista de welcome
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Ruta para el home
Route::get('/home', 'HomeController@index')->name('home');
// Rutas para ver si te traen las preguntas y respuestas
// Route::get('/verPreguntas', 'PreguntasController@show');
// Route::get('/verRespuestas', 'RespuestaController@show');

// Ruta para el perfil 
Route::get('/perfil', 'UsuarioController@show');
// Ruta para crear tus preguntas, una de la vista y otra que envia los datos 
Route::post('/crea', 'PreguntasController@agregar')->name('agregarPreguntas');
Route::get('/crea', 'PreguntasController@crud');
// Ruta del juego, una que te lleva a la vista y otra que te analiza las respuestas
Route::get('/juego', 'PreguntasController@view')->name('juego');
Route::post('/respuesta', 'PreguntasController@siguiente')->name('siguiente');
//Ruta para editar las preguntas
Route::get('/editar', 'PreguntasController@vista');
// Route::get('/editar', 'PreguntasController@editar');
//Tomi: Creo rutas para nosotros y contacto que por el momento solo retornan una vista
Route::get('/contacto' , function (){
    return view('contacto');
});
Route::get('/nosotros', function (){
    return view('nosotros');
});
Route::get('/frecuentes' , function(){
    return view('faq');
});
