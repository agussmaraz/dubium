@extends('layouts.plantillaA')
@section('contenido')
<section class="container">
    <section class="sec--regis">
        <p class = "p--registro">Registro</p>
      
    <form  action="" method="POST" class="form--regis" enctype="multipart/form-data">
         <div class="form">
             <label  for="text"><p class="sub--texto">Usuario</p></label>
              <input class="in--regis" type="text" id="usuario" name="userName"  placeholder="Ingrese nombre de usuario" value="<?= isset($errores['userName']) ? '' : old('userName');?>">
              
                    <ul class="errores" type="none">
                        <li> </li>
                    </ul>
               
        </div>
        <div class="form">
             <label for="file"><p class="sub--texto"> Avatar </p></label>
             <input type="file" name="archivo" class="input--avatar">
            
                    <ul class="errores" type="none">
                        <li>  </li>
                    </ul>
         
       
        </div>
        <div class="form">
            <label  for="email"><p class="sub--texto">Email</p></label>
            <input class="in--regis" name="email"  type="email"  id="email" placeholder= "Introducir Email" value="<?= isset($errores['email']) ? '' : old('email');?>">
                    <ul class="errores" type="none">
                        <li> </li>
                    </ul>
             
         </div>
         <div class="form">
             <label  for="password"><p class="sub--texto">Contraseña</p></label>
             <input class="in--regis" name="password"  type="password" id= "password" placeholder="Intruduzca una contraseña">
                    <ul class="errores" type="none">
                        <li> </li>
                    </ul>
                
        </div>
        <div class="form">
            <label   for="password"><p class="sub--texto">Repetir contraseña</p></label>
            <input class="in--regis" name="passwordRepeat" type="password" class="form-control" id= "passwordRepeat" placeholder="Repita la contraseña">
                    <ul class="errores" type="none">
                        <li>  </li>
                    </ul>
        </div>
        <button type="submit" class="boton--login"> Registrate </button>


    </section>

    <p class="p--usuario"> Ya tenes cuenta? </p>
   <a class = "b--ingresa" href="login.php">Ingresa</a>

@endsection