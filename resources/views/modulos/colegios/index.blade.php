@extends('adminlte::page')

@section('title', 'Colegios')

@section('css')
    <link rel="stylesheet" href="/css/app.css">
@endsection

@section('content_header')
    <h1 class="header">Colegios</h1>
@endsection

@section('content')
    <div class="card">
{{--        <div class="card-header">--}}
{{--            <h1 class="card-title">--}}
{{--                Tabla de Colegios--}}
{{--            </h1>--}}
{{--        </div>--}}

        <div class="card-body">
            <table id="dt" class="table table-bordered table-striped">
                <thead>
                <tr>
{{--                    <th>Id</th>--}}
                    <th >Código</th>
                    <th>Escudo</th>
                    <th>Nombre</th>
{{--                    <th>Clasificación</th>--}}
                    <th>matricula</th>
                    <th>E-mail</th>
                    <th class="text-truncate">Web</th>
                    <th>Facebook</th>
{{--                    <th>Director</th>--}}
{{--                    <th>Teléfono</th>--}}
{{--                    <th>Distrito</th>--}}
{{--                    <th>Dirección</th>--}}
{{--                    <th>DRE</th>--}}
{{--                    <th>Circuito</th>--}}
{{--                    <th>Web</th>--}}
{{--                    <th>Estado</th>--}}
{{--                    <th>Sipnie.Admin</th>--}}
                </tr>
                </thead>
                <tbody>
                @forelse($colegios as $colegio)
                <tr>
                    <td> <strong> {{ $colegio->codigo }} </strong> </td>
                    <td>
                        <a href="{{ route('colegios.show',$colegio) }}">
                            <img  class="img-size-50" src="/storage/images/escudos/{{$colegio->escudo_ruta}}" alt="Escudo de {{ $colegio->nombre }} ">
                        </a>
                    </td>
{{--                    <td>{{ $colegio->id }}</td>--}}
                    <td><a href="{{ route('colegios.show',$colegio) }}"> {{ $colegio->nombre }}</a> </td>
{{--                    <td><a href="#"> {{ $colegio->nombre }}</a> </td>--}}
{{--                    <td>{{ $colegio->clasificacion_id }}</td>--}}
                    <td>{{ $colegio->matricula }}</td>
                    <td><a href="mailto://{{ $colegio->email }}">{{ $colegio->email }}</a></td>
                    <td><a href="{{ $colegio->web }}" target="_blank"> <i class="fas fa-globe"></i> Ir a la Web</a></td>
                    <td><a href="{{ $colegio->facebook }}" target="_blank"><i class="fab fa-facebook-square"></i></a></td>
{{--                    <td>Técnico Académico</td>--}}
{{--                    <td>948</td>--}}
{{--                    <td>Roberto Céspedez</td>--}}
{{--                    <td>24731689</td>--}}
{{--                    <td>Pital</td>--}}
{{--                    <td>Barrio Pitalito</td>--}}
{{--                    <td>San Carlos</td>--}}
{{--                    <td>5</td>--}}
{{--                    <td>www.ctpdepital.ed.cr</td>--}}
{{--                    <td>CTPdePital</td>--}}
{{--                    <td>activo</td>--}}
{{--                    <td>'urlescudo'</td>--}}
{{--                    <td>1</td>--}}
                </tr>
                @empty
                    <tr>
                        <td> sin datos </td>
                        <td> sin datos </td>
                        <td> sin datos </td>
                        <td> sin datos </td>
                        <td> sin datos </td>
                        <td> sin datos </td>
                        <td> sin datos </td>
                    </tr>
                @endforelse

            </table>
        </div>
    </div>
@endsection

@section('js')
{{--    <script>--}}
{{--        Swal.fire(--}}
{{--            'Colegios!',--}}
{{--            'Un módulo cool cool cool!',--}}
{{--            'success'--}}
{{--        )--}}
{{--    </script>--}}
    @include('modulos/partials/datatables-config')

@endsection
