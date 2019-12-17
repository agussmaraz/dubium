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
                @foreach ($usuarios as $user) 
                <tr>
                    <th scope="row"> {{$user->created_at}} </th>
                    <td>{{$user->nombre}} </td>
                    <td>{{$user->email}} </td>
                    
                    <td class="admin">
                        <span class="dato" id="{{$user->perfil}}">
                            @if($user->perfil != 0)
                            Administrador
                            @else
                            Usuario
                            @endif
                        </span>
                        <button class="editarAdmin" id="{{$user->id}}" ><i class="fas fa-edit"></i></button>
                    </td>
                    <td>{{$user->avatar}} </td>
                    
                    {{-- <td> </td> --}}
                    <td>
                        <a href="/admin/eliminar/{{$user->id}}"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </article>
</section>
@endsection