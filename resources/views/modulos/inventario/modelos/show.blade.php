@extends('adminlte::page')

@section('title', $modelo->nombre)

@section('content')
    @if( session('status'))
        mensaje de estatus = {{ session('status') }}
        {{--    Incluir mensajes de sesión flash--}}
        @include('modulos.partials.session-status')
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <div class="bg-white shadow p-4 rounded">
                    <h2 class="text-secondary">{{ $modelo->nombre }} </h2>
                    <hr>
{{--                    @if($colegio->escudo_ruta !=null)--}}
{{--                        <img class="img-fluid mx-auto d-block" src="/storage/images/escudos/{{$colegio->escudo_ruta}}" alt="Escudo de {{ $colegio->nombre }}">--}}
{{--                    @else--}}
{{--                        <img class="img-fluid mx-auto d-block" src="/storage/images/escudos/escudo_pendiente.png" alt="Escudo de {{ $colegio->nombre }} pendiente...">--}}
{{--                    @endif--}}
                    <h2 class="text-secondary">Datos</h2>
                    <hr>

                    <p><strong>Categoría:</strong>
                        @if($modelo->subcategoria_id!=null)
                            {{ $modelo->categoria->nombre}}
                        @else
                            {{ __( config('_msg.no_data') ) }}
                        @endif
                    </p>

                    <p><strong>Subcategoría:</strong>
                        @if($modelo->subcategoria_id!=null)
                            {{ $modelo->subcategoria->nombre}}
                        @else
                            {{ __( config('_msg.no_data') ) }}
                        @endif
                    </p>

                    <p><strong>Marca:</strong>
                        @if($modelo->marca_id!=null)
                            {{ $modelo->marca->nombre}}
                        @else
                            {{ __( config('_msg.no_data') ) }}
                        @endif
                    </p>


                    <p><strong>Descripción:</strong>
                        @if($modelo->descripcion!=null)
                            {{ $modelo->descripcion}}
                        @else
                            {{ __( config('_msg.no_data') ) }}
                        @endif
                    </p>
                    <div >
                        <button class="btn btn-info col-3">
                            <a href="{{ route('modelos.edit', $modelo) }}" class="text-white">Editar</a>
                        </button>
    {{--                    <button class="btn btn-outline-danger mb-2">--}}
    {{--                        <a href="#" onclick="document.getElementById('delete-project').submit()" class="btn-outline-danger form-eliminar">--}}
    {{--                        <a href="#" id="btn-eliminar" class="btn-outline-danger">--}}
    {{--                            <i class="fas fa-trash fa-lg"></i> Eliminar--}}
    {{--                        </a>--}}
    {{--                    </button>--}}
                        <form class="d-inline confirmar-eliminar"
                              id="delete-project"
                              method="POST"
                              action="{{ route('modelos.destroy', $modelo) }}">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger col-3"> Eliminar</button>
                        </form>
                        <button class="btn btn-success col-3">
                            <a href="{{ route('modelos.index') }}" class="text-white">Volver</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
{{--    script de configuracion de alerta de confirmacion de borrado--}}
    @include('modulos.partials.swal-conf-delete')
@endsection
