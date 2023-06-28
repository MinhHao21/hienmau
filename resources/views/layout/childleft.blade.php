
<div class="sub-menu uldoc">
    @foreach ($danhmuc as $dm)
        <div class="lidoc font-bold">
            <a href="/danh-muc/{{$dm['slug']}}">{{$dm['label']}}</a>
        @if ($dm['kiemtra']==1)
            @include('layout.childmobile', ['danhmuc' => $dm['children']])
        @endif    
        </div >
    @endforeach    
</div>
