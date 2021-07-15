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
      <h2 class="heading-2">COMUNIDAD {{$comunidades->comunidad}}</h2> <input type="hidden" value=" {{$comunidades->id}}">
      <div class="divider grey"></div>
      <div>

        <div class="grey-icon-wrapper">
          <div class="text-block"><strong>DIRECCIÓN:</strong> {{$comunidades->direccion}}
              <br><br>
              <strong>TÈCNICO</strong>: {{$comunidades->tecnico}}
              <br><br>
              <strong>ADMIN:</strong> {{$comunidades->administrador}}
              <br><br>
              <strong>VISITA</strong>: {{$comunidades->visita}}
              <br><br>
              <strong>NIF</strong>: {{$comunidades->nif}}
              <br><br>
              <strong>PROVINCIA:</strong> {{$comunidades->provincia}}
              <br><br>
              <strong>DIRECCIÓN</strong>: {{$comunidades->direccion}}
              <br><br>
              <strong>CODIGO POSTAL</strong>: {{$comunidades->cp}}
              <br><br>
              <strong>NUMERO DE VECINOS</strong>: {{$comunidades->numerodevecinos}}
              <br><br>

              @if (Auth::user()->role != "proveedor")
              <strong>PRECIO</strong>: {{$comunidades->precio}}
              <br><br>
              @endif

                @if (!empty($comunidades->foto))
                  <strong>FOTO DEL PORTAL</strong>: <br>
                  <img src="{{ asset('foto/' . $comunidades->foto) }}"  width="500" height="500" alt="image">
                    @endif

              @if (empty ($comunidades->foto))

                  <strong> NO HAY FOTO DEL PORTAL</strong>
                  @endif


          </div>  <a href = " {{ route( 'comunidades.exportpdf'  , $comunidades->comunidad) }}"><img src="{{ asset('foto/descarga.png') }}" loading="lazy" width="60" height="60" alt="" class="image"> </a>
        </div>
      </div>
    </div>
  </div>




  @include('proveedoresComunidad')

  @if (Auth::user()->role == "comercial")
  @include('checklist')

  @endif
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609d4de759c770eeb52754d1" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
