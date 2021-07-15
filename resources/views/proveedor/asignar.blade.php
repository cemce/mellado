@include('runa')
@include('navigation-menu')


<div id="process" class="section">
    <div class="container w-container">
        <h2 class="heading-2">ASIGNA PROVEEDORES A LAS COMUNIDADES</h2>
        <div class="divider grey"></div>
        <div class="grey-icon-wrapper w-col-small-3">
            <div class="text-block">


                @if (session()->has('success'))
                <div class="alert alert-success " >
                    @if(is_array(session('success')))

                            @foreach (session('success') as $message)
                                <p>{{ $message }}<p>
                            @endforeach

                    @else
                        {{ session('success') }}
                    @endif
                </div>
                @endif

                <form method="POST" action=" {{ route('asignar.proveedor') }}">

                    @csrf
                <p> Comunidad a seleccionar </p>
                <br>
                <select class="form-control" name="comunidades">

                    <option>Seleciona la comunidad</option>

                    @foreach ($comunidades as $comunidad)
                        <option value="{{ $comunidad->comunidad }}"> {{$comunidad->comunidad}} </option>
                    @endforeach

                </select>

                <br>
                <br>

                <P> Selecciona sus proveedores <p>
                <br>
                <select class="proveedores" name="proveedores1">

                    <option>Seleciona un proveedor</option>

                    @foreach ($proveedores as $proveedor)
                        <option value="{{ $proveedor->nombreproveedor }}"> {{$proveedor->nombreproveedor}} </option>
                    @endforeach

                </select>

                <br>
                <br>
                <select class="proveedores2" name="proveedores2" hidden>

                </select>
                <br>
                <br>
                <select class="proveedores3" name="proveedores3" hidden>

                </select>

                <br>
                <br>
                <input type="button" id="boto" value="Añade otro proveedor"> </button>

                <br>
                <br>
                <br>
                <button class="button-6 w-button"> Envia </button>

                <form>
            </div>
            </div>

 </div>


 <script src=" {{ asset('js/añadir.js') }} "> </script>
