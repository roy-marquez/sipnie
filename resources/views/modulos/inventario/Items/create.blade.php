@extends('adminlte::page')

@section('title', 'Items')

@section('content')
{{--    @if(session('status'))--}}
{{--        --}}{{--    Incluir mensajes de sesión flash--}}
{{--        @include('modulos.partials.session-status')--}}
{{--    @endif--}}

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white py-3 px-4 shadow rounded"
                      method="POST" action="{{ route('modelos.store') }}">
                    <h2 class="text-secondary mb-3">
                        <i class="fas fa-plus-square mr-2"></i>
                        Agregar Item a Inventario
                    </h2>
                    <hr>
                    @include('modulos.inventario.items._form', ['btnText' => 'Agregar'])
                </form>
            </div>
        </div>
    </div>

@endsection
