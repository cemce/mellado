
@include('runa')
@include('navigation-menu')


<body>

<div id="process" class="section">
    <div class="container w-container">
        <h2 class="heading-2">LLENA LOS DATOS DE LA COMUNIDAD</h2>
        <div class="divider grey"></div>
    </div>
    <div class="grey-icon-wrapper w-container">
        <div class="w-form">

            <form  method="POST" action="{{ route('formulario.store') }} "  class="form-3" enctype="multipart/form-data">

                @csrf

                <label for="comunidad" class="field-label-7">Alias de la comunidad</label>
                <input type="text" class="text-field-7 w-input" maxlength="256" name="comunidad" data-name="comunidad" placeholder=""  required="">

                <label for="comunidad" class="field-label-7">NIF</label>
                <input type="number" class="text-field-7 w-input" maxlength="256" name="nif" data-name="nif" placeholder=""  required="">

                <label for="comunidad" class="field-label-7">Provincia</label>
                <input type="text" class="text-field-7 w-input" maxlength="256" name="provincia"  placeholder=""  required="">

                <label for="comunidad" class="field-label-7">Municipio</label>
                <input type="text" class="text-field-7 w-input" maxlength="256" name="municipio"  placeholder=""  required="">

                <label for="comunidad" class="field-label-7">Codigo Postal</label>
                <input type="number" class="text-field-7 w-input" maxlength="256" name="cp" data-name="cp" placeholder=""  required="">

                <label for="direccion" class="field-label-8">Dirección</label>
                <input type="text" class="text-field-12 w-input" maxlength="256" name="direccion" data-name="direccion" placeholder="" id="email" required="">

                <label class="visita">Visita</label>
                <input type="datetime-local" class="text-field-8 w-input" maxlength="256" name="visita" data-name="Field" placeholder="Example Text" id="field" required="">

                <label class="administrador">Administrador</label>
                <input type="text" class="text-field-9 w-input" maxlength="256" name="administrador" data-name="administrador" placeholder="" id="field-2" required="">

                <label class="administrador">Técnico</label>
                <input type="text" class="text-field-9 w-input" maxlength="256" name="tecnico" data-name="tecnico" placeholder="" value=" {{ Auth::user()->name }}  "id="field-2" required="">

                <label class="field-label-11">Numero de vecino</label>
                <input type="number" class="text-field-10 w-input" maxlength="256" name="numerodevecinos" data-name="Field 2" placeholder="" id="numerodevecinos" required="">

                <label for="precio" class="field-label-3">Precio</label>
                <input type="text" class="field-label-3" name="precio"  id="precio" readonly>

                <label class="field-label-12">Foto del portal</label>
                <input type="file" class="text-field-11 w-input content-center" name="foto" data-name="Field 2" placeholder="" id="field-2" >

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

