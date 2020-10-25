@extends('adminlte::page')

@section('title', 'Colegios')

@section('content_header')
    <h1>Nuevo Colegio</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Crear Colegio
            </h1>
        </div>

        <div class="card-body">
            Aquí va el form...
        </div>

@endsection

@section('js')
    <script>
        Swal.fire(
            'Vamos a Agregar un nuevo Cole!',
            'es fácil!',
            'success'
        )
    </script>
@stop
