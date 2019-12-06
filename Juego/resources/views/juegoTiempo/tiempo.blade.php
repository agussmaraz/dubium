@extends('layouts.plantillaA')
@section('contenido')
<section class="container">
    <div class="cajita-juegoTiempo">     
        puntos:  {{session()->get('puntosPartida')}}
        vidas: {{session()->get('vidas')}}
        <p class="preg-juego">
            {{-- {{$preguntas->pregunta}} --}}
            {{$pregunta->pregunta}}
        </p> 
        
        <form action="{{url('siguiente')}}" method="post" id="respuesta-1">
            @csrf
            <input type="submit" name="respuesta-tiempo" value="{{$pregunta->Respuesta['correcta']}}" class="respuesta-juegoA">
        </form>
        
        <form action="{{url('siguiente')}}" method="post" id="respuesta-2">
            @csrf
            <input type="submit" name="respuesta-tiempo" value="{{$pregunta->Respuesta['falsa1']}}" class="respuesta-juegoB">
        </form>
        
        <form action="{{url('siguiente')}} " method="post" id="respuesta-3">
            @csrf
            <input type="submit" name="respuesta-tiempo" value="{{$pregunta->Respuesta['falsa2']}}" class="respuesta-juegoC">
        </form>
        
    </div>
    
    <small class="small-juegoTiempo">     
        {{-- Esta pregunta es de {{$preguntas->user['nombre']}}  --}}
    </small> 
</section>  

@endsection