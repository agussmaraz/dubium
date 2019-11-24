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
//Rutas de preguntas
Route::get('/verPreguntas', 'PreguntasController@show');
Route::get('/juego/{id}', 'PreguntasController@detalle');
Route::get('/crea', 'PreguntasController@agregarPreguntas');
Route::post('/agregarPreguntas', 'PreguntasController@agregar')->name('agregarPreguntas');
//Ruta para ver respuestas
Route::get('/verRespuestas', 'RespuestaController@show');
//Ruta para ver usuarios
Route::get('/usuarios', 'UsuarioController@show');
//Tomi: Creo rutas para nosotros y contacto que por el momento solo retornan una vista
Route::get('/contacto' , function (){
    return view('contacto');
});
Route::get('/nosotros', function (){
    return view('nosotros');
});
Route::get('/perfil' , function (){
    return view('perfil');
});
Route::get('/f.a.q' , function(){
    return view('faq');
});
