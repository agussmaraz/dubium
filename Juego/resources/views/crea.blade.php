@extends('layouts.plantillaA')
@section('contenido')
<section class="container">
    <article>
        <p class="titulo--crea"> Creá tus propias preguntas! </p>
        <form action="" method="post" class="contenedor--form">
            @csrf
            <div class="cajas--form">
                <h3 class="subtitulos--crea1"> Escribi tu pregunta: </h3>
                <input type="text" name="pregunta" class="preguntainput--crea">
            </div>
            <div class="cajas--form">
                <h3 class="subtitulos--crea2"> Escribi la respuesta: </h3>
                <input type="text" name="correcta" placeholder="Escribi una respuesta" class="respuesta--crea">
                <br>
                <input type="text" name="falsa1" placeholder="Escribi la respuesta correcta" class="respuesta--crea">
                <br>
                <input type="text" name="falsa2" placeholder="Escribi una respuesta" class="respuesta--crea">
                
                <input type="submit" value="Guardar" class="boton--crea">
                
            </div>
            <div class="cajas--form">
                <h3 class="subtitulos--crea3">Selecciona el tema:</h3>
                <label for="tema" class="tematica--crea">
                    <p> Muerte subita</p>
                </label>
                <input type="radio" name="#">
            </div>            
        </form>
    </article>
    <p class="subtitulo--crea"> Mis preguntas</p>
    
    <article class="crud ">
        <table class="table text-light table-bordered ">
            <thead class="bg-transparent">
                <tr>
                    <th scope="col" class="p-crud">Pregunta</th>
                    <th scope="col" class="r-crud">Respuesta correcta</th>
                    <th scope="col" class="i-crud">Respuesta incorrecta</th>
                    <th scope="col" class="in-crud">Respuesta incorrecta</th>
                    <th scope="col" class="e-crud">Editar</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($preguntas as $pregunta)
                <tr>
                    <td scope="row"> 
                        {{$pregunta['pregunta']}}
                    </td>
                    <td>{{$pregunta->Respuesta['correcta']}}  </td>
                    <td>{{$pregunta->Respuesta['falsa1']}} </td>
                    <td>{{$pregunta->Respuesta['falsa2']}} </td>
                    
                    {{-- @foreach($pregunta as $key => $value) --}}
                    {{-- /editar/{{$value->id}} --}}
                    <td> <a href="{{(url('/editar'))}} "><i class="fas fa-edit"></i></a>
                        {{-- {{$key}}
                        @endforeach   --}}
                        <a href="#"><i class="fas fa-trash"></i></a></td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </article>
        
    </section>
    @endsection
    
    