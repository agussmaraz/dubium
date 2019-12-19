@extends('layouts.plantillaA')
@section('contenido')

<section class="container">
    <article class="crud-admin ">
        <h3 class="titulo-admin">
            Registro de preguntas
        </h3>
        <table class="table text-light table-bordered crud-admin ">
            <thead class="bg-transparent">
                <tr>
                    <th scope="col" class="in-crud">Usuario</th>
                    <th scope="col" class="p-crud">Pregunta</th>
                    <th scope="col" class="r-crud">Respuesta correcta</th>
                    <th scope="col" class="i-crud">Respuesta incorrecta</th>
                    <th scope="col" class="in-crud">Respuesta incorrecta</th>
                    <th scope="col" class="in-crud">Estado</th>
                    <th scope="col" class="e-crud-admin">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($preguntas as $key => $pregunta)
                    {{-- @dd($pregunta->id) --}}
                    <td scope="row">{{$pregunta->User['email']}}</td>
                    <td>{{$pregunta->pregunta}}</td>
                    <td> {{$pregunta->Respuesta['correcta']}} </td>
                    <td>{{$pregunta->Respuesta['falsa1']}}</td>
                    <td>{{$pregunta->Respuesta['falsa2']}}</td>
                    @if($pregunta->estado == 0)
                    <td> {{$pregunta->estado}}<div class="nuevo"> Nuevo! </div> </td>
                    @else
                    <td>{{$pregunta->estado}} </td>
                    @endif
                    @if($pregunta->estado == 1)
                    <td>
                    <button class="eliminarPreg" id="{{$pregunta->id}}"><i class="fas fa-trash icono"></i></button>
                    </td>
                    @else
                    <td>
                        <a href="/admin/aprobar/{{$pregunta->id}} "><i class="fas fa-check-square icono"></i></a>
                        <a href="/admin/descartar/{{$pregunta->id}} "><i class="fas fa-times icono"></i></a>
                    </td>
                    @endif
                </tr>
            </tbody>
            @endforeach
        </table>
    </article>
</section>
@endsection