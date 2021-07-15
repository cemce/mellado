<header id="nav" class="sticky-nav">
    <nav class="w-container">
      <ul role="list" class="nav-grid w-list-unstyled">
        <li id="w-node-edcceb4e-0249-06c5-09e3-6e94ed4a3246-932754d8">
          <a href="
            @if (Auth::user()->role == "comercial" || Auth::user()->role == "admin")
              {{ route ('comunidades.index') }}
              @endif
              @if (Auth::user()->role == "adminfinca")
              {{ route ('administrador.index') }}
              @endif

            " class="nav-logo-link"><img src=" {{ asset('foto/cropped-cropped-logo-nobackground-1000-1-e1625676650183.png') }}" srcset="{{ asset(' foto/cropped-cropped-logo-nobackground-1000-1-e1625676650183.png' ) }}" sizes="(max-width: 479px) 59px, 60px" alt="" class="nav-logo"></a>

             </li>

          @if (Auth::user()->role == "proveedor")

            <!-- Aqui van los proveedores -->

            @endif
            @if (Auth::user()->role == "comercial" || Auth::user()->role == 'admin')

              <li>
          <a href=" {{  route('comunidades.index')  }}" class="nav-link-2">Comunidades</a>
        </li>
          @endif

          @if( Auth::user()->role == "adminfinca")
              <li>
              <a href=" {{ route('administrador.show', Auth::user()->name)}}" class="nav-link-2">Comunidades</a>
              </li>

              <li>
                  <a href=" {{ route('proveedor.index') }}" class="nav-link-2">Proveedores</a>
              </li>
          @endif


          @if (Auth::user()->role =="adminfinca" || Auth::user()->role == "admin" || Auth::user()->role == "comercial")

              <li>
                  <a href=" {{ route ('proveedor.create') }} " class="nav-link-2" > Crear proveedor</a>
              </li>

          @endif

          @if (Auth::user()->role == "comercial")

              <li>
              <a href=" {{  route ('formulario.index') }}" class="nav-link-2">Formulario</a>
              </li>
          @endif

          @if (Auth::user()->role == "comercial")

              <li>
                  <a href=" {{ route('proveedor.asignar') }}" class="nav-link-2"> Asignar proveedores </a>
              </li>
            @endif


        <li>
          <a href=" {{  route('logout') }}" class="button-6 w-button">Desconectar</a>
        </li>
      </ul>
    </nav>
  </header>
