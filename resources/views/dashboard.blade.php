@if (Auth::user()->role == "comercial")

    @include('comunidades.index')

    @endif

@if (Auth::user()->role == "adminfinca")

    @include('administrador.indexindex')

@endif

@if (Auth::user()->role == "admin")

    @include('comunidades.index')

@endif
