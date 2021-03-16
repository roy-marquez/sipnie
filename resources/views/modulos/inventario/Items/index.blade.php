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
                Inventario
            </h2>
            <button class="btn btn-success">
                <a href="{{ route('items.create') }} " class="text-white"><i class="fas fa-plus-circle mr-2"> </i>Agregar</a>
            </button>
        </div>
        <hr>
        <div class="card-body">
            <table id="dt" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#.Colegio</th>
                    <th>#.Item</th>
                    <th>Placa</th>
                    <th>Categoría</th>
                    <th>Subcategoría</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Serie</th>
                    <th>Descripción</th>
                    <th>Nota</th>
                    <th>Estado</th>
                    <th>Adquisición</th>
                    <th>Condición</th>
                    <th>Uso</th>
                    <th>Ubicación</th>
                </tr>
                </thead>
                <tbody>
                @forelse($items as $item)
                <tr>
                    <td>{{$item->colegio_codigo}}</td>
                    <td>{{$item->item_num}}</td>
                    <td>{{$item->placa}}</td>
                    <td>{{ $item->categoria_id }}</td>
                    <td>{{ $item->subcategoria_id }}</td>
                    <td>{{ $item->marca->nombre }}</td>
                    <td>{{ $item->modelo->nombre }}</td>
                    <td>{{ $item->serie  }}</td>
                    <td> @if($item->modelo->descripcion != null)
                            {{ $item->modelo->descripcion }}
                        @else
                            {{ __(config('_msg.no_data')) }}
                        @endif
                    </td>
                    <td>{{ $item->nota }}</td>
                    <td>{{ $item->estado_item->estado }}</td>
                    <td>{{ $item->adquisicion->nombre }}</td>
                    <td>{{ $item->condicion->nombre }}</td>
                    <td>{{ $item->uso->nombre }}</td>
                    <td>{{ $item->ubicacion->nombre }}</td>
                </tr>
                @empty
                    <tr>
                        @for($i=1; $i<=15; $i++)
                            <td> {{ __(config('_msg.no_data')) }} </td>
                        @endfor
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection

@section('js')
    @include('modulos.partials.datatables-config')
@endsection
