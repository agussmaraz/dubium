<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use App\User;
use Auth;
// use App\Respuesta;
use Illuminate\Support\Facades\App;

class PreguntasController extends Controller
{


    public function siguiente(Request $request)
    {
        $pregunta = Pregunta::inRandomOrder()->first();
        //    dd($request->all());
        //    dd(session("pregunta")->respuesta['correcta']);
        $usuario = Auth::user();
        if ($request['respuesta-elegida'] === session()->get("pregunta")->respuesta['correcta']) {
            $usuario->puntos = $usuario->puntos + 10;
            $usuario->save();
            // dd($usuario);
        } else {
            $usuario->puntos = $usuario->puntos - 5;
            $usuario->save();
        }
        // session()->put('puntos', $usuario);
        session()->put('pregunta', $pregunta);
        // dd($request['respuesta-elegida']);
        return redirect('/juego');
    }

    public function view()
    {
        $pregunta = Pregunta::inRandomOrder()->first();
        $respuestas = collect([
            $pregunta->Respuesta['correcta'],
            $pregunta->Respuesta['falsa1'],
            $pregunta->Respuesta['falsa2']
        ])->shuffle();

        session()->put('pregunta', $pregunta);


        return view('juego')->with('pregunta', $pregunta)->with('respuestas', $respuestas);
    }

    // Esta funcion te trae las preguntas segun el usuario
    public function crud()
    {
        $preguntas = Auth::user()->pregunta;
        return view('crea')->with('preguntas', $preguntas);
    }

    public function agregar(Request $request)
    {
        // dd($request->all());
        $nuevaRespuesta = new \App\Respuesta();
        $nuevaRespuesta->correcta = $request['correcta'];
        $nuevaRespuesta->falsa1 = $request['falsa1'];
        $nuevaRespuesta->falsa2 = $request['falsa2'];
        $nuevaRespuesta->save();

        $nuevaPregunta = new \App\Pregunta();
        $nuevaPregunta->pregunta = $request['pregunta'];
        $nuevaPregunta->user_id = Auth::user()->id;
        $nuevaPregunta->respuesta_id = $nuevaRespuesta->id;

        $nuevaPregunta->save();

        return redirect('/crea');
    }

    public function vista(){
        // $pregunta = Pregunta::find($id);
        // dd($pregunta);
        return view('editar');
    }


    // public function vista(){
    //     return view('editar');
    // }
}
