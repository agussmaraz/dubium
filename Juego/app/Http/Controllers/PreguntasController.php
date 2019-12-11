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
    public function view(Request $req)
    {
        $puntosPartida = 0;
        if ($req) {
            $puntosPartida;
            session()->put('puntosPartida', $puntosPartida);
            $vidas = 3;
            session()->put('vidas', $vidas);
        }
        $pregunta = Pregunta::inRandomOrder()->where('estado', 1)->first();
        session()->put('pregunta', $pregunta);
        if ($req->get('tipo') == 'clasico') {
            return view('juego')->with('pregunta', $pregunta);
        }
        if ($req->get('tipo') == 'tiempo') {
            return view('/juegoTiempo/tiempo')->with('pregunta', $pregunta);
        }
    }


    //Funcion para comparar las respuestas y depende si suma o resta puntos
    public function siguiente(Request $request)
    {
        $pregunta = Pregunta::inRandomOrder()->where('estado', 1)->first();
        $usuario = Auth::user();
        if ($request['respuesta-elegida'] === session()->get('pregunta')->respuesta['correcta']) {
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
        return view('juego')->with('pregunta', $pregunta);
    }


    public function sig(Request $request)
    {
        $usuario = Auth::user();
        $pregunta = Pregunta::inRandomOrder()->where('estado', 1)->first();
        if ($request['respuesta-tiempo'] == session()->get('pregunta')->Respuesta['correcta']) {
            session()->put('puntosPartida', session()->get('puntosPartida') + 10);
        } else if ($request['respuesta-tiempo'] !== session()->get('pregunta')->Respuesta['correcta']) {
            session()->put('vidas', session()->get('vidas') - 1);
            session()->put('puntosPartida', session()->get('puntosPartida') - 5);
        }
        if (session()->get('vidas') < 1) {
            $usuario->puntos = $usuario->puntos + session()->get('puntosPartida');
            $usuario->save();
            return redirect('final');
        }
        return view('/juegoTiempo/tiempo')->with('pregunta', $pregunta);
    }



    // Esta funcion te trae las preguntas segun el usuario
    public function crud()
    {
        $preguntas = Auth::user()->pregunta;
        return view('crea')->with('preguntas', $preguntas);
    }

    public function agregar(Request $request)
    {
        $reglas = [
            "pregunta" => "filled|min:5|max:45|unique:preguntas,pregunta",
            "correcta" => "filled|min:5|max:45|unique:respuestas,correcta",
            "falsa1" => "filled|min:5|max:45",
            "falsa2" => "filled|min:5|max:5"
        ];

        $mensajes = [
            "filled" => "El campo :attribute no puede estar vacio",
            "min" => "El campo :attribute debe tener como mínimo :min caracteres",
            "max" => "El campo :attribute debe tener como máxmimo :max caracteres",
            "Unique" => "El campo :attribute ya se encuentra registrado"
        ];

        $this->validate($request, $reglas,$mensajes);   

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
