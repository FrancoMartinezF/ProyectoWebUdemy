$(document).ready(function() {
    $('.sidebar-menu').tree()
    $('#registros').DataTable({
        'paging': true,
        'pageLength': 10,
        'lengthChange': false,
        'searching': true,
        'ordering': true,
        'info': true,
        'autoWidth': false,
        'language': {
            paginate: {
                next: 'Siguiente',
                previous: 'Anterior',
                last: 'Último',
                first: 'Primero'
            },
            info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
            emptyTable: 'No hay registros',
            infoEmpty: '0 Registros',
            search: 'Buscar: '
        }
    });

    $('#crear-registro-admin').attr('disabled', true);
    $('#repetir-password').on('blur', function() {
        var password_nuevo = $('#password').val();
        if ($(this).val() == password_nuevo) {
            $('#resultado-password').text('Correcto');
            $('#resultado-password').parents('.form-group').addClass('has-success').removeClass('has-error');
            $('input#password').parents('.form-group').addClass('has-success').removeClass('has-error');
            $('#crear-registro-admin').attr('disabled', false);
        } else {
            $('#resultado-password').text('No son iguales');
            $('#resultado-password').parents('.form-group').addClass('has-error').removeClass('has-success');
            $('input#password').parents('.form-group').addClass('has-error').removeClass('has-success');
        }
    })

    //Date picker
    $('#fecha').datepicker({
        autoclose: true
    })

    //Inicializar Select2
    $('.seleccionar').select2();

    //Inicializar time picker
    $('.timepicker').timepicker({
        showInputs: false
    });

    //llamar la libreria icon picker
    $('#icono').iconpicker();

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });


    $.getJSON('servicio-registros.php', function(data) {
        // LINE CHART
        var line = new Morris.Line({
            element: 'grafica-registros',
            resize: true,
            data: data,
            xkey: 'fecha',
            ykeys: ['cantidad'],
            labels: ['Item 1'],
            lineColors: ['#3c8dbc'],
            hideHover: 'auto'
        });
    });



})