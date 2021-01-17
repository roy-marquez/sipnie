<script>
    $(function () {
        // $('#colegios').DataTable() // activa todas las opciones...
        $('#dt').DataTable({
            'paging'      : true,  // paginado
            'lengthChange': true,  // cantidad de registros por pagina
            'searching'   : true,  // campo de búsqueda
            'ordering'    : true,  // columnas con ordenamiento
            'info'        : true,  // información de registros, abajo izquierda
            'autoWidth'   : true,  // ancho auto de columnas, set false cuando se agregan los cdn responsive
            'responsive'  : true,  // hacer la datatable responsive
            'lengthMenu'  : [[25, 50, -1], [25, 50, "All"]],  // hacer la datatable responsive
            language       : {
                url: '/vendor/datatables-plugins/translations/spanish.json' // traducción al español
            }
        })
    });
</script>
