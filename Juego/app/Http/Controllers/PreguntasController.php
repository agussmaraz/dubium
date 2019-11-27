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

    public function inicio(Request $request)
    {
        $puntosPartida = 0;
        if ($request->juego) {
            $puntosPartida;
            session()->put('puntosPartida', $puntosPartida);
            $vidas = 3;
            session()->put('vidas', $vidas);
        }
        return redirect('/juego');
    }

    public function siguiente(Request $request)
    {
        $pregunta = Pregunta::inRandomOrder()->first();
        $usuario = Auth::user();
        if ($request['respuesta-elegida'] === session()->get("pregunta")->respuesta['correcta']) {
            session()->put('puntosPartida', session()->get('puntosPartida') + 10);
        } else if ($request['respuesta-elegida'] != session()->get("pregunta")->respuesta['correcta']) {
            session()->put('puntosPartida', session()->get('puntosPartida') - 5);
            session()->put('vidas', session()->get('vidas') - 1);
            if (session()->get('vidas') < 1) {
                $usuario->puntos = $usuario->puntos + session()->get('puntosPartida');
                $usuario->save();
                return redirect('final');
            }
        }
        session()->put('pregunta', $pregunta);
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

    public function vista()
    {
        return view('editar');
    }
}
