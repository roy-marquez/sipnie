@extends('adminlte::page')

@section('title', $colegio->nombre)

@if(session('status'))
    {{--    Incluir mensajes de sesión flash--}}
    @include('modulos.partials.session-status')
@endif

{{--@section('content_header')--}}
{{--    <h1>Ficha del Colegio</h1>--}}
{{--@endsection--}}

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <div class="bg-white shadow p-4 rounded">
                    <h2 class="text-secondary">{{ $colegio->nombre }} </h2>
                    <hr>
                    @if($colegio->escudo_ruta !=null)
                        <img class="img-fluid mx-auto d-block" src="/storage/images/escudos/{{$colegio->escudo_ruta}}" alt="Escudo de {{ $colegio->nombre }}">
                    @else
                        <img class="img-fluid mx-auto d-block" src="/storage/images/escudos/escudo_pendiente.png" alt="Escudo de {{ $colegio->nombre }} pendiente...">
                    @endif
                    <h2 class="text-secondary">Datos</h2>
                    <hr>
                    <p><strong>Código:</strong>  {{ $colegio->codigo}}</p>

                    <p><strong>Clasificación:</strong>
                        @if($colegio->clasificacion_id!=null)
                            {{ $colegio->clasificacion->nombre}}
                        @else
                            {{ __( config('_msg.no_data') ) }}
                        @endif
                    </p>

                    <p><strong>Cédula Jurídica:</strong>
                        @if($colegio->cedula_juridica!=null)
                            {{ $colegio->cedula_juridica}}
                        @else
                            {{__(config('_msg.no_data'))}}
                        @endif
                    </p>

                    <p><strong>Matrícula:</strong>
                        @if($colegio->matricula !=null)
                            {{ $colegio->matricula}}
                        @else
                            {{ __(config('_msg.no_data')) }}
                        @endif
                    </p>

                    <p><strong>Nombre del Director:</strong>
                        @if($colegio->director!=null)
                            {{ $colegio->director}}
                        @else
                            {{ __( config('_msg.no_data') ) }}
                        @endif
                    </p>

                    <p><strong>Teléfono:</strong>
                        @if($colegio->telefono!=null)
                            {{ $colegio->telefono}}
                        @else
                            {{ __(config('_msg.no_data')) }}
                        @endif
                    </p>

                    <p><strong>E-mail:</strong>
                        @if($colegio->email != null)
                            <a href="mailto://{{ $colegio->email }}"> <i class="fas fa-envelope">&ensp;</i> {{ $colegio->email }} </a>
                        @else
                            {{ __(config('_msg.no_data')) }}
                        @endif
                    </p>

                    <p><strong>Provincia:</strong>
                        {{ ($colegio->provincia_id != null) ? $colegio->provincia->nombre : __(config('_msg.no_data')) }}
                    </p>

                    <p><strong>Cantón:</strong>
                        {{ ($colegio->canton_id != null) ? $colegio->canton->nombre : __(config('_msg.no_data'))}}
                    </p>

                    <p><strong>Distrito:</strong>
                        {{ ($colegio->distrito_id != null) ? $colegio->distrito->nombre : __(config('_msg.no_data'))}}
                    </p>

                    <p><strong>Poblado (otras señas):</strong>
                        {{ ($colegio->localizacion != null ) ? $colegio->localizacion : __(config('_msg.no_data'))}}
                    </p>


                    <p><strong>Dirección Regional MEP:</strong>
                        {{ ($colegio->dre != null ) ? $colegio->dre : __(config('_msg.no_data'))}}
                    </p>


                    <p><strong>Circuito:</strong>
                        {{ ($colegio->circuito != null) ? $colegio->circuito : __(config('_msg.no_data'))}}
                    </p>

                    <p><strong>Web:</strong>
                        @if($colegio->web!=null)
                            <a href="{{ $colegio->web }}" target="_blank"> <i class="fas fa-globe"></i> Ir a la Web</a
                        @else
                            {{ __(config('_msg.no_data')) }}
                        @endif
                    </p>

                    <p><strong>Facebook:</strong>
                        @if($colegio->facebook!=null)
                            <a href="{{ $colegio->facebook }}" target="_blank"><i class="fab fa-facebook"></i> Ir al Facebook</a>
                        @else
                            {{ __(config('_msg.no_data')) }}
                        @endif
                    </p>

                    <p><strong>Estado del Colegio:</strong>
{{--                        {{ ($colegio->estado_colegio_id != null ) ? $colegio->estado_colegio_id : __(config('_msg.no_data'))}}--}}
                        {{ ($colegio->estado_colegio_id != null ) ? $colegio->estadoColegio->estado : __(config('_msg.no_data'))}}
                    </p>

                    <p><strong>Administrador sipnie:</strong>
                        @if($colegio->sipnie_admin_id == null OR $colegio->users == null OR $colegio->users =='')
                            {{ __(config('_msg.no_data')) }}
                        @else
                            {{ $colegio->users->where('id', $colegio->sipnie_admin_id)->first()->name }}
                        @endif
                    </p>

                    <p><strong>Conectividad a Internet:</strong>
{{--                        {{ $colegio->conectividad->conexion}}--}}
                        {{ ($colegio->conectividad != null ) ? $colegio->conectividad->conexion : __(config('_msg.no_data'))}}
                    </p>

                    <p><strong>Actualizado en:</strong>  {{ $colegio->updated_at}}</p>

                    <button class="btn btn-info">
                        <a href="{{ route('colegios.edit', $colegio) }}" class="text-white">Editar</a>
                    </button>
{{--                    <button class="btn btn-outline-danger mb-2">--}}
{{--                        <a href="#" onclick="document.getElementById('delete-project').submit()" class="btn-outline-danger form-eliminar">--}}
{{--                        <a href="#" id="btn-eliminar" class="btn-outline-danger">--}}
{{--                            <i class="fas fa-trash fa-lg"></i> Eliminar--}}
{{--                        </a>--}}
{{--                    </button>--}}
                    <form class="d-inline form-eliminar"
                          id="delete-project"
                          method="POST"
                          action="{{ route('colegios.destroy', $colegio) }}">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('.form-eliminar').submit(function(e){
            e.preventDefault();
                Swal.fire({
                    title: '¿Esta seguro de eliminarlo?',
                    text: "¡Esta acción no se puede revertir!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Si, Eliminar!'
                }).then((result) => {
                    if (result.value) {
                        this.submit();
                    }
                })
        });
    </script>
@endsection
