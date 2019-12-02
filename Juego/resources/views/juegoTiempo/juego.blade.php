@extends('layouts.plantillaA')
@section('contenido')
<section class="container">
    <div class="cajita-juegoTiempo">     
        
        <p class="preg-juego">
            {{$preguntas->pregunta}}
        </p> 
        
        
        {{$preguntas->Respuesta['correcta']}}
        <br>
        {{$preguntas->Respuesta['falsa1']}}
        <br>
        {{$preguntas->Respuesta['falsa2']}}
        
        
    </div>
    
    <small class="small-juegoTiempo">     
        Esta pregunta es de {{$preguntas->user['nombre']}} 
    </small> 
</section>  

@endsection