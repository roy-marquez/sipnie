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

    <div class="card d-none">
        <div class="card-tittle">
            Agregar un Modelo
        </div>
        <div class="card-body">
            <p class="card-text">
                En esta sección puede agregar modelos específicos que describan los ítems del inventario. <br>
                Por ejemplo, un modelo específico de una portátil(laptop).
                Estos modelos estarán disponibles y podrá seleccionarlos cada vez que se requiera agregar o editar ítems
                del inventario.
            </p>
        </div>
    </div>

{{--    <div class="card" style="width: 18rem;">--}}
{{--        <div class="card-header">--}}
{{--            <h3 class="text-muted">Featured</h3>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <h3 class="card-subtitle mb-2 text-muted">Card subtitle</h3>--}}
{{--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--            <a href="#" class="btn btn-info">Card link</a>--}}
{{--            <a href="#" class="card-link">Another link</a>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
{{--            Incluir mensajes de validación en recuadro superior--}}
{{--                @include('modulos.partials.validation-errors')--}}

                <form class="bg-white py-3 px-4 shadow rounded"
                      method="POST" action="{{ route('modelos.store') }}">
                    <h2 class="text-secondary mb-3">
                        <i class="fas fa-plus-square mr-2"></i>
                        Agregar Modelo
                    </h2>
{{--                    <button id="ayuda" class="btn-outline-info">--}}
{{--                        <i class="fas fa-help mr-2">Ayuda</i>--}}
{{--                    </button>--}}
                    <hr>
                    @include('modulos.inventario.modelos._form', ['btnText' => 'Agregar'])
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @livewireScripts
@stop
