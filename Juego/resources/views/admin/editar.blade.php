@extends('layouts.plantillaA')
@section('contenido')
<body>
    <section class="container">
        <article class="button-title">
            <div class="cajita-button">
                <a href="/admin/usuarios" class="button-volver">
                    <i class="fas fa-chevron-circle-left"></i>
                </a>
            </div>
            
            <div>
                <h2 class="titulo-editar">
                    El usuario que elegiste para editar es:
                </h2>
            </div>
        </article>
        <div class="pregunta-elegida">
            <h4>
                " {{$usuario->email}}  "
            </h4>
        </div>
        <article class="form-editar">
            <div>
                <h5> Estas seguro que quieres cambiarle el perfil a {{$usuario->nombre}}? </h5>
            </div>
            <form action="" method="post">
                @csrf
                <div>
                    <input type="submit" value="Actualizar" class="div-button-editar">
                </div>
            </form>
        </article>
    </section>
</body>
@endsection