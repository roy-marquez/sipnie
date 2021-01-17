@extends('adminlte::page')

@section('title', 'Colegios')

@section('content_header')
    <h1>Modulo Usuarios</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Tabla de Usuarios
            </h1>
        </div>

        <div class="card-body">
            <table id="usuarios" class="table table-bordered table-striped">
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
    <script>
        Swal.fire(
            'Usuarios!',
            'Si, contacto Humano!',
            'success'
        )
    </script>
    <script>
        $(function () {
            $('#usuarios').DataTable({
                // 'paging'      : true,
                // 'lengthChange': false,
                // 'searching'   : false,
                // 'ordering'    : true,
                // 'info'        : true,
                'autoWidth'   : true,
                'responsive'  : true,
                language       : {
                    url: '/vendor/datatables-plugins/translations/spanish.json'
                }
            })
        })
    </script>
@stop
