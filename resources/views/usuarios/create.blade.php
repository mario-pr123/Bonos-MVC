@extends('layout')
@section('content')
<div class="card">
    <h5 class="card-header"><b>Nuevo Usuario</h5>
    <div class="card-body">
        <form action="/usuarios" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text"  maxlength="50" class="form-control" textindex="1" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Apellido</label>
                <input id="apellido" name="apellido" type="text"  maxlength="50" class="form-control" textindex="2" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input id="email" name="email" type="text" maxlength="50" class="form-control" textindex="3" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input id="password" name="password" type="password" maxlength="25" class="form-control" textindex="4" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Telefono</label>
                <input id="telefono" name="telefono" type="number" class="form-control" textindex="4" required>
            </div>
            <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        </form>
    </div>
</div>
@stop
