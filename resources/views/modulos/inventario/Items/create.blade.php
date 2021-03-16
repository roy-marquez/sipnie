@extends('adminlte::page')

@section('title', 'Items')

@section('css')
    @livewireStyles
@stop

@section('content')
    @if(session('status'))
            Incluir mensajes de sesión flash
        @include('modulos.partials.session-status')
    @endif

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                {{--    Incluir mensajes de validación en recuadro superior--}}
                @include('modulos.partials.validation-errors')
                <form class="bg-white py-3 px-4 shadow rounded"
                      method="POST" action="{{ route('items.store') }}">
                    <h2 class="text-secondary mb-3">
                        <i class="fas fa-plus-square mr-2"></i>
                        Agregar Item
                    </h2>
                    <hr>
                    @include('modulos.inventario.items._form', ['btnText' => 'Agregar'])
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js')

    @livewireScripts
    <script>
        /**
         * Formateo del numero de placa basado en el código de colegio y el numero de item
        * */
        const coleCodigo = document.querySelector("#colegio_codigo");
        const itemNum = document.querySelector("#item_num");
        const placa = document.querySelector("#placa");

        itemNum.oninput = function () {
            const s = itemNum.value;
            if (s.length > 6) {
                itemNum.value = s.substring(0, 6);
            }
            itemWithCeros = insertCeros(s);
            placa.value = `${coleCodigo.value}-${itemWithCeros}`;
        };

        function insertCeros(str = "", maxLenght = 6) {
            const l = str.length;
            const c = maxLenght - l;
            let ceros = "";
            if (l < 6) {
                for (let i = 0; i < c; i++) {
                    ceros = ceros + "0";
                }
                str = ceros + str;
            } else {
                if (l > 6) {
                    str = str.substring(0, maxLenght);
                }
            }
            return str;
        }
    </script>
@stop
