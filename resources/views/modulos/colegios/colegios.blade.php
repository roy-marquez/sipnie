@extends('adminlte::page')

@section('title', 'Colegios')

@section('css')
{{--<link rel="stylesheet" href="{{ asset('vendor/datatables/css/responsive.bootstrap4.min.css') }} ">--}}
/*<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css"/>*/
@endsection
@section('content_header')
    <h1>Modulo - Colegios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Tabla de Usuarios
            </h1>
        </div>

        <div class="card-body">
            <table id="colegios" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Alias</th>
                    <th>Código</th>
                    <th>Tipo</th>
                    <th>matricula</th>
                    <th>Director</th>
                    <th>Teléfono</th>
                    <th>Distrito</th>
                    <th>Dirección</th>
                    <th>DRE</th>
                    <th>Circuito</th>
                    <th>Web</th>
                    <th>Facebook</th>
                    <th>Estado</th>
                    <th>Escudo</th>
                    <th>Sipnie.Admin</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Técnico Profesional de Pital</td>
                    <td>CTP Pital</td>
                    <td>4180</td>
                    <td>Técnico Académico</td>
                    <td>948</td>
                    <td>Roberto Céspedez</td>
                    <td>24731689</td>
                    <td>Pital</td>
                    <td>Barrio Pitalito</td>
                    <td>San Carlos</td>
                    <td>5</td>
                    <td>www.ctpdepital.ed.cr</td>
                    <td>CTPdePital</td>
                    <td>activo</td>
                    <td>'urlescudo'</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Liceo de los Angeles</td>
                    <td>Lic.Angeles</td>
                    <td>5302</td>
                    <td>Académico</td>
                    <td>252</td>
                    <td>Johanna Perez M</td>
                    <td>24041060</td>
                    <td>Pital</td>
                    <td>Barrio Pitalito</td>
                    <td>San Carlos</td>
                    <td>5</td>
                    <td>n/a</td>
                    <td>liceolosangelespital</td>
                    <td>activo</td>
                    <td>'urlescudo'</td>
                    <td>2</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('js')
{{--    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>--}}
    <script>
        Swal.fire(
            'Colegios!',
            'Un módulo cool cool cool!',
            'success'
        )
    </script>
    <script>
        $(function () {
            // $('#colegios').DataTable() // activa todas las opciones...
            $('#colegios').DataTable({
                // 'paging'      : true,   // paginado
                // 'lengthChange': true,  // cantidad de registros por pagina
                // 'searching'   : true,  // campo de búsqueda
                // 'ordering'    : true,   // columnas con ordenamiento
                // 'info'        : true,   // información de registros, abajo izquierda
                'autoWidth'   : false,  // ancho auto de columnas, set false cuando se agregan los cdn responsive
                'responsive'  : true,   // hacer la datatable responsive
                language       : {
                    url: '/vendor/datatables-plugins/translations/spanish.json'
                }
            })
        });
    </script>
@stop
