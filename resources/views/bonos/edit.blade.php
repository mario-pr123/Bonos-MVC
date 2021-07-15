@extends('layout')
@section('content')
<div class="card">
    <h5 class="card-header"><b>Editar Usuario</h5>
    <div class="card-body">
        <form action="/bonos/{{$bonos->id_bonos}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Motivo</label>
                <input id="motivo" name="motivo" type="text" maxlength="50" class="form-control" value="{{$bonos->motivo}}" textindex="1" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Valor</label>
                <input id="valor_bono" name="valor_bono" type="text" maxlength="50" class="form-control"  value="{{$bonos->valor_bono}}" textindex="2" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha</label>
                <input id="fecha_bono" name="fecha_bono" type="date" maxlength="50" class="form-control"  value="{{$bonos->fecha_bono}}" textindex="3" required>
            </div>
            <a href="/bonos" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

        </form>
    </div>
</div>
@stop
