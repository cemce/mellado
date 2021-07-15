
<div class="pagination content-center">

    @if ($comunidades instanceof \Illuminate\Pagination\LengthAwarePaginator )
    {{ $comunidades->links('pagination::bootstrap-4') }}


    @endif

</div>
