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

use App\Http\Controllers\PreguntasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();



//Ruta para el home
Route::get('/home', 'HomeController@index')->name('home');

//Vista que me dice que perdi el juego
Route::get('/final', function(){
    return view('/final');
});

// Ruta que te diste que perdiste
Route::post('/final', 'PreguntasController@siguiente');


// Ruta para el perfil 
Route::get('/perfil', 'UsuarioController@show');
Route::get('/editarFoto/{id}', 'UsuarioController@editar');
Route::post('/editarFoto/{id}', 'UsuarioController@updateFoto');

// Ruta del juego, una que te lleva a la vista y otra que te analiza las respuestas
Route::post('/juego', 'PreguntasController@inicio');
Route::get('/juego', 'PreguntasController@view')->name('juego');
Route::post('/respuesta', 'PreguntasController@siguiente')->name('siguiente');

//Juego con tiempo
Route::get('/juegoTiempo/tiempo', 'PreguntasController@inicio');
Route::get('/juegoTiempo/tiempo', 'PreguntasController@view');
Route::post('/siguiente', 'PreguntasController@sig');


// Ruta para crear tus preguntas, una de la vista y otra que envia los datos 
Route::post('/crea', 'PreguntasController@agregar')->name('agregarPreguntas');
Route::get('/crea', 'PreguntasController@crud');

//Ruta para editar las preguntas y eliminar
Route::get('/editar/{id}', 'PreguntasController@editar');
Route::post('/editar/{id}', 'PreguntasController@update');
Route::get('/eliminar/{id}', 'PreguntasController@show');

//Tomi: Creo rutas para nosotros y contacto que por el momento solo retornan una vista
Route::get('/contacto' , function (){
    return view('contacto');
});
Route::post('/contacto','contactoController@mensaje_contacto');

Route::get('/nosotros', function (){
    return view('nosotros');
});

Route::get('/frecuentes' , function(){
    return view('faq');
});

//Vistas admin
Route::get('/admin/preguntas', 'PreguntasController@admin')->middleware('admin:0');
Route::get('/admin/usuarios', 'UsuarioController@admin')->middleware('admin:0');
Route::get('/admin/editar/{id}', 'UsuarioController@showEdit')->middleware('admin:0');
Route::post('/admin/editar/{id}', 'UsuarioController@update')->middleware('admin:0');
Route::get('/admin/admins', 'UsuarioController@nuevo')->middleware('admin:0');
Route::post('/admin/admins', 'UsuarioController@agregar')->middleware('admin:0');
Route::get('/admin/aprobar/{id}', 'PreguntasController@aprobar')->middleware('admin:0');
Route::get('/admin/descartar/{id}', 'PreguntasController@descartar')->middleware('admin:0');
// Rutas de que contienen javascript para los datos del usuario
Route::get('/admin/perfil/{id}', 'UsuarioController@perfil');
Route::get('/admin/delete/{id}', 'UsuarioController@delete');
//Rutas con javascript para las preguntas
Route::get('/delete/{id}', 'PreguntasController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/prueba', 'PreguntasController@prueba');