@extends('layouts.plantillaA')
@section('contenido')
<div class="cajita-perdiste">
    <br>
    <h3 class="titulo-perdiste">
        Upss! perdiste {{Auth::user()->nombre}}!
    </h3>
    <ul type="none">
        <br>
        <h4>
            Tus puntos: {{session()->get('puntosPartida')}}
        </h4>
        <br>
            <a href="/juego?tipo=clasico" class="volverJugar"> Volver a jugar </a>
        </ul>
      
    </form>
</div>
@endsection