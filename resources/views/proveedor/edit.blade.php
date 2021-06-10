@include('runa')
<div id="process" class="section">
    <div class="container w-container">
        <h2 class="heading-2">EDITA LOS DATOS DEL PROVEEDOR</h2>
        <div class="divider grey"></div>
    </div>
    <div class="grey-icon-wrapper w-container">
        <div class="w-form">

            <form  method="POST" action="{{ route('proveedor.update' , $proveedor->id) }} "  class="form-3" enctype="multipart/form-data">

                @method('PUT')
                @csrf

                <label for="comunidad" class="field-label-7">Nombre proveedor</label>
                <input type="text" class="text-field-7 w-input" maxlength="256" name="nombreproveedor" data-name="comunidad" placeholder="" id="name">

                <input hidden="{{Auth::user()->id}} " name="user_id">

                <label for="direccion" class="field-label-8">NIF</label>
                <input type="text" class="text-field-12 w-input" maxlength="256" name="nif" value=" {{$proveedor->nif}}" placeholder="" id="email" required="">

                <label class="contacto">Contacto</label>
                <input type="text" class="text-field-8 w-input" maxlength="256" name="contacto" value="{{$proveedor->contacto}}" id="field" required="">

                <label class="email">Email</label>
                <input type="text" class="text-field-9 w-input" maxlength="256" name="email" value="{{$proveedor->email}}" id="field-2" required="">

                <label class="telefono">Telèfono</label>
                <input type="number" class="text-field-9 w-input" maxlength="256" name="telefono"  value={{$proveedor->telefono}}id="field-2" required="">

                <label class="field-label-11">Dirección</label>
                <input type="text" class="text-field-10 w-input" maxlength="256" name="direccion" data-name="Field 2" value="{{$proveedor->direccion}}" id="numerodevecinos" required="">

                <label class="field-label-12">Municipio</label>
                <input type="text" class="text-field-11 w-input content-center" name="municipio" value="{{$proveedor->municipio}}" placeholder="" id="field-2" >

                <label class="field-label-12">Codigo postal</label>
                <input type="number" class="text-field-11 w-input content-center" name="codigopostal" data-name="Field 2" value=" {{$proveedor->codigopostal}} " id="field-2" >

                <label class="field-label-12">Provincia</label>
                <input type="text" class="text-field-11 w-input content-center" name="provincia" data-name="Field 2" value=" {{$proveedor->provincia}}" id="field-2" >

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
