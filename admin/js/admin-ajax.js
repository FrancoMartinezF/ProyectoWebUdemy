$(document).ready(function() {
    $('#guardar-registro').on('submit', function(e) {
        e.preventDefault();

        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta === 'exito') {
                    swal(
                        'Correcto',
                        'El administrador se guardó correctamente',
                        'success'
                    )
                } else {
                    swal(
                        'Error!',
                        'Hubo un error',
                        'error'
                    );
                }
            }
        });
    });

    //Eliminar un registro
    $('.borrar-registro').on('click', function(e) {
        e.preventDefault();

        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');
        Swal.fire({
            title: 'Estás seguro?',
            text: "Se borrará de forma permanente",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, borrar!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: 'post',
                    data: {
                        'id': id,
                        'registro': 'eliminar'
                    },
                    url: 'modelo-' + tipo + '.php',
                    success: function(data) {
                        console.log(data);
                        var resultado = JSON.parse(data);
                        if (resultado.respuesta == 'exito') {
                            swal(
                                'Eliminado!',
                                'Administrador eliminado correctamente',
                                'success'
                            );
                            jQuery('[data-id="' + resultado.id_eliminado + '"]').parents('tr').remove();
                        } else {
                            swal(
                                'Error!',
                                'No se pudo eliminar',
                                'error'
                            );
                        }
                    }
                })
            }

        });

    });

    //Se ejecuta cuando hay un archivo
    $('#guardar-registro-archivo').on('submit', function(e) {
        e.preventDefault();

        var datos = new FormData(this);

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            contentType: false,
            processData: false,
            async: true,
            cache: false,
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta === 'exito') {
                    swal(
                        'Correcto',
                        'El administrador se guardó correctamente',
                        'success'
                    )
                } else {
                    swal(
                        'Error!',
                        'Hubo un error',
                        'error'
                    );
                }
            }
        });
    });


});