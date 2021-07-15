@if (Auth::user()->role == "proveedor" && $comunidades->isEmpty())

<div class="grey-icon-wrapper col-sm-4">
    <div class="text-block">
        <B>NO HAY COMUNIDADES</B>
    </div>
</div>



@elseif ($comunidades->isEmpty())

    <div class="grey-icon-wrapper col-sm-4">
        <div class="text-block">
            <B>NO HAY COMUNIDADES</B>
        </div>
    </div>

@endif


