@extends('adminlte::page')
@section('title', 'Categorías')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Sipnie</a></li>
            <li class="breadcrumb-item"><a href="{{ route('inventario') }}">Inventario</a></li>
            <li class="breadcrumb-item active" aria-current="page">Categorías</li>
        </ol>
    </nav>
    <div class="card shadow">
        <div class="card-header">
{{--            <h1 class="text-capitalize">--}}
                Categorías
{{--            </h1>--}}
        </div>
        <div class="card-body">
            <table id="dt" class="table table-bordered table-striped">
                <thead>
                <tr>
{{--                    <th>Id</th>--}}
                    <th>Nombre</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categorias as $categoria)
                    <tr>
{{--                        <td>{{ $categoria->id }}</td>--}}
                        <td><a href="/?categoria_id={{ $categoria->id }}">{{ $categoria->nombre }}</a></td>
                    </tr>
                @endforeach
{{--                <tfoot>--}}
{{--                <tr>--}}
{{--                    <th>Id</th>--}}
{{--                    <th>Nombre</th>--}}
{{--                </tr>--}}
{{--                </tfoot>--}}
            </table>
        </div>
    </div>
@endsection

@section('js')
{{--    configuracion de datatable--}}
    @include('modulos/partials/datatables-config')
@stop
