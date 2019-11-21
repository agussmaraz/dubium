@extends('layouts.plantillaA')
@section('contenido')
<body>
        <section class="container">
            <h1 class="titulo--ranking"> Ranking </h1>
            <article class="cajamadre--ranking">
                <div class="caja1--ranking">
                    <ul type="none">
                        <li class="ranking--usuario">
                            <p class="nombres--ranking user1"> Usuario <span class="numeros--ranking"> 1898 pts</span> </p>
                        </li>
    
                        <li class="ranking--usuario">
                            <p class="nombres--ranking user2"> Usuario <span class="numeros--ranking"> 1898 pts</span> </p>
                        </li>
                        <li class="ranking--usuario">
                            <p class="nombres--ranking user3"> Usuario <span class="numeros--ranking"> 1898 pts</span> </p>
                        </li>
                    </ul>
                </div>
                <div class="caja2--usuario">
                    <img class="img--usuario" width="230px" height="230px" src="<?= (isset($_SESSION['avatar'])) ? $_SESSION['avatar'] : "../avatars/user.jpg"; ?>">
                
                    <p class="nombre--usuario"> <?= (isset($_SESSION['nombre'])) ? $_SESSION['nombre'] : "Usuario"; ?> </p>
                    <p class="puntos--usuario"> <?= $_SESSION['puntos'] ?? 0 ?> </p>
                    <p class="puesto--usuario"> Puesto 6</p>
                </div>
            </article>
@endsection