@extends('adminlte::page')

@section('title', 'Colegios')

@section('content_header')
    <h1>Modulo >> Inventario >> Categorías</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Tabla de Categorías
            </h1>
        </div>
        <div class="card-body">
            <table id="categorias" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td><a href="/?categoria_id={{ $categoria->id }}">{{ $categoria->nombre }}</a></td>
                    </tr>
                @endforeach
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(function () {
            // $('#colegios').DataTable() // activa todas las opciones...
            $('#categorias').DataTable({
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
