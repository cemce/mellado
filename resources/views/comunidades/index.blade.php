<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri May 14 2021 17:48:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="609eafc441dcc10db7aeebf3" data-wf-site="609d4de759c770eeb52754d1">
@include('runa')
@include('navigation-menu')
<body>
<div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
    <div class="w-container">
        <a href="#" class="brand-block w-clearfix w-nav-brand"><img src="images/AY_BP_UB2.png" width="65" sizes="(max-width: 767px) 50px, 65px" srcset="images/AY_BP_UB2-p-500.png 500w, images/AY_BP_UB2-p-800.png 800w, images/AY_BP_UB2.png 1080w" alt="" class="logo-img"></a>
        <div class="menu-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
        </div>
    </div>
</div>

@if (Auth::user()->role == 'adminfinca' || Auth::user()->role == 'admin')
    @include('busqueda')
@endif
<div id="process" class="section">
    <div class="container w-container">
        <h2 class="heading-2">tus comunidades</h2>
        <div class="divider grey"></div>
        <div class="row">
            <div class="col">





                @include ('no-records')

                @foreach ($comunidades as $item)



                <div class="grey-icon-wrapper w-col-small-3">
                    <div class="text-block">
                        <b>DIRECCIÓN:</b> {{$item->direccion}}

                        <br>
                        <br>

                        <b>TÈCNICO:</b> {{$item->tecnico}}
                        <br>
                        <br>

                        <b>ADMIN:</b> {{$item->administrador}}
                        <br>
                        <br>

                    </div>

                    <a href="{{ route('comunidades.show', $item->comunidad) }}" ><img src=" {{ asset('foto/b3ccd57b054a73af1a0d281265b54ec8.jpg') }}" loading="lazy" width="60" height="60" srcset="" sizes="60px" alt="" class="image"></a>

                    @if (Auth::user()->role == 'admin'  || Auth::user()->role == "comercial")

                        @include('borrarComunidad')
                        <br>

                        @endif
                    <br>

                </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@if (Auth::user()->role == "admin")
    @include('comunidadCount')
@endif
@include('pagination')
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609d4de759c770eeb52754d1" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
