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
                <a href="{{ route('colegios.create') }} " class="text-white"><i class="fas fa-plus-circle mr-2"> </i>Agregar</a>
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
                <tr>
                    <td>5533</td>
                    <td>0234</td>
                    <td>5533-0234</td>
                    <td>Computadoras</td>
                    <td>Portátil</td>
                    <td>Lenovo</td>
                    <td>Lenovo V330</td>
                    <td>2473GR26AS1689</td>
                    <td>Una portátil muy chiva</td>
                    <td>Mi nota personal</td>
                    <td>activo</td>
                    <td>PNIE</td>
                    <td>bueno</td>
                    <td>planta</td>
                    <td>Sala Innovación 1</td>
                </tr>
                <tr>
                    <td>5533</td>
                    <td>0233</td>
                    <td>5533-0233</td>
                    <td>Computadoras</td>
                    <td>Portátil</td>
                    <td>Lenovo</td>
                    <td>Lenovo V330</td>
                    <td>2473GR26AS17852</td>
                    <td>Una portatil muy chiva</td>
                    <td>Nota personal distinta</td>
                    <td>inactivo</td>
                    <td>PNIE</td>
                    <td>malo</td>
                    <td>préstamo</td>
                    <td>Sala Innovación 1</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('js')
    @include('modulos.partials.datatables-config')
@endsection
