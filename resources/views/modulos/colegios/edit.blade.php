@extends('adminlte::page')

@section('title', 'Colegios')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                {{--    Incluir mensajes de validación--}}
                @include('modulos.partials.validation-errors')

                <form class="bg-white py-3 px-4 shadow rounded"
                    method="POST" action="{{ route('colegios.update', $colegio) }}">
                    @method('PATCH')
                    <h2 class="text-seconday mb-3">
                        Editar Colegio
                    </h2>
                    <hr>
                    @include('modulos.colegios._form', ['btnText' => 'Guardar'])
                    {{--        <button> @lang('create') </button>--}}
                </form>
            </div>
        </div>
@endsection

@section('js')
    <script>
        Swal.fire(
            '¡Vamos a Editar un Cole!',
            'Es fácil!',
            'success'
        )
    </script>
@endsection
