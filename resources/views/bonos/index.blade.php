@extends('layout')
@section('content')
<div class="card">
    <h5 class="card-header"><b>Bonos</h5>
    <div class="card-body">
        <a href="bonos/create" class="btn btn-secondary">Asignar Bono</a>
        <table class="table table-dark table-striper mt-4">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bonos as $bono)
                <tr>
                    <td>
                        {{$bono->nombreU}} {{$bono->apellidoU}}
                    </td>
                    <td>
                        {{$bono->motivo}}
                    </td>
                    <td>
                        {{$bono->valor_bono}} $
                    </td>
                    <td>
                        {{$bono->fecha_bono}}
                    </td>
                    <td>
                        <form action="{{ route('bonos.destroy',$bono->id_bonos )}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/bonos/{{$bono->id_bonos}}/edit" class="btn btn-info">Editar</a>
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
