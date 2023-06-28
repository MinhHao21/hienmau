@extends('layout.trangchu')
@section('content')

<div class="vanban-content sm:px-0 px-2">

    <div class="w-full mt-3 sm:mb-0 mb-3">
        <table class="w-full rounded-lg">
            @foreach($ctvanban as $ctvb)
            <tr>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs w-2/6 sm:w-1/5 font-medium uppercase bg-gray-300 border-2 tracking-wider">
                    Số ký kiệu: </td>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvb->sokyhieu}}</td>
            </tr>
            <tr>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs w-2/6 sm:w-1/5 font-medium uppercase bg-gray-300 border-2 tracking-wider">
                    Trích yếu: </td>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvb->trichyeu}}</td>
            </tr>
            <tr>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs w-2/6 sm:w-1/5 font-medium uppercase bg-gray-300 border-2 tracking-wider">
                    Ngày ban hành: </td>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvb->ngaybanhanh}}</td>
            </tr>
            <tr>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs w-2/6 sm:w-1/5 font-medium uppercase bg-gray-300 border-2 tracking-wider">
                    Ngày hết hạn: </td>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvb->ngayhethan}}</td>
            </tr>
            <tr>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs w-2/6 sm:w-1/5 font-medium uppercase bg-gray-300 border-2 tracking-wider">
                    Người ký văn bản: </td>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvb->nguoiky}}</td>
            </tr>
            <tr>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs w-2/6 sm:w-1/5 font-medium uppercase bg-gray-300 border-2 tracking-wider">
                    Chức vụ: </td>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvb->chucvu}}</td>
            </tr>
            <tr>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs w-2/6 sm:w-1/5 font-medium uppercase bg-gray-300 border-2 tracking-wider">
                    Cơ quan ban hành: </td>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvb->coquanbanhanh}}

                </td>
            </tr>
            <tr>
                <td
                    class="px-3 py-3 text-left sm:text-base text-xs w-2/6 sm:w-1/5 font-medium uppercase bg-gray-300 border-2 tracking-wider">
                    Đính kèm: </td>
                    <td class="px-3 py-3 text-left sm:text-base text-xs hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                        @if($ctvb->dinhkem)
                        @foreach($ctvb->dinhkem as $dk)
                        <a href="{{$dk['link']}}" download>
                            {{ $dk['tenfile']}}
                        </a>
                        @endforeach
                        @endif
                    </td>

            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection