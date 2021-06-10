<form action=" {{ route ('proveedor.edit' , $item->id) }}" method="POST">
    @method('GET')
    @csrf

    <input class="btn-danger " type="submit" value="Editar"
           name="Submit" id="frm1_submit"/>
</form>
