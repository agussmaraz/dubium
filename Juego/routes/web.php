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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();



//Ruta para el home
Route::get('/home', 'HomeController@index')->name('home');
// Rutas para ver si te traen las preguntas y respuestas
// Route::get('/verPreguntas', 'PreguntasController@show');
// Route::get('/verRespuestas', 'RespuestaController@show');

//Vista que me dice que perdi el juego
Route::get('/final', function(){
    return view('/final');
});
Route::post('/final', 'PreguntasController@siguiente');

// Ruta para el perfil 
Route::get('/perfil', 'UsuarioController@show');

// Ruta del juego, una que te lleva a la vista y otra que te analiza las respuestas
Route::post('/juego', 'PreguntasController@inicio');
Route::get('/juego', 'PreguntasController@view')->name('juego');
Route::post('/respuesta', 'PreguntasController@siguiente')->name('siguiente');


//Juego con tiempo
// Route::get('/juegoTiempo/juego', 'PreguntasController@vistaTiempo')->name('juegoTiempo');






// Ruta para crear tus preguntas, una de la vista y otra que envia los datos 
Route::post('/crea', 'PreguntasController@agregar')->name('agregarPreguntas');
Route::get('/crea', 'PreguntasController@crud');

//Ruta para editar las preguntas y eliminar
Route::get('/editar/{id}', 'PreguntasController@editar');
Route::post('/editar/{id}', 'PreguntasController@update');
Route::get('/eliminar/{id}', 'PreguntasController@show');
Route::get('/delete/{id}', 'PreguntasController@delete');

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
Route::get('/admin/preguntas', 'PreguntasController@admin');
Route::get('/admin/usuarios', 'UsuarioController@admin');
Route::get('/admin/editar/{id}', 'UsuarioController@showEdit');
Route::post('/admin/editar/{id}', 'UsuarioController@update');
Route::get('/admin/eliminar/{id}', 'UsuarioController@showDelete');
Route::get('/admin/delete/{id}', 'UsuarioController@delete');
Route::get('/admin/admins', 'UsuarioController@nuevo');
Route::post('/admin/admins', 'UsuarioController@agregar');
Route::get('/admin/aprobar/{id}', 'PreguntasController@aprobar');
Route::get('/admin/descartar/{id}', 'PreguntasController@descartar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
