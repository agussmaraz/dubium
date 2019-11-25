@auth

@if (auth()->user()->perfil != 9)

<nav class="rounded-pill navbar">
    <button class="navbar-toggler bg-info btn-lg d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        Menú
    </button>
    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
        <ul class="nav nav-pills nav-fill">
                <li class="nav-item mr-2">
                        <a href="/"><img class="d-lg-block w-40 d-none" src="img/logo.png" alt="logo"></a>
                    </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="crea"> Crea </a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="f.a.q"> F.A.Q</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="contacto"> Contacto</a>
            </li>
            
           @if (auth()->user()->perfil != NULL)           
        <li class="nav-item">
            <a class="nav-link rounded-pill" href="../vistas-usuario/login.php">Inicia Sesión</a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link rounded-pill" href="perfil">Perfil</a>
        </li>
           
                <li class="nav-item">
                    <a id="logout" href="../vistas-usuario/logout.php" class="nav-link rounded-pill">Logout</a>
                </li>
            
                         

    </div>
    </ul>
</nav>
@endif



  
  @if (auth()->user()->perfil != 0)
  

<nav class="rounded-pill navbar">
    <button class="navbar-toggler bg-info btn-lg d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        Menú
    </button>

        <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
            <ul class="nav nav-pills nav-fill">
                    <li class="nav-item col-lg-2">
                            <a href="/"><img class="d-lg-block w-50 d-none" src="public/img/logo.png" alt="logo"></a>
                        </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill" href="../vistas-admin/vista-crud.php"> Usuarios </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill" href="../vistas-admin/vista-usuarios.php"> Admins</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill" href="../vistas-usuario/creaPreguntas.php"> preguntas</a>
                </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="../vistas-usuario/login.php">Logout</a>
            </li>
               
                
                             

        </div>
        </ul>
    </nav>
   
  
    @endif
  
    @endauth