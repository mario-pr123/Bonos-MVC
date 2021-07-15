@extends('layout')
@section('content')
<div class="card">
    <h5 class="card-header"><b>Nuevo Bono</h5>
    <div class="card-body">
        <form action="/bonos" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Usuario</label>
                <select class="form-control" aria-label="Default select example" id="usuario_id_usuario" name="usuario_id_usuario">
                    @foreach($usuarios as $element)
                    <option value="{{ $element->id_usuario }}">{{ $element->nombre }} {{ $element->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Motivo</label>
                <input id="motivo" name="motivo" type="text"  maxlength="50" class="form-control" textindex="2" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Valor</label>
                <input id="valor_bono" name="valor_bono" type="text" maxlength="50" class="form-control" textindex="3" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha</label>
                <input id="fecha_bono" name="fecha_bono" type="date" maxlength="25" class="form-control" textindex="4" required>
            </div>
            <a href="/bonos" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        </form>
    </div>
</div>
@stop
