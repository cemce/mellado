
@if (Auth::user()->role == "comercial")




<div id="process" class="section">
    <div class="container w-container">
        <h2 class="heading-2">DOCUMENTOS COMUNIDAD</h2>

        <form method="POST" action="{{ route('archivo.store') }} "  class="form-3" enctype="multipart/form-data">
            @csrf
        <div class="divider grey"></div>
        <div class="row">
            <div class="col">

                <div class="grey-icon-wrapper col-sm-4">
                    <div class="text-block">


                        @if ( empty($archivos->lopd))
                        <label> LOPD </label>
                        <input type="file" class="text-field-11 w-input content-center" maxlength="256" name="lopd" data-name="Field 2" placeholder="" id="field-2" >
                        @endif

                        @if ( !empty($archivos->lopd))
                                <label> LOPD </label>
                                <p> {{ $archivos->lopd }}</p>
                            @endif


                        @if ( empty( $archivos->visita))
                        <label> Informe visita </label>
                        <input type="file" class="text-field-11 w-input content-center" maxlength="256" name="visita" data-name="Field 2" placeholder="" id="field-2" >
                        @endif

                        @if ( !empty ($archivos->visita))
                                <label> Informe visita </label>
                                <p> {{$archivos->visita}}</p>
                        @endif

                        @if ( empty( $archivos->informe))
                                <label> Informe coordinación actividades empresariales</label>
                        <input type="file" class="text-field-11 w-input content-center" maxlength="256" name="informe" data-name="Field 2" placeholder="" id="field-2" >
                        @endif

                        @if ( !empty ($archivos->informe))
                                <label> Informe coordinación actividades empresariales</label>
                                <p> {{$archivos->informe}}</p>
                        @endif
                        <input type="hidden" value=" {{$comunidades->id}}" name="comunidadid" >

                            @if (empty($archivos->lopd) && empty($archivos->visita) && empty($archivos->informe))
                        <input type="submit" value="Envía" data-wait="Espere porfavor..." class="submit-button-2 w-button">
                                @endif

                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<div>

@endif

@if (Auth::user()->role == "adminfinca")

        <div id="process" class="section">
            <div class="container w-container">
                <h2 class="heading-2">DOCUMENTOS COMUNIDAD</h2>




                <div class="divider grey"></div>
                <div class="row">
                    <div class="col">

                        <div class="grey-icon-wrapper col-sm-4">
                            <div class="text-block">


                                @if ( empty($archivos->lopd) )
                                    <label> LOPD </label>
                                    <img src=" {{ asset ('/semaforo/R331945a42b559bccb77e562d599ecf06.png') }}" width="50px" height="50px">
                                @endif

                                @if( !empty($archivos->lopd))
                                        <label> LOPD</label>
                                        <img src=" {{ asset ('/semaforo/green circle.png') }}" width="50px" height="50px">
                                    @endif

                                    @if ( empty($archivos->visita))
                                    <label> Informe visita </label>
                                        <img src=" {{ asset ('/semaforo/R331945a42b559bccb77e562d599ecf06.png') }}" width="50px" height="50px">
                                    @endif


                                    @if (!empty ($archivos->visita))
                                        <label> Informe visita </label>
                                        <img src=" {{ asset ('/semaforo/green circle.png') }}" width="50px" height="50px">
                                    @endif


                                    @if ( empty($archivos->informe))
                                        <label> Informe sobre actividades empresariales</label>
                                        <img src=" {{ asset ('/semaforo/R331945a42b559bccb77e562d599ecf06.png') }}" width="50px" height="50px">
                                        @endif

                                    @if (!empty ($archivos->informe))
                                        <label> Informe sobre las actividades empresariales</label>
                                        <img src=" {{ asset ('/semaforo/green circle.png') }}" width="50px" height="50px">
                                        @endif

                                    <br><br><br>
                                @if (!empty($archivos->lopd) && !empty($archivos->visita) && !empty($archivos->informe))

                                    <label> Todos los archivos han sido subidos</label>

                                    @endif

                                @if (empty ($archivos->lopd) || empty($archivos->visita) || empty($archivos->informe))

                                        <label> Faltan archivos, contacta con <br> <a href =" {{ route ('enviar.email' , $comunidades->comunidad) }} "> <p class="link">{{strtoupper($comunidades->tecnico)}} </p></a></label>
                                @endif



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>

@endif
