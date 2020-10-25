@extends('adminlte::page')

@section('title', 'Colegios')

@section('content_header')
    <h1>Modulo -> Inventario -> Categorías</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Tabla de Categorias
            </h1>
        </div>

        <div class="card-body">
            <table id="Categorias" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
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

                <tfoot>
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
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@section('js')
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
                'paging'      : true,   // paginado
                'lengthChange': false,  // cantidad de registros por pagina
                'searching'   : false,  // campo de búsqueda
                'ordering'    : true,   // columnas con ordenamiento
                'info'        : true,   // información de registros, abajo izquierda
                'autoWidth'   : true    // ancho auto de columnas
            })
        })
    </script>
@stop
