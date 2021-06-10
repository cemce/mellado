@if (Auth::user()->role == "admin")

<div class="w-container">
    <div class="section">
        <div class="grey-icon-wrapper">
            <p class="text-block"><b>Búsqueda por tècnico</b></p>
            <form action=" {{ route ("comunidades.search") }} " method="POST" accept-charset="utf-8">
                @csrf
                <input type="text" name="tecnico">
                <input type="submit" class="btn-secondary" name="submit" value="Buscar">
            </form>
        </div>
    </div>
</div>

@endif

@if (Auth::user()->role == "adminfinca")

    <div class="w-container">
        <div class="section">
            <div class="grey-icon-wrapper">
                <p class="text-block"><b>Búsqueda por tècnico</b></p>
                <form action=" {{ route ("administrador.search") }} " method="POST" accept-charset="utf-8">
                    @csrf
                    <input type="text" name="tecnico">
                    <input type="submit" class="btn-secondary" name="submit" value="Buscar">
                </form>
            </div>
        </div>
    </div>
@endif
