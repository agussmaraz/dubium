<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
    <!-- Styles -->
    <style>
        html, body {
            background-color: #2C263F;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            height: 100vh;
            margin: 0;
        }
        
        .full-height {
            height: 70vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        
        .position-ref {
            position: relative;
        }
        
        .top-right {
            position: static;
            /* right: 10px; */
            /* top: 18px; */
            margin-top: 10px;
            text-align: center;
            /* background-color: #636b6f;
            height: 50px;
            width: 600px */
        }
        
        .content {
            text-align: center;
        }
        
        .title {
            font-size: 84px;
            margin-top: 100px;
            
        }
        .links > a {
            color: #636b6f;
            padding: 10px 30px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            background-color: #A0D8C8;
            border-radius: 20px;
        }
        
        
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            {{-- <a href="#"> --}}
                {{-- <img  src="/storage/img/mini-logo.png" alt="" width="60px"> --}}
            {{-- </a> --}}
            <a href="{{ url('/agregarPreguntas') }}"> Perfil</a>
            
            <a href="{{ url('/agregarPreguntas') }}"> F.A.Q</a>
            
            <a href="{{ url('/agregarPreguntas') }}"> Nosotros</a>
            
            <a href="{{ url('/agregarPreguntas') }}"> Crea </a>
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            
            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
        
        <div class="content">
            <div class="title">
                <img src="/storage/img/logo.png" alt="" width="750px">
            </div>
            <div>
                <h1>
                    Pon a prueba tus conocimientos 
                </h1>
            </div>
            
            {{-- <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div> --}}
        </div>
    </div>
</body>
</html>
