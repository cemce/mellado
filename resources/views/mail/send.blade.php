@if (Auth::user()->role == "comercial")

<p> Buenas {{$mail_data['comunidad']->tecnico}}</p>
<p>Actualmente tienes comunidades donde no hay los archivos correspondientes colgados. {{$mail_data['comunidad']->comunidad}} </p>
<p>Faltan los siguientes archivos: </p>

@if (empty($mail_data['archivos']->lopd) || $mail_data['archivos'] == "null")
    <p> Falta el LOPD</p>
@endif

@if (empty($mail_data['archivos']->visita) || $mail_data['archivos'] == "null")
    <p> Falta la visita</p>
@endif

@if (empty($mail_data['archivos']->informe) || $mail_data['archivos'] == "null")
    <p> Falta el informe de actividad</p>
@endif
<p>Porfavor, envía los documentos.<p>
<p>Gracias.</p>

    @endif



@if (Auth::user()->role == "adminfinca")

    <p>Buenas {{$mail_data['proveedor']->contacto}}</p>
    <br>
    <p>{{$mail_data['adminfinca']->name}}, quiere contactar contigo</p>
    <p>Puedes enviar un correo a {{$mail_data ['adminfinca']->email}}</p>
    <p>Que tenga buenos dias.</p>

    @endif
