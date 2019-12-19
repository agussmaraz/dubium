@extends('layouts.plantillaA')
@section('contenido')
<body onload="carga()">
 
    <section class="container">
        
        <div class="cajaTiempo">
            <span id="minutos">0</span>:<span id="segundos">5</span>
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
                    <input type="submit" name="respuesta-tiempo" value="{{$respuestas[0]}}" class="respuesta-juegoA">
                </form>
                
                <form action="{{url('siguiente')}}" method="post" id="respuesta-2">
                    @csrf
                    <input type="submit" name="respuesta-tiempo" value="{{$respuestas[1]}}" class="respuesta-juegoB">
                </form>
                
                <form action="{{url('siguiente')}} " method="post" id="respuesta-3">
                    @csrf
                    <input type="submit" name="respuesta-tiempo" value="{{$respuestas[2]}}" class="respuesta-juegoC">
                </form>
            </ul>
            
        </div>
        
        <small class="small-juegoTiempo">     
            {{-- Esta pregunta es de {{$preguntas->user['nombre']}}  --}}
        </small> 
        {{-- </body> --}}
    </section>  
    <script src="/js/tiempo.js"></script>
    @endsection