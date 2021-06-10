<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu May 13 2021 17:25:16 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="609d4de759c77073932754d8" data-wf-site="609d4de759c770eeb52754d1">

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
    <div class="w-container">
      <h2 class="heading-2">Buenas, {{Auth::user()->name}} </h2>
      <div class="divider grey"></div>
      <div class="w-row">
        <div class="w-col w-col-4">
        <a href="{{ route('administrador.show', Auth::user()->name)}}">
          <div class="grey-icon-wrapper"><img src="{{ asset('foto/b3ccd57b054a73af1a0d281265b54ec8.jpg') }}" width="127" sizes="(max-width: 479px) 45vw, 127px"  alt="" class="big-icon"></div>
          </a>
          <h3>Comunidades</h3>
          <p>Aquí podrá consultar las comunidades <br>que tiene bajo su responsabilidad.</p>
        </div>
        <div class="w-col w-col-4">
            <a href="{{ route('proveedor.index', Auth::user()->name)}}">
          <div class="grey-icon-wrapper push-top"><img src="{{ asset('foto/group.png') }}" width="127" alt="" class="big-icon"></div>
            </a>
          <h3>Proveedores</h3>
          <p>Si quiere consultar directamente los <br>proveedores, puede hacerlo<br>desde esta pestaña.</p>
        </div>
        <div class="w-col w-col-4">
          <div class="grey-icon-wrapper push-top"><img src=" {{ asset('foto/help.png') }}" width="127" sizes="(max-width: 479px) 45vw, 127px"  alt="" class="big-icon"></div>
          <h3>Ayuda</h3>
          <p>¿Necesitas ayuda?<br> Horario de atención:<br>09:00 a 18:00 </p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=609d4de759c770eeb52754d1" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>










