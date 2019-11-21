<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use Auth;
// use App\Respuesta;
use Illuminate\Support\Facades\App;

class PreguntasController extends Controller
{
    public function show()
    {
        $preguntas = Pregunta::all();
        return view('verPreguntas')->with('preguntas', $preguntas);
    }

    public function detalle($id)
    {
        $pregunta = Pregunta::find($id);
        $respuestas = collect([
            $pregunta->Respuesta['correcta'],
            $pregunta->Respuesta['falsa1'],
            $pregunta->Respuesta['falsa2']
        ])->shuffle();
        
        return view('juego')->with('pregunta', $pregunta)->with('respuestas', $respuestas);
    }

    public function agregarPreguntas()
    {
        return view('crea');
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
}
