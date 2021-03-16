@extends('adminlte::page')

@section('title', 'Modelos')

@section('css')
    @livewireStyles
@stop

@section('content')
{{--    @if(session('status'))--}}
{{--        --}}{{--    Incluir mensajes de sesión flash--}}
{{--        @include('modulos.partials.session-status')--}}
{{--    @endif--}}

    <div class="container ">
{{--        <div class="row">--}}
{{--            <div class="col-12 col-sm-10 col-lg-6 mx-auto"">--}}
{{--            <div class="card" style="width: 18rem;">--}}
{{--                <div class="card-header">--}}
{{--                    <h3 class="text-muted">Ayuda</h3>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <h3 class="card-subtitle mb-2 text-muted">Editar un modelo</h3>--}}
{{--                    <p class="card-text">--}}
{{--                        En esta sección puede agregar modelos específicos que describan los ítems del inventario. <br>--}}
{{--                        Por ejemplo, un modelo específico de una portátil(laptop).--}}
{{--                        Estos modelos estarán disponibles y podrá seleccionarlos cada vez que se requiera agregar o editar ítems--}}
{{--                        del inventario.--}}
{{--                    </p>--}}
{{--                    <a href="#" class="btn btn-info">OK</a>--}}
{{--                    <a href="#" class="card-link">Ir al Manual</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
{{--            Incluir mensajes de validación en recuadro superior--}}
{{--                @include('modulos.partials.validation-errors')--}}

                <form class="bg-white py-3 px-4 shadow rounded"
                      method="POST" action="{{ route('modelos.update', $modelo) }}">
                    @method('PATCH')
                    <h2 class="text-secondary mb-3">
                        <i class="fas fa-plus-square mr-2"></i>
                        Editar Modelo
                    </h2>
                    <hr>
                    @include('modulos.inventario.modelos._form', ['btnText' => 'Guardar'])
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @livewireScripts
@stop
