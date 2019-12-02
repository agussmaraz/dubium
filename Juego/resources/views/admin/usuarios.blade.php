@extends('layouts.plantillaA')
@section('contenido')
<section class="container">
    <header>
        {{-- <div class="cajita-button">
            <a href="../vistas-usuario/creaPreguntas.php" class="button-volver">
                <i class="fas fa-chevron-circle-left"></i>
            </a>
        </div> --}}
    </header>
    <article class="crud-admin ">
        <h3 class="titulo-admin">
            Registro de preguntas
        </h3>
        <table class="table text-light table-bordered crud-admin ">
            <thead class="bg-transparent">
                <tr>
                    <th scope="col" class="in-crud"> Fecha </th>
                    <th scope="col" class="p-crud">Usuario</th>
                    <th scope="col" class="r-crud">Email</th>
                    <th scope="col" class="i-crud">Perfil</th>
                    <th scope="col" class="in-crud">Avatar</th>
                    <th scope="col" class="e-crud-admin">Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $key => $value) 
                <tr>
                    <th scope="row"> {{$value->created_at}} </th>
                    <td>{{$value->nombre}} </td>
                    <td>{{$value->email}} </td>
                    @if($value->perfil != 0)
                    <td>
                        Administrador
                        <a href="/admin/editar/{{$value->id}}"><i class="fas fa-edit"></i></a>    
                    </td>
                    @else 
                    <td>
                        Usuario
                        <a href="/admin/editar/{{$value->id}}"><i class="fas fa-edit"></i></a>    
                    </td>
                    @endif
                    <td>{{$value->avatar}} </td>
                    
                    {{-- <td> </td> --}}
                    <td>
                        <a href="/admin/eliminar/{{$value->id}}"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </article>
</section>
@endsection