@extends('adminlte::page')



@section('content_header')
    <h1 class="m-0 text-dark">Gerente</h1>
    
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
   {{--  <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
