jQuery(document).ready(function () {

    autosize($('#education_input'));
    autosize($('#experience_input'));

    if ($('#profileUpdateAlert')) {
        setTimeout(function () {
            $('#profileUpdateAlert').hide('blind', {}, 300)
        }, 2500);
    }

});