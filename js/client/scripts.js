jQuery(document).ready(function () {

    autosize($('#education_input'));
    autosize($('#experience_input'));

    if ($('#profileUpdateAlert')) {
        setTimeout(function () {
            $('#profileUpdateAlert').hide('blind', {}, 300)
        }, 2500);
    }


    $('#login-form').on('beforeValidate', function (event, messages, deferreds) {
        var errorDiv = $('#error-list');

        errorDiv.empty();
        errorDiv.append('WAIT');

        jQuery.ajax({
            url: "site/login",
            type: "POST",
            dataType: "json",
            data: $('#login-form').serialize(),
            success: function (response) {
                errorDiv.empty();
                if (response.length > 0) {
                    response.forEach(function (errorMessage) {
                        errorDiv.append('<div class="help-block">' + errorMessage + '</div>');
                    });
                }
            },
            error: function (response) {
                console.log("ERR");
                console.log(response);
            }
        });
    });


    $('#login-form').on('beforeSubmit', function () {
        console.log("beforeSubmit");
    });

});