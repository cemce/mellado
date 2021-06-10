<strong>COMUNIDAD</strong>: {{$comunidades->comunidad}}
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
<strong>PRECIO</strong>: {{$comunidades->precio}}
<br><br>


<strong>FOTO DEL PORTAL</strong>: <br>
<img src="{{ asset('foto/' . $comunidades->foto) }}"  width="500" height="500" alt="image">
