
@include('runa')
@include('navigation-menu')


<body>

<div id="process" class="section">
    <div class="container w-container">
        <h2 class="heading-2">LLENA LOS DATOS DEL PROVEEDOR</h2>
        <div class="divider grey"></div>
    </div>
    <div class="grey-icon-wrapper w-container">
        <div class="w-form">

            <form  method="POST" action="{{ route('proveedor.store') }} "  class="form-3" enctype="multipart/form-data">

                @csrf

                <label for="comunidad" class="field-label-7">Nombre proveedor</label>
                <input type="text" class="text-field-7 w-input" maxlength="256" name="nombreproveedor" data-name="comunidad" placeholder="" id="name">

                <input type="hidden" value="{{Auth::user()->id}}" name="id_admin">
                <label for="direccion" class="field-label-8">NIF</label>
                <input type="text" class="text-field-12 w-input" maxlength="256" name="nif" data-name="direccion" placeholder="" id="email" required="">

                <label class="visita">Contacto</label>
                <input type="text" class="text-field-8 w-input" maxlength="256" name="contacto" data-name="Field" id="field" required="">

                <label class="administrador">Email</label>
                <input type="text" class="text-field-9 w-input" maxlength="256" name="email" placeholder="" id="field-2" required="">

                <label class="administrador">Telèfono</label>
                <input type="text" class="text-field-9 w-input" maxlength="256" name="telefono"  id="field-2" required="">

                <label class="field-label-11">Dirección</label>
                <input type="text" class="text-field-10 w-input" maxlength="256" name="direccion" data-name="Field 2" placeholder="" id="numerodevecinos" required="">

                <label class="field-label-12">Municipio</label>
                <input type="text" class="text-field-11 w-input content-center" name="municipio" data-name="Field 2" placeholder="" id="field-2" >

                <label class="field-label-12">Codigo postal</label>
                <input type="number" class="text-field-11 w-input content-center" name="codigopostal" data-name="Field 2" placeholder="" id="field-2" >

                <label class="field-label-12">Provincia</label>
                <input type="text" class="text-field-11 w-input content-center" name="provincia" data-name="Field 2" placeholder="" id="field-2" >

                <input type="submit" value="Envía" data-wait="Espere porfavor..." class="submit-button-2 w-button">

            </form>

        </div>
    </div>
</div>




</body>
</html>

<script src="{{ asset('js/control.js') }}"></script>
</body>
</html>
