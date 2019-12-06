@extends('layouts.plantillaA')
@section('contenido')

{{--             
    <li>
        Usuario: {{$pregunta->user['nombre']}}
    </li> --}}
    <section class="container">
        <div class="cajita-puntos">
         Puntos:   {{session()->get('puntosPartida')}}
         <br>
         Vidas: {{session()->get('vidas')}}
        </div>
        <div class="cajita-juego">     
            <ul type="none">
                <li class="pregunta-juego">
                    <p class="preg-juego">
                        {{$pregunta->pregunta}}
                    </p> 
                </li>  
                <form action="{{url('respuesta')}}" method="post" id="respuesta-1">
                    @csrf
                    <input type="submit" name="respuesta-elegida" value="{{$pregunta->respuesta['correcta']}}" class="respuesta-juegoA">
                </form>
                
                <form action="{{url('respuesta')}}" method="post" id="respuesta-2">
                    @csrf
                    <input type="submit" name="respuesta-elegida" value="{{$pregunta->respuesta['falsa1']}}" class="respuesta-juegoB">
                </form>
                
                <form action="{{url('respuesta')}} " method="post" id="respuesta-3">
                    @csrf
                    <input type="submit" name="respuesta-elegida" value="{{$pregunta->respuesta['falsa2']}}" class="respuesta-juegoC">
                </form>
                
            </ul>
            
            <small class="small-juego">     
                Esta pregunta es de {{$pregunta->user['nombre']}} 
            </small> 
        </div>  
        
    </section>
    <script src="js/juego.js"></script>
    @endsection