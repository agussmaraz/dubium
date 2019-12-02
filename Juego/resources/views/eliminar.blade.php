@extends('layouts.plantillaA');
@section('contenido')
<section class="container">
    <article class="button-title">
        <div class="cajita-button">
            <br>
            <a href="/crea" class="button-volver">
                <i class="fas fa-chevron-circle-left"></i>
            </a>
        </div>
        
        <div class="titulo-editar">
            <h3>Seguro que deseas eliminar la siguiente pregunta:
            </div>
            <div class="pregunta-eliminar">
                <h4>
                    "{{$pregunta->pregunta}}"
                </h4>
            </div>
            <div class="respuesta-eliminar">
                <h3 class="eliminar-preguntas">
                    Respuestas:
                </h3>
                <h4>
                    <ul type="none">
                        <li>
                            <p class="p-resp">
                                Correcta - <span class="resp">"{{$pregunta->Respuesta['correcta']}}"</span> 
                            </p> 
                        </li>
                        <li>
                            <p class="p-resp">
                                Falsa numero A - <span class="resp">"{{$pregunta->Respuesta['falsa1']}}"</span>
                            </p>
                        </li>
                        <li>
                            <p class="p-resp">
                                Falsa numero B - <span class="resp">"{{$pregunta->Respuesta['falsa2']}}"</span>
                            </p>
                        </li>
                    </ul>
                </h4>
                
            </div>
            <div class="enviar">
                    <a href="/delete/{{$pregunta->id}}"> Si, eliminar </a>
            </div>
        </section>
        @endsection