@extends('layout')
@section('content')
<div class="card">
    <h5 class="card-header"><b>Usuarios</h5>
    <div class="card-body">
        <a href="usuarios/create" class="btn btn-secondary">Registrar Usuario</a>
        <table class="table table-dark table-striper mt-4">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>
                        {{$usuario->nombre}}
                    </td>
                    <td>
                        {{$usuario->apellido}}
                    </td>
                    <td>
                        {{$usuario->email}}
                    </td>
                    <td>
                        {{$usuario->telefono}}
                    </td>
                    <td>
                        <form action="{{ route('usuarios.destroy',$usuario->id_usuario )}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/usuarios/{{$usuario->id_usuario}}/edit" class="btn btn-info">Editar</a>
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
