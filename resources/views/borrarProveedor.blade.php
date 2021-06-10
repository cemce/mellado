<form action=" {{ route ('proveedor.destroy' , $item->id) }}" method="POST">
    @method('DELETE')
    @csrf

    <input class="btn-danger " type="submit" value="Borrar"
           name="Submit" id="frm1_submit" onclick="return confirm('¿Seguro que quieres borrar el proveedor?');"/>
</form>
