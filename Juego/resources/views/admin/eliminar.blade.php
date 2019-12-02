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
            <div class="titulo-editar">
                <h3>Seguro que deseas eliminar al siguiente usuario?</h3>
            </div>
            <div class="pregunta-eliminar">
                <h4>
                    "{{$usuario->email}} "
                </h4>
                <div class="div-eliminar">
                    <a href="/admin/delete/{{$usuario->id}}" class="div-button-editar"> Eliminar</a>
                </div>
            </div>
        </section>
    </body>
    
    
    @endsection