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
                        <p class="nombres--ranking user1"> {{$usuario['nombre']}} </p>
                    </li>
                    <li class="numeros--ranking">{{$usuario['puntos']}}</li> 
                    
                    
                    @endforeach
                </div>
                <div class="caja2--usuario">
                    <img class="img--usuario" width="230px" height="230px" src="">
                    
                    <p class="nombre--usuario"> {{Auth::user()->nombre}} </p>
                    <p class="puntos--usuario"> {{Auth::user()->puntos}}  </p>
                    <p class="puesto--usuario"> </p>
                </div>
            </article>
            @endsection