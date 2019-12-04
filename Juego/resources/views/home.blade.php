@extends('layouts.plantillaA')
@section('contenido')
<body>
    <section class="container">
        <article class=HOME--titulo>
            
            <p id="bienvenido">Bienvenido {{Auth::user()->nombre}} </p>
            
            <img id="dubium" src="img/Iconos-Cosas-Varias/titulo.png">
            
            <h2 id="play">Pon a prueba tus conocimientos.</h2>
            
            
            <form action="{{route('juego')}}" method="POST">
                @csrf
                <input type="submit" name="clasico" value="Clasico" class="boton-jugar">
            </form>
            <form action="{{url('/juegoTiempo/tiempo')}}" method="post" >
                @csrf
                <input type="submit" name="tiempo" value="Tiempo" class="boton-jugar" > 
            </form>
        </article>
        
    </section>
</body>
<script src="js/home.js"></script>
@endsection
