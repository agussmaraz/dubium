<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Respuesta;

class RespuestaController extends Controller
{
    public function show(){
        $respuestas = Respuesta::all();
        return view('verRespuestas')->with('respuestas', $respuestas);
    }
    // public function detalle($id){
    //     $respuesta = Respuesta::find($id);
    //     return view('juego')->with('respuesta', $respuesta);
    // }
    
}
