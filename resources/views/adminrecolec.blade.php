@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-center">Recolectas del cafe</h1>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('admin.crearr')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha de Recoleccion</label>
                            <input type="text" class="form-control" id="fecha" name="fecha">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Empleado Responsable</label>
                            <input type="text" class="form-control" id="empleado" name="empleado">
                        </div>
                        <div class="mb-3">
                            <label for="cafe" class="form-label">Tipo de Cafe</label>
                            <input type="text" class="form-control" id="tipo" name="tipo">
                        </div>
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad Recolectada (KG)</label>
                            <input type="text" class="form-control" id="cantidad" name="cantidad">
                        </div>
                        <div class="mb-3">
                            <label for="lote" class="form-label">Lote</label>
                            <input type="text" class="form-control" id="lote" name="lote">
                        </div>
                        <div class="mb-3">
                            <label for="observacion" class="form-label">Observaciones Adicionales</label>
                            <input type="text" class="form-control" id="observacion" name="observacion">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
