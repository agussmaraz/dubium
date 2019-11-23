@extends('layouts.plantillaA')
@section('contenido')
<section class="contenedor">
 
    <p class="titulo--frecuentes">Preguntas Frecuentes</p>

    <article class='FAQ--grilla'>

        <div class="Primer--div">
            <p class="p--dubium"> 
                Dubium 
            <p>
            <p class="FAQ--Info"> 
                Hola, somos el equipo de DUBIUM un juego que se trata de responder preguntas y derrotar a tus amigos en un duelo de conocimineto.
           </p>
        </div>

        <div class="Segundo--div">
            <p class="p-info">
                Info del juego
            </p>
            <p class="FAQ--Info">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, quas.
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ipsa.
            </p>
        </div>

        <div class="Primer--div">
            <p class="FAQ--tema">
                Temas
            </p>
            <p class="FAQ--Info">
                Este modo de juego se basa en elegir entre las diferentes categorias que existen en DUBIUM y responder una determina cantidad de preguntas de dicha categoria previamente elegida. El puntaje se basa en la cantidad de preguntas respondidas.
            </p>
            </div>

        <div class="Primer--div">
            <p class="FAQ--ahorcado">
                Ahorcado
                </p>
            <p class="FAQ--Info">
                Este modo de juego se basa en el clasico juego ahorcado. Se imprime una pregunta y la respuesta se ve representada con la forma del ahorcado.
            </p>
        </div>

        <div class="Primer--div">
            <p class="FAQ--muerte">
                Muerte súbita
            </p>
            <p class="FAQ--Info">
                Este modo de juego a diferencia del modo Tema son preguntas al azar acerca de cualquier categoria, el modo de juego se termina cuando se responde mal una pregunta. El puntaje se basa en la cantidad de respuestas acertadas.
            </p>
        </div>

    </article>


@endsection