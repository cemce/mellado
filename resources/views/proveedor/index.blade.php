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

<div id="process" class="section">
    <div class="container w-container">
        <h2 class="heading-2">TUS PROVEEDORES</h2>
        <div class="divider grey"></div>
        <div class="row">
            <div class="col">


                @include('no-records-proveedor')

                @foreach ($proveedor as $item)



                    <div class="grey-icon-wrapper w-col-small-3">
                        <div class="text-block">
                            <b>PROVEEDOR:</b> {{$item->nombreproveedor}}

                            <br>
                            <br>

                            <b>CIUDAD:</b> {{$item->municipio}}
                            <br>
                            <br>

                            <b>TELEFONO:</b> {{$item->telefono}}
                            <br>
                            <br>

                        </div>

                        <a href="{{ route('proveedor.show', $item->nombreproveedor) }}" ><img src=" {{ asset('foto/b3ccd57b054a73af1a0d281265b54ec8.jpg') }}" loading="lazy" width="60" height="60" srcset="" sizes="60px" alt="" class="image"></a>

                        @if (Auth::user()->role == 'adminfinca')

                            @include('borrarProveedor')
                            <br>

                            @include('editarProveedor')


                        @endif
                        <br>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609d4de759c770eeb52754d1" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
