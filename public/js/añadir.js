var contador = 0;


$('#boto').click(function () {


    if (contador == 0)  {
        $('.proveedores').find('option').clone().appendTo('.proveedores2');
        $('.proveedores2').removeAttr('hidden');
        contador++;
    }

    else {

        if (contador == 1) {
            $('.proveedores').find('option').clone().appendTo('.proveedores3');
            $('.proveedores3').removeAttr('hidden');
            contador++;
        }
    }

});
