@extends('adminlte::page')

@section('title', 'Colegios')

@section('content_header')
    <h1 class="header">Agregar Colegio</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                {{--    Incluir mensajes de validación--}}
                @include('modulos.partials.validation-errors')

                <form class="bg-white py-3 px-4 shadow rounded"
                      method="POST" action="{{ route('colegios') }}">
                    <h1 class="display-4 mb-3">
                        Crear Colegio
                    </h1>
                    <hr>
                    @include('modulos.colegios._form', ['btnText' => 'Crear'])
                    {{--        <button> @lang('create') </button>--}}
                </form>
            </div>
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
