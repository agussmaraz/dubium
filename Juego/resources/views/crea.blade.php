@extends('layouts.plantillaA')
@section('contenido')
<section class="container">
    <article>
        @if ($errors)
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        <p class="titulo--crea"> Creá tus propias preguntas! </p>
        <form action="" method="post" class="contenedor--form">
            @csrf
            <div class="cajas--form">
                <h3 class="subtitulos--crea1"> Escribi tu pregunta: </h3>
                <input type="text" name="pregunta" class="preguntainput--crea" placeholder="Escribi una pregunta" value="{{old("pregunta")}}">
            </div>
            <div class="cajas--form">
                <h3 class="subtitulos--crea2"> Escribi la respuesta: </h3>
                <input type="text" name="correcta" placeholder="Escribi una respuesta" class="respuesta--crea" value="{{old("correcta")}}">
                <br>
                <input type="text" name="falsa1" placeholder="Escribi la respuesta correcta" class="respuesta--crea" value="{{old("falsa1")}}">
                <br>
                <input type="text" name="falsa2" placeholder="Escribi una respuesta" class="respuesta--crea" value="{{old("falsa2")}}">
                
                <input type="submit" value="Guardar" class="boton--crea">
                
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
                    <th scope="col" class="i-crud">Respuesta incorrecta A</th>
                    <th scope="col" class="in-crud">Respuesta incorrecta B</th>
                    <th scope="col" class="p-crud">Estado</th>
                    <th scope="col" class="e-crud">Editar</th>
                    
                </tr>
            </thead>
            <tbody>
                
                @foreach($preguntas as $key => $pregunta)
                {{-- @dd($pregunta->id); --}}
                <tr>
                    <td scope="row"> 
                        {{$pregunta['pregunta']}}
                    </td>
                    <td>{{$pregunta->Respuesta['correcta']}}  </td>
                    <td>{{$pregunta->Respuesta['falsa1']}} </td>
                    <td>{{$pregunta->Respuesta['falsa2']}} </td>
                    @if($pregunta->estado == 0)
                    <td> <div class="espera"> En espera </div> </td>
                    @else
                    <td> <div class="aprobado">Aprobada</div></td>
                    @endif
                    <td>
                        <a href="editar/{{$pregunta->id}}"><i class="fas fa-edit"></i></a>    
                        <button class="eliminarPreg" id="{{$pregunta->id}}"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </article>
    
</section>
@endsection

