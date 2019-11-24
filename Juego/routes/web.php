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

// Agus - Pruebas de si te traen las preguntas, las respuestas y los usuarios
// Route::get('/verPreguntas', 'PreguntasController@show');
// Route::get('/verRespuestas', 'RespuestaController@show');
// Route::get('/usuarios', 'UsuarioController@show');

// Agus - Modelo del juego, por el momento se llaman a las preguntas segun el id
Route::post('/respuesta', 'PreguntasController@siguiente');
Route::get('/juego', 'PreguntasController@view');
// Route::post('/juego', 'PreguntasController@detalle')->name('juego');

//Ruta para el crud
Route::get('/crea', 'PreguntasController@crud');
// Ruta para el formulario de agregar preguntas
Route::post('/crea', 'PreguntasController@agregar')->name('agregarPreguntas');


//Tomi: Creo rutas para nosotros y contacto que por el momento solo retornan una vista
Route::get('/contacto' , function (){
    return view('contacto');
});
Route::get('/nosotros', function (){
    return view('nosotros');
});
Route::get('/perfil' , 'UsuarioController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
