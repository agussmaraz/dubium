@auth

@if (auth()->user()->perfil == 0)

<nav class="rounded-pill navbar">
    <button class="navbar-toggler bg-info btn-lg d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        Menú
    </button>
    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item mr-2">
                <a href="{{url('home')}}"><img class="d-lg-block w-40 d-none" src="/img/logo.png" alt="logo"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="crea"> Crea </a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="frecuentes"> FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="nosotros"> Nosotros </a>
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
                <a  class = "nav-link rounded-pill"href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    Logout
                </a>    
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            
            
            
        </div>
    </ul>
</nav>
@endif

@if (auth()->user()->perfil == 1)
<nav class="rounded-pill navbar">
    <button class="navbar-toggler bg-info btn-lg d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        Menú
    </button>
    
    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item col-lg-2">
                <a href="/"><img class="d-lg-block w-30 d-none" src="/img/logo.png" alt="logo"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="/admin/usuarios"> Usuarios </a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="/admin/admins"> Agregar </a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="/admin/preguntas"> Preguntas</a>
            </li>
            <li class="nav-item">
                <a  class = "nav-link rounded-pill"href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    Logout
                </a>    
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            
        </div>
    </ul>
</nav>
@endif

@endauth