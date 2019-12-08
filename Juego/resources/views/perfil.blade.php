@extends('layouts.plantillaA')
@section('contenido')
<body>
    
    <section class="container">
        <h1 class="titulo--ranking"> Ranking </h1>
        <article class="cajamadre--ranking">
            <div class="caja1--ranking">
                {{-- {{$usuarios->sortByDesc('puntos')}} --}}
                @foreach ($usuarios as $usuario)
                <ul type="none">
                    <li class="ranking--usuario">
                        <p class="nombres--ranking user1"> {{$usuario['nombre']}} 
                            <span class="numeros--ranking">{{$usuario['puntos']}}</span>
                        </p>
                    </li>
                </ul> 
                
                @endforeach
            </div>
            {{-- @dd($foto); --}}
            {{-- @dd(auth::user()->avatar); --}}
            <div class="caja2--usuario">
            <img class="img--usuario" width="230px" height="230px" src="/storage/{{Auth::user()->avatar}} " alt="{{auth()->user()->nombre}}"> 
                <p class="nombre--usuario"> {{Auth::user()->nombre}} </p>
                <p class="puntos--usuario"> {{Auth::user()->puntos}}  </p>
                <p class="puesto--usuario"> </p>
            </div>
        </article>
        @endsection