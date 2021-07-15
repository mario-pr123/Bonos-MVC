@extends('layout')
@section('content')
<style>
    .form-group-r {
        margin-right: 1rem;
    }
</style>
<div class="card">
    <h5 class="card-header"><b>Filtrar Bonos</h5>
    <div class="card-body">
        <form action="/filtrarBonos" method="POST">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <div class="form-group-r">
                        <div class="card">
                            <h6 class="card-header"><label class="control-label" for="date"><b>Desde:</b></label></h6>
                            <div class="card-body">
                                <input class="form-control" id="fecha1" name="fecha1" type="date" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-r">
                        <div class="card">
                            <h6 class="card-header"><label class="control-label" for="date"><b>Hasta:</b></label></h6>
                            <div class="card-body">
                                <input class="form-control" id="fecha2" name="fecha2" type="date" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card">
                            <h6 class="card-header"><b>Total Bonos</b></h6>
                            <div class="card-body">
                                {{$total}} $
                            </div>
                        </div>
                    </div>
                </div>
                <br><span class="input-group-btn"><button type="submit"
                        class="btn btn-secondary">Filtrar</button></span>
                <table class="table table-dark table-striper mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Usuario</th>
                            <th scope="col">Numero de Bonos</th>
                            <th scope="col">Valor Total por Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($filtro))
                        @foreach ($filtro as $bono)
                        <tr>
                            <td>{{$bono->nombre}} {{$bono->apellido}}</td>
                            <td>{{$bono->contador}}</td>
                            <td>{{$bono->filtro_usuario}} $</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
    </div>
    @stop
