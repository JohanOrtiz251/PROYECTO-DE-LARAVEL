@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-center">Recolectas Registradas del café</h1>
@stop

@section('content')

<a href="{{ route('admin.recolectas') }}">Crear Registro</a>
<br><br>
<div class="row justify-content-center">
    <div class="col-md-13">
        <div class="card bg-dark border-dark custom-rounded">
            <div class="card-header text-white text-center py-3">
                <h3 class="card-title m-0">Listado de Recolectas</h3>
            </div>
            <div class="card-body">
                @if(count($recolectas) > 0)
                <div class="table-responsive">
                    <table class="table table-bordered table-dark rounded">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha</th>
                                <th>Empleado</th>
                                <th>Tipo</th>
                                <th>Cantidad</th>
                                <th>Lote</th>
                                <th>Observación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recolectas as $recolecta)
                            <tr>
                                <td>{{ $recolecta->id }}</td>
                                <td>{{ $recolecta->fecha }}</td>
                                <td>{{ $recolecta->empleado }}</td>
                                <td>{{ $recolecta->tipo }}</td>
                                <td>{{ $recolecta->cantidad }}</td>
                                <td>{{ $recolecta->lote }}</td>
                                <td>{{ $recolecta->observacion }}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $recolecta->id) }}" class="btn btn-primary">Editar</a> 
                                    <form action="{{ route('admin.delete', $recolecta->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta recolecta?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <p class="empty-list">Lista Vacía</p>
                @endif
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <style>
        .custom-rounded {
            border-radius: 25px; /* Puedes ajustar este valor según lo necesites */
        }
    </style>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
