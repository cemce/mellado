$( document ).ready(function() {




    $("#numerodevecinos").on("input", function() {

        var precio;
        var vecinos = $("[name='numerodevecinos']").val();

        var vecinos = parseInt(vecinos);

        if (vecinos < 50) {

            precio = 50;
            $('#precio').val(precio);

        } else if (vecinos < 100) {

            precio = 125;
            $('#precio').val(precio);

        } else if (vecinos < 250) {

            precio = 200;
            $('#precio').val(precio);

        } else {

            precio = 300;
            $('#precio').val(precio);
        }
    });

});
