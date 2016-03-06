$(document).ready(function () {
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#testImage').attr('src', e.target.result);
                $('#testImage').Jcrop({
                    aspectRatio: 1,
                    onSelect: updateCoords
                });
            }

            reader.readAsDataURL(input.files[0]);
            /*$('#testImage').Jcrop();*/
        }
    }
    
    function updateCoords(c)
    {
        $('#disp_x').val($('#testImage').width());
        $('#disp_y').val($('#testImage').height());

        $('#x').val(c.x);
        $('#y').val(c.y);
        $('#w').val(c.w);
        $('#h').val(c.h);
    };


    function checkCoords()
    {
        if (parseInt($('#w').val())) return true;
        alert('Please select a crop region then press submit.');
        return false;
    };


    $("#imgInp").change(function () {
        readURL(this);
    });
/*
    Event.observe(window, 'load', function () {
        new Cropper.Img(
            'testImage',
            {
                minWidth: 220,
                minHeight: 120,
                onEndCrop: onEndCrop
            }
        );
    });*/
/*    $(function(){ $('#imgInp').Jcrop(); });*/

});