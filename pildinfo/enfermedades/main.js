
$(document).ready(function () {

    $('#form-id').submit(function(e)
    {
        e.preventDefault();
        $.ajax(
            {
                url: 'index.php',
                data: $('#form-registro').serialize(),
                // dataType: "dataType",
                type: 'POST',
                /*success: function (response) {
                },*/
                error: function (eror) {
                    console.log('Error', eror);
                },
                beforeSend: function () {
                    console.log('Se esta procesando su peticion');
                }
            }
        );
    });
});