@extends('layouts.plantillaA')
@section('contenido')
<section class="contenedor">
   <p class="p--contacto">
        Contacto
   </p>
    <form class="formulario--nosotros" action="" method="POST">
            @csrf
            @if ($errors)
            <ul class="errors">
                @foreach ($errors->all() as $error)
                 <li>{{$error}}</li>   
                @endforeach
            </ul>
            @endif
        <div class="form--nosotros">
            <label for="text">
                <p class="p--nosotros">Nombre</p>
            </label>
            <input class="in--nosotros" type="text" id="usuario" placeholder="Ingrese su nombre" name="nombre">
        </div>
        <div class="form--nosotros"><label for="email">
                <p class="p--nosotros">Email</p>
            </label>
            <input class="in--nosotros" type="email" id="email" placeholder="Introducir Email" name="email">
        </div>
        <div class="form--nosotros"><label for="text">
                <p class="p--nosotros">Asunto</p>
            </label>
            <select class="in--nosotros" name="asunto">
                <option value="1">Laboral</option>
                <option value="2">Error en el juego</option>
                <option value="3">Eventos</option>
                <option value="4">Otro</option>
            </select>
        </div>
        <div class="form--nosotros">
            <label for="Password">
                <p class="p--nosotros">Dejanos tu mensaje</p>
            </label>
            <textarea rows="4" cols="50" name="mensaje">
</textarea>

        </div>

        <center><button class="b_nosotros" type="submit">
                <p>Enviar</p>
            </button></center>
    </form>

@endsection