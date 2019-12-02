<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use App\User;
use Auth;
use App\Respuesta;
use Illuminate\Support\Facades\App;

class PreguntasController extends Controller
{

    //Funcion que reinicia los puntos y las vidas
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

    //Funcion para comparar las respuestas y depende si suma o resta puntos
    public function siguiente(Request $request)
    {
        $pregunta = Pregunta::inRandomOrder()->where('estado',1)->first();
            $usuario = Auth::user();
            // dd($pregunta->estado);
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
        // dd($pregunta);
        session()->put('pregunta', $pregunta);
        return redirect('/juego');
    }

    // Te retorna la vista con las preguntas y las relaciones
    public function view()
    {
        $pregunta = Pregunta::inRandomOrder()->where('estado', 1)->first();
        $respuestas = collect([
            $pregunta->Respuesta['correcta'],
            $pregunta->Respuesta['falsa1'],
            $pregunta->Respuesta['falsa2']
            ])->shuffle();
            
        session()->put('pregunta', $pregunta);
        return view('juego')->with('pregunta', $pregunta)->with('respuestas', $respuestas);
    }


    // public function vistaTiempo(){
    //     $preguntas = Pregunta::inRandomOrder()->first();
    //     return view('/juegoTiempo/juego')->with('preguntas', $preguntas);
    // }




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
        $nuevaPregunta->estado = 0;
        $nuevaPregunta->user_id = Auth::user()->id;
        $nuevaPregunta->respuesta_id = $nuevaRespuesta->id;

        $nuevaPregunta->save();

        return redirect('/crea');
    }

    public function editar($id)
    {
        $preguntas = Pregunta::find($id);
        return view('/editar')->with('preguntas', $preguntas);
    }

    public function update(Request $req, $id)
    {
        $respuesta = Respuesta::find($id);
        $respuesta->correcta = $req->input('correcta');
        $respuesta->falsa1 = $req->input('falsa1');
        $respuesta->falsa2 = $req->input('falsa2');

        $respuesta->save();

        $edita = Pregunta::find($id);
        $edita->pregunta = $req->input('pregunta');
        $edita->respuesta_id = $respuesta->id;
        $edita->save();

        return redirect('/crea');
    }

    public function show($id)
    {
        $pregunta = Pregunta::find($id);
        return view('/eliminar')->with('pregunta', $pregunta);
    }
    public function delete($id)
    {
        $pregunta = Pregunta::find($id);
        $pregunta->delete();
        return redirect('/crea');
    }

    //Retorna a la vista todas las preguntas
    public function admin()
    {
        $preguntas = Pregunta::all();
        return view('/admin/preguntas')->with('preguntas', $preguntas);
    }
    //Trae el id y te aprueba las preguntas
    public function aprobar($id)
    {
        $pregunta = Pregunta::find($id);
        if ($pregunta->estado == 0) {
            $pregunta->estado = $pregunta->estado + 1;
            $pregunta->save();
        }
        return redirect('/admin/preguntas');
    }
    // Trae el id y rechaza las preguntas
    public function descartar($id)
    {
        $pregunta = Pregunta::find($id);
        $pregunta->delete();
        return redirect('/admin/preguntas');
    }
}
