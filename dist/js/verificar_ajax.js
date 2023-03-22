function verificar_existencia(correo) {
    $.ajax({
        type: 'post',
        url: 'dist/ajax/solicitudes_ajax.php',
        data: {
            correo: correo,
            inciso: 1
        },
        success: function(response) {
            if (response == 'success') {
                $('#mensaje_existencia_correo').html('');
                $('#boton_registrar').attr("disabled", false);
            } else if (response == 'error') {
                $('#mensaje_existencia_correo').html('<p><a href="usuarios/index.html"><span class="badge badge-pill badge-danger">El correo ya est&aacute; registrado, iniciar sesion haciendo click aqui</span></a></p>');
                $('#boton_registrar').attr("disabled", true);
            }
        }
    });
}