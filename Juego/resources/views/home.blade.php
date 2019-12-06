@extends('layouts.plantillaA')
@section('contenido')
<body>
    <section class="container">
        <article class=HOME--titulo>
            
            <p id="bienvenido">Bienvenido {{Auth::user()->nombre}} </p>
            
            <img id="dubium" src="img/Iconos-Cosas-Varias/titulo.png">
            
            <h2 id="play">Pon a prueba tus conocimientos.</h2>
            
            <div class="caja-jugar">
                <a href="/juego?tipo=clasico" class="boton-jugar">Clasico</a>
                <a href="/juegoTiempo/tiempo?tipo=tiempo" class="boton-tiempo">Tiempo</a>
            </div>
            
        </article>
        
    </section>
</body>
<script src="js/home.js"></script>
@endsection
