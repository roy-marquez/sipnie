@extends('adminlte::page')
@section('title', 'Categorías')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Sipnie</a></li>
            <li class="breadcrumb-item"><a href="{{ route('items.index') }}">Inventario</a></li>
            <li class="breadcrumb-item active" aria-current="page">Categorías</li>
        </ol>
    </nav>
    <div class="card shadow">
        <div class="card-header">
                Categorías
        </div>
        <div class="card-body">
            <table id="dt" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Categoría</th>
                    <th>Subcategorías</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categorias as $categoria)
                    <tr>
{{--                        <td><a href="/modulos/categorias/{{$categoria->id }}/editar">{{ $categoria->nombre }}</a></td>--}}
                        <td><a href="#">{{ $categoria->nombre }}</a></td>
                        <td>
                            @foreach($categoria->subcategorias as $subcategoria)
                            <a href="#">{{ $subcategoria->nombre }}</a>{{ !$loop->last ? ',' : '' }}&nbsp
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('js')
{{--    configuracion de datatable--}}
    @include('modulos.partials.datatables-config')
@stop
