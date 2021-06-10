<form action=" {{ route ('comunidades.destroy' , $item->comunidad) }}" method="POST">
    @method('DELETE')
    @csrf

    <input class="btn-danger " type="submit" value="Borrar"
           name="Submit" id="frm1_submit" onclick="return confirm('¿Seguro que quieres borrar la comunidad?');"/>
</form>
