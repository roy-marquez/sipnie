<script>
    $('.confirmar-eliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
            title: '¿Esta seguro de eliminar?',
            text: "¡Esta acción no se puede revertir!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, Eliminar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value) {
                this.submit();
            }
        })
    });
</script>
