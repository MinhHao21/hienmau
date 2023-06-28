
<ul class="cap_2 text-blue-800">
    @foreach ($danhmuc as $dm)
        <li>
            <a href="/danh-muc/{{$dm['slug']}}" >{{$dm['label']}}</a>
            @if ($dm['kiemtra']==1)
                @include('layout.childmobile', ['danhmuc' => $dm['children']])
            @endif
        </li>
    @endforeach
</ul>

