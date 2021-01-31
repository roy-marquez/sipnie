@extends('adminlte::page')

@section('title', 'Colegios')

@section('content_header')
    <h1 class="header">Colegios</h1>
@endsection

@section('content')
    @if(session('status'))
        {{--    Incluir mensajes de sesión flash--}}
        @include('modulos.partials.session-status')
    @endif
<button class="btn btn-success mb-2">
    <a href="{{ route('colegios.create') }} " class="text-white"><i class="fas fa-plus-circle"></i> Agregar Colegio</a>
</button>

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
                    <th class="text-center">Escudo</th>
                    <th>Nombre </th>
                    <th>Código </th>
                    <th>Cant. Estudiantes</th>
                    <th>E-mail</th>
                    <th>Web</th>
                    <th>Facebook</th>
                </tr>
                </thead>
                <tbody>
                @forelse($colegios as $colegio)
                <tr class="align-middle">
                    <td class="text-center align-middle">
                        <a href="{{ route('colegios.show',$colegio) }}">
                            @if($colegio->escudo_ruta != null)
                                <img  class="img-size-32" src="/storage/images/escudos/{{$colegio->escudo_ruta}}" alt="Escudo de {{ $colegio->nombre }} ">
                            @else
                                <img  class="img-size-32" src="/storage/images/escudos/escudo_pendiente.png" alt="Escudo de {{ $colegio->nombre }} no disponible...">
                            @endif
                        </a>
                    </td>
                    <td class="align-middle">
                        <a href="{{ route('colegios.show',$colegio) }}">
                            <i class="fas fa-eye"> &nbsp </i>{{ $colegio->nombre }}
                        </a>
                    </td>

                    <td class="align-middle">
                        <a href="{{ route('colegios.show',$colegio) }}">
                            <i class="fas fa-hashtag"> &nbsp </i>{{ $colegio->codigo }}
                        </a>
                    </td>

                    <td>@if($colegio->matricula != null)
                            {{ $colegio->matricula }}
                        @else
                            {{ __(config('_msg.no_data')) }}
                        @endif
                    </td>

                    <td>@if($colegio->email != null)
                        <a href="mailto://{{ $colegio->email }}"> <i class="fas fa-envelope">&ensp;</i>{{ $colegio->email }} </a>
                        @else
                            {{ __(config('_msg.no_data')) }}
                        @endif
                    </td>

                    <td>@if($colegio->web != null)
                            <a href="{{ $colegio->web }}" target="_blank"> <i class="fas fa-globe"></i> Ir a la Web</a>
                        @else
                            {{ __(config('_msg.no_data')) }}
                        @endif
                    </td>
                    <td>@if($colegio->facebook != null )
                            <a href="{{ $colegio->facebook }}" target="_blank"><i class="fab fa-facebook"></i> Ir al Facebook</a>
                        @else
                            {{ __(config('_msg.no_data')) }}
                        @endif
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
{{--    <script>--}}
{{--        Swal.fire(--}}
{{--            'Colegios!',--}}
{{--            'Un módulo cool cool cool!',--}}
{{--            'success'--}}
{{--        )--}}
{{--    </script>--}}
    @include('modulos/partials/datatables-config')

@endsection
