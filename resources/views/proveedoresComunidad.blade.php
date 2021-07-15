@if (Auth::user()->role != "proveedor")



<div id="process" class="section">
    <div class="container w-container">
        <h2 class="heading-2">PROVEEDORES DE LA COMUNIDAD</h2>

        <div class="divider grey"></div>
        <div class="row">
            <div class="col">

                <div class="grey-icon-wrapper col-sm-4">
                    <div class="text-block">

                        <h2 class="heading-2"> Proveedores </h2> <br>


                        @if ( !empty($comunidades->id_proveedor1))
                        <a href=" {{route ( 'archivos.proveedor' , [$comunidades->id_proveedor1 , $comunidades->id]) }} "> <label> {{$comunidades->id_proveedor1}} </label></a>
                        <br>
                        @else

                        @endif

                        @if ( !empty($comunidades->id_proveedor2))
                        <a href=" {{route ( 'archivos.proveedor' , [$comunidades->id_proveedor2 , $comunidades->id]) }} "> <label> {{$comunidades->id_proveedor2}} </label></a>
                        <br>
                        @else

                        @endif

                        @if (!empty ($comunidades->id_proveedor3))
                        <a href=" {{route ( 'archivos.proveedor' , [$comunidades->id_proveedor3 , $comunidades->id]) }} "> <label> {{$comunidades->id_proveedor2}} </label></a>
                        @else

                        @endif

                        @if ( empty($comunidades->id_proveedor1 && empty($comunidades->id_proveedor2) && empty($comunidades->id_proveedor3)))

                        <h3 class="heading-3"> No hay proveedores asignados a esta comunidad </h3>
                        @else

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif


@if (Auth::user()->role == "proveedor")

@include('archivosProveedor')


@endif
