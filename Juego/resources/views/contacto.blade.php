@extends('layouts.plantillaA')
@section('contenido')
<section class="contenedor">
   <p class="p--contacto">
        Contacto
   </p>
    <form class="formulario--nosotros" action="#" method="POST">
        <div class="form--nosotros">
            <label for="text">
                <p class="p--nosotros">Nombre</p>
            </label>
            <input class="in--nosotros" type="text" id="usuario" placeholder="Ingrese su nombre">
        </div>
        <div class="form--nosotros"><label for="email">
                <p class="p--nosotros">Email</p>
            </label>
            <input class="in--nosotros" type="email" id="email" placeholder="Introducir Email">
        </div>
        <div class="form--nosotros"><label for="text">
                <p class="p--nosotros">Asunto</p>
            </label>
            <select class="in--nosotros">
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
            <textarea rows="4" cols="50">
</textarea>

        </div>

        <center><button class="b_nosotros" type="submit">
                <p>Enviar</p>
            </button></center>
    </form>

@endsection