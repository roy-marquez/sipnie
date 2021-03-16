@extends('adminlte::page')

@section('title', 'Colegios')

@section('content')
    @if(session('status'))
        {{--    Incluir mensajes de sesión flash--}}
        @include('modulos.partials.session-status')
    @endif


<div class="card">
    <div class="d-flex justify-content-between align-items-center mt-3 mx-3">
        <h2 class="text-secondary">
            Modelos
        </h2>
        <button class="btn btn-success">
            <a href="{{ route('modelos.create') }} " class="text-white"><i class="fas fa-plus-circle mr-2"> </i>Agregar</a>
        </button>
    </div>
    <hr>
    <div class="card-body">
        <table id="dt" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">Categoría</th>
                <th class="text-center">SubCategoría</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Nombre/Código</th>
                <th class="text-center">Descripción</th>
            </tr>
            </thead>
            <tbody>
            @forelse($modelos as $modelo)
                <tr class="align-middle">
{{--                    <td class="text-center align-middle">--}}
{{--                        <a href="{{ route('modelo.show',$modelo }}">--}}
{{--                            @if($colegio->escudo_ruta != null)--}}
{{--                                <img  class="img-size-32" src="/storage/images/escudos/{{$colegio->escudo_ruta}}" alt="Escudo de {{ $colegio->nombre }} ">--}}
{{--                            @else--}}
{{--                                <img  class="img-size-32" src="/storage/images/escudos/escudo_pendiente.png" alt="Escudo de {{ $colegio->nombre }} no disponible...">--}}
{{--                            @endif--}}
{{--                        </a>--}}
{{--                    </td>--}}
                    <td class="align-middle">
                        <a href="{{ route('modelos.show',$modelo) }}">
                            <i class="fas fa-eye"> &nbsp </i>{{ $modelo->id }}
                        </a>
                    </td>

                    <td class="align-middle">
                        <a href="{{ route('categorias.index') }}">
                            <i class="fas fa-angle-double-up"> &nbsp</i>{{ $modelo->categoria->nombre }}
                        </a>
                    </td>

                    <td class="align-middle">
                        <a href="{{ route('modelos.show',$modelo) }}">
                            <i class="fas fa-angle-up">&nbsp</i>{{ $modelo->subcategoria->nombre}}
                        </a>
                    </td>

                    <td>@if($modelo->marca != null)
                            {{ $modelo->marca->nombre }}
                        @else
                            {{ __(config('_msg.no_data')) }}
                        @endif
                    </td>

{{--                    <td class="align-middle">--}}
{{--                        <a href="{{ route('modelos.show',$modelo) }}">--}}
{{--                            <i class="fas fa-hashtag"> &nbsp </i>{{ $modelo->subcategoria->nombre}}--}}
{{--                        </a>--}}
{{--                    </td>--}}

                    <td class="align-middle">
                        <a href="{{ route('modelos.show',$modelo) }}">
                            {{ $modelo->nombre}}
                        </a>
                    </td>

                    <td class="align-middle">
                        <a href="{{ route('modelos.show',$modelo) }}">
{{--                            <i class="fas fa-hashtag"> &nbsp </i>{{ $modelo->descripcion}}--}}
                            {{ Str::of($modelo->descripcion)->words(10, ' >>>')  }}
                        </a>

                    </td>
                </tr>
            @empty
                <tr>
                    @for($i=1; $i<=7; $i++)
                        <td> {{ __(config('_msg.no_data')) }} </td>
                    @endfor
                </tr>
            @endforelse
        </table>
    </div>
</div>
@endsection
@section('js')
    @if(session('deleted'))
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El modelo fue eliminado satisfactoriamente',
                'success'
            )
        </script>
    @endif
    @include('modulos/partials/datatables-config')
@endsection
