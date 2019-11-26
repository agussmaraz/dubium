@extends('layouts.plantillaA')
@section('contenido')
<body>
    <section class="container">
        <article class=HOME--titulo>
            
            <p id="bienvenido">Bienvenido {{Auth::user()->nombre}} </p>
            
            <img id="dubium" src="img/Iconos-Cosas-Varias/titulo.png" alt="Dubium logo">
            
            <h2 id="play">Pon a prueba tus conocimientos.</h2>
            

            <form action="{{route('juego')}}" method="POST">
                @csrf
                <input type="submit" name="juego" value="JUGAR" class="boton-jugar">
            </form>
            
        </article>
        
    </section>
</body>
<script src="js/main.js"></script>
@endsection
