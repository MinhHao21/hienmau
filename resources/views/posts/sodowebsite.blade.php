@extends('layout.layoutchinh')
@section('content')
<h3 class="text-3xl font-bold ">Sơ đồ website</h3>
<hr style="width:200px; height:2px ; background:rgba(185,28,28,var(--tw-bg-opacity))">
    <ul class="ml-5 mt-3">
        <li > <i class="fas fa-angle-right text-red-700 mr-2"></i><a href="/" class="text-black hover:text-red-900 font-bold text-lg ">Trang chủ </a></li>
        
        @foreach($danhmuc as $dm)
                            <li><i class="fas fa-angle-right text-red-700 mr-2 mb-2"></i><a href="" title="Giới thiệu" class="text-black hover:text-red-900 font-bold text-lg ">{{$dm->name}}</a>
                                <ul class="ml-10">

                                    @foreach($gioithieu as $gt)
                                    @if($dm->id == $gt->danhmuc_id)

                                    @if($gt->loaibaiviet == 'baiviet')
                                    <li><i class="fas fa-angle-right text-red-700 mr-2 mb-2"></i><a href="/danh-muc/{{$gt->slug}}" title="" class="text-black hover:text-red-900 ">
                                            {{$gt->tendm}}</a></li>
                                    @else
                                    <li><i class="fas fa-angle-right text-red-700 mr-2"></i><a href="/van-ban/{{$gt->slug}}" title="" class="text-black hover:text-red-900 ">
                                            {{$gt->tendm}}</a></li>
                                    @endif
                                    
                                    @endif
                                    @endforeach

                                </ul>
                            </li>


                            @endforeach
        <li>
            <i class="fas fa-angle-right text-red-700 mr-2"></i><a href="/hoi-dap" class="text-black hover:text-red-900 font-bold text-lg ">Hỏi đáp </a>
        </li>
        <li>
            <i class="fas fa-angle-right text-red-700 mr-2"></i><a href="/lien-he" class="text-black hover:text-red-900 font-bold text-lg ">Liên hệ </a>
        </li>
       
    </ul>





@endsection