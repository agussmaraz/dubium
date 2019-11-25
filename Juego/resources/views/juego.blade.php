@extends('layouts.plantillaA')
@section('contenido')

{{--             
    <li>
        Usuario: {{$pregunta->user['nombre']}}
    </li> --}}
    <section class="container">
        <div class="cajita-puntos">
         Puntos:   {{Auth::user()->puntos}}
        </div>
        <div class="cajita-juego">     
            <ul type="none">
                <li class="pregunta-juego">
                    <p class="preg-juego">
                        {{$pregunta->pregunta}}
                    </p> 
                </li>  
                <form action="{{url('respuesta')}}" method="post">
                    @csrf
                    <input type="submit" name="respuesta-elegida" value="{{$respuestas[0]}}" class="respuesta-juegoA">
                </form>
                
                <form action="{{url('respuesta')}}" method="post">
                    @csrf
                    <input type="submit" name="respuesta-elegida" value="{{$respuestas[1]}}" class="respuesta-juegoB">
                </form>
                
                <form action="{{url('respuesta')}} " method="post">
                    @csrf
                    <input type="submit" name="respuesta-elegida" value="{{$respuestas[2]}}" class="respuesta-juegoC">
                </form>
                
            </ul>
            
            <small class="small-juego">     
                Esta pregunta es de {{$pregunta->user['nombre']}} 
            </small> 
        </div>  
        
    </section>
    
    @endsection