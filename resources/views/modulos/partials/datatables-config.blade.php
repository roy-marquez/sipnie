<script>
    $(function () {
        // $('#colegios').DataTable() // activa todas las opciones...
        $('#dt').DataTable({
            'paging'      : true,  // paginado
            'lengthChange': true,  // cantidad de registros por pagina
            'searching'   : true,  // campo de búsqueda
            'ordering'    : true,  // columnas con ordenamiento
            'info'        : true,  // información de registros, abajo izquierda
            'autoWidth'   : false,  // ancho auto de columnas, set false cuando se agregan los cdn responsive
            'responsive'  : true,  // hacer la datatable responsive
            'lengthMenu'  : [[25, 50, -1], [25, 50, "Todos"]],  // cambiar menu de cantidad de registros
            language       : {
                url: '/vendor/datatables-plugins/translations/spanish.json' // traducción al español
            }
        })
    });
</script>
