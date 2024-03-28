@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Dashboard</h1>

@stop

@section('content')
<div class="contenido">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-adminlte-input name="iUser" placeholder="Nombre" label-class="text-lightblue">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <x-adminlte-input name="Nombre" placeholder="Cedula" />
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <x-adminlte-select name="optionsTest2" label="Convenio">
                <x-adminlte-options :options="['Contrato', 'Jornal']" placeholder="Convenio..." />
            </x-adminlte-select>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <x-adminlte-input name="Nombre" placeholder="Salario" />
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <x-adminlte-input name="fecha" type="date" label="Fecha de Inicio" placeholder="Selecciona una fecha" />
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <x-adminlte-select name="optionsTest2" label="Estado">
                <x-adminlte-options :options="['Activo', 'Inactivo']" placeholder="Estado..." />
            </x-adminlte-select>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <x-adminlte-input name="Nombre" placeholder="Dirección" />
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <x-adminlte-input name="Nombre" placeholder="Teléfono" />
        </div>
    </div>


    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Volver a Dashboard</a>
        </div>
    </div>

</div>




@stop



@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");

</script>
@stop
