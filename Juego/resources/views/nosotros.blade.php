@extends('layouts.plantillaA')
@section('contenido')
<section class="contenedor">
<section class="sec--contacto">
    <p class="p--contacto">
        Nosotros
    </p>
    <div class="caja--contacto">
       <center> <img src="img/Iconos-Cosas-Varias/titulo.png" width="200px" class="img--contacto"></center>
        <p class="p--caja">
           <br> Es un juego creado por un grupo de estudiantes de Digital House.<br>
            Lo forman: Agustina quien es Scrum master junto con Mauricio y Tomas que son parte del Scrum Team.
           <br> Esperamos que puedan acceder a nuestro juego con facilidad y que puedan disfrutarlo, si necesitan contactarse 
            con nosotros pueden presionar el boton de abajo o tambien pueden seguirnos en nuestras redes sociales.
        </p>
    </div>
    <div class="caja--contactenos">
        <button id="btn-contacto" class="b_contactenos"> Contactenos </button>
    </div>

    
</section>

<script src="js/nosotros.js"></script>
@endsection