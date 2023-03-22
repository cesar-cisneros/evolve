/*<=====Validación de formulario=====>*/
$("#formulario").validate({
    ignore: "",
    rules: {
        correo: {
            required: true,
            email: true
        },
        password: "required",
        color: "required",
    },
    highlight: function(element) {
        var id_attr = "#" + $(element).attr("id");
        $(element).closest('.form-control').removeClass('is-valid').addClass('is-invalid');
    },
    unhighlight: function(element) {
        var id_attr = "#" + $(element).attr("id");
        $(element).closest('.form-control').removeClass('is-invalid').addClass('is-valid');
    },
    // errorElement: 'div',
    errorClass: 'invalid-feedback',
    errorPlacement: function(error, element) {
        if (element.length) {
            error.insertAfter(element);
        } else {
            error.insertAfter(element);
        }
    }
});

$("#inicio_sesion").validate({
    ignore: "",
    rules: {
        user: {
            required: true,
            email: true
        },
        pass: "required",
    },
    highlight: function(element) {
        var id_attr = "#" + $(element).attr("id");
        $(element).closest('.form-control').removeClass('is-valid').addClass('is-invalid');
    },
    unhighlight: function(element) {
        var id_attr = "#" + $(element).attr("id");
        $(element).closest('.form-control').removeClass('is-invalid').addClass('is-valid');
    },
    // errorElement: 'div',
    errorClass: 'invalid-feedback',
    errorPlacement: function(error, element) {
        if (element.length) {
            error.insertAfter(element);
        } else {
            error.insertAfter(element);
        }
    }
});