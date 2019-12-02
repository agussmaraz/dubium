@extends('layouts.plantillaA')
@section('contenido')
<br>
<h3 class="titulo-admin">
    Agregar un nuevo administrador
</h3>
<form action="" method="post" class="contenedor-admins">
    @csrf
    <div>
        <label for="name" class="label-admins"> Nombre </label>
        <br>
        <input type="text" name="name" placeholder="Nombre" class="input-admins" required>
    </div>
    <div>
        <label for="email" class="label-admins"> Email </label>
        <br>
        <input type="text" name="e-mail" placeholder="Email" class="input-admins" required>
    </div>
    <div>        
        <label for="" class="label-admins"> Contraseña</label>
        <br>
        <input type="password" name="password" placeholder="Contraseña" class="input-admins" required>
    </div>
    <div>        
        <label for="" class="label-admins"> Repetir contraseña</label>
        <br>
        <input type="password"  placeholder="Repetir contraseña" class="input-admins" required>
    </div>
    <div>
        <input type="submit" value="Guardar" class="boton--crea"> 
    </div>    
</form>
@endsection