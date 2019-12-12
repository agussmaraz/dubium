@extends('layouts.PlantillaA');
@section('contenido');

<section class="form-editar">
    <h4 class="p-foto">
        Hola {{Auth::user()->nombre}}
    </h4>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="label"> Elige un avatar: </label>
        </div>
        <div>
            <input type="file" name="avatar">
        </div>
        <input type="submit">
    </form>
</section>
@endsection