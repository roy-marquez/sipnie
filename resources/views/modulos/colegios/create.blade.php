@extends('adminlte::page')

@section('title', 'Colegios')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                {{--    Incluir mensajes de validación--}}
                @include('modulos.partials.validation-errors')

                <form class="bg-white py-3 px-4 shadow rounded"
                      method="POST" action="{{ route('colegios') }}">
                    <h2 class="text-secondary mb-3">
                        Agregar Colegio
                    </h2>
                    <hr>
                    @include('modulos.colegios._form', ['btnText' => 'Agregar'])
                    {{--        <button> @lang('create') </button>--}}
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
{{--    <script>--}}
{{--        Swal.fire(--}}
{{--            'Agregar un nuevo Cole!',--}}
{{--            'Es fácil!, Pero revisa muy bien el Código Presupuestario',--}}
{{--            'success'--}}
{{--        )--}}
{{--    </script>--}}
@stop
