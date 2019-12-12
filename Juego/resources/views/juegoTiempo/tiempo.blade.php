@extends('layouts.plantillaA')
@section('contenido')
<section class="container">
    <div class="cajita-puntos">
        puntos:  {{session()->get('puntosPartida')}}
        vidas: {{session()->get('vidas')}}
    </div>
    <div class="cajita-juegoTiempo">     
        <ul type='none'>
            <li class="pregunta-juego">
                <p class="preg-juego">
                    {{-- {{$preguntas->pregunta}} --}}
                    {{$pregunta->pregunta}}
                </p> 
            </li>
            
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
        </ul>
        
    </div>
    
    <small class="small-juegoTiempo">     
        {{-- Esta pregunta es de {{$preguntas->user['nombre']}}  --}}
    </small> 
</section>  

@endsection