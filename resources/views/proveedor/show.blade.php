@include('runa')
@include('navigation-menu')
<body>
<div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
    <div class="w-container">

        <div class="menu-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
        </div>
    </div>
</div>
<div id="process" class="section">
    <div class="w-container">
        <h2 class="heading-2">PROVEEDOR {{$proveedores->nombreproveedor}}</h2>
        <div class="divider grey"></div>
        <div>

            <div class="grey-icon-wrapper">
                <div class="text-block"><strong>DIRECCIÓN:</strong> {{$proveedores->direccion}}
                    <br><br>
                    <strong>TELÉFONO</strong>: {{$proveedores->telefono}}
                    <br><br>
                    <strong>CONTACTO:</strong> {{$proveedores->contacto}}
                    <br><br>
                    <a href=" {{ route ('enviar.proveedor', $proveedores->id) }}" onclick=" return confirm('¿Seguro que quieres contactar con el proveedor?\nEn caso afirmativo, deberás ir para atrás.');"> <strong>EMAIL</strong>: {{$proveedores->email}} </a>
                    <br><br>
                    <strong>CÓDIGO POSTAL</strong>: {{$proveedores->codigopostal}}
                    <br><br>
                    <strong>PROVINCIA:</strong> {{$proveedores->provincia}}
                    <br><br>
                    <strong>MUNICIPIO</strong>: {{$proveedores->municipio}}

            </div>
        </div>
    </div>
</div>


<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609d4de759c770eeb52754d1" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
