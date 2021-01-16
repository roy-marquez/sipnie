@extends('adminlte::page')

@section('title', $colegio->nombre)

@section('content_header')
    <h1>Ficha del Colegio</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <div class="bg-white shadow p-4 rounded">
                    <h2 class="text-secondary"> {{ $colegio->nombre }} </h2>
                    <hr>
                    <img class="img-fluid" src="/storage/images/escudos/{{$colegio->escudo_ruta}}" alt="Escudo de {{ $colegio->nombre }}">
                    <h2 class="text-secondary">Datos</h2>
                    <hr>
                    <p><strong>Código:</strong>  {{ $colegio->codigo}}</p>
                    <p><strong>Clasificación:</strong>  {{ $colegio->clasificacion_id}}</p>
                    <p><strong>Cédula Jurídica:</strong>  {{ $colegio->cedula_juridica}}</p>
                    <p><strong>Matrícula:</strong>  {{ $colegio->matricula}}</p>
                    <p><strong>Nombre del Director:</strong>
                        @if($colegio->director!=null)
                            {{ $colegio->director}}
                        @else
                            No disponible...
                        @endif
                    </p>
                    <p><strong>Teléfono:</strong>  {{ $colegio->telefono}}</p>
                    <p><strong>E-mail:</strong>  {{ $colegio->email}} </p>
                    <p><strong>Provincia:</strong>  {{ $colegio->provincia_id}}</p>
                    <p><strong>Cantón:</strong>  {{ $colegio->canton_id}}</p>
                    <p><strong>Distrito:</strong>  {{ $colegio->distrito_id}}</p>
                    <p><strong>Poblado (otras señas):</strong>  {{ $colegio->localizacion}}</p>
                    <p><strong>Dirección Regional MEP:</strong>  {{ $colegio->dre}}</p>
                    <p><strong>Circuito:</strong>  {{ $colegio->circuito}}</p>

                    <p><strong>Web:</strong>
                        @if($colegio->web!=null)
                            <a href="{{ $colegio->web}}" target="_blank">{{ $colegio->web}}</a>
                        @else
                            No disponible...
                        @endif
                    </p>

                    <p><strong>Facebook:</strong>
                        @if($colegio->facebook!=null)
                            <a class="text-truncate" href="{{ $colegio->facebook}}" target="_blank">{{ $colegio->facebook}}</a>
                        @else
                            No disponible...
                        @endif
                    </p>
                    <p><strong>Administrador sipnie:</strong>  {{ $colegio->sipnie_admin_id}}</p>
                    <p><strong>Conectividad a Internet:</strong>  {{ $colegio->conectividad_id}}</p>
                    <p><strong>Actualizado en:</strong>  {{ $colegio->actualizado_en}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
