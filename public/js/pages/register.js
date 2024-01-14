window.addEventListener('load', function () {
    $('#form-register').validate({
        ignore: ':hidden:not(:checkbox)',
        errorElement: 'div',
        errorClass: 'input-invalid',
        validClass: 'input-valid',
        errorPlacement: function (error, element) {
            error.addClass('text-red-500 text-left mt-1');
            error.removeClass('input-valid');
            let insetAfter = null;
            if (element.prop('type') === 'checkbox') {
                element.parent('label')
            } else if (element.closest('.input-wrapper')) {
                insetAfter = element.parent()
            } else {
                insetAfter = element;
            }
            error.insertAfter(insetAfter);
        },
        rules: {
            username: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            },
            passwordConfirm: {
                required: true,
                equalTo: 'input[name="password"]'
            },
        }
    });
})