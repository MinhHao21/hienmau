@extends('layout.trangchu')
@section('content')
<main class="mains mt-4 w-full">
    <div class=" col-span-12 grid grid-cols-12 mx-auto w-full">
        <div class="col-span-12 grid grid-cols-12 mr-3">
            <!-- Tin chính -->
            <div class="col-span-12 grid grid-cols-12 ">
                <div class="sm:col-span-12 col-span-12 text-justify mb-4">
                    <div class="tinnoibat owl-carousel owl-theme">
                        <div class="item ">
                            <a href="">
                                <div class=" w-full  tinnb-img-l" style="">
                                    <div>
                                        <img class="zoom transform hover:-translate-y-1 hover:scale-110 " width="full" height="auto" src="/images/tap-the-so-tu-phap-2.png" alt="">
                                    </div>
                                    <div class="absolute bg-gradient-to-t from-black px-8 to-white-500 w-full p-5" style="bottom:0; right:0">
                                        <div class="text-white  text-sm mt-2 ">

                                        </div>
                                        <div class="text-white font-bold sm:text-lg text-base mt-2 hover:text-blue-400">

                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="">
                                <div class=" w-full  tinnb-img-l" style="">
                                    <div>
                                        <img class="zoom transform hover:-translate-y-1 hover:scale-110 " width="full" height="auto" src="/images/tap-the-so-tu-phap-1.png" alt="">
                                    </div>
                                    <div class="absolute bg-gradient-to-t from-black px-8 to-white-500 w-full p-5" style="bottom:0; right:0">
                                        <div class="text-white  text-sm mt-2 ">

                                        </div>
                                        <div class="text-white font-bold sm:text-lg text-base mt-2 hover:text-blue-400">

                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="">
                                <div class=" w-full  tinnb-img-l" style="">
                                    <div>
                                        <img class="zoom transform hover:-translate-y-1 hover:scale-110 " width="full" height="auto" src="/images/tap-the-nu-so-tu-phap.png" alt="">
                                    </div>
                                    <div class="absolute bg-gradient-to-t from-black px-8 to-white-500 w-full p-5" style="bottom:0; right:0">
                                        <div class="text-white  text-sm mt-2 ">

                                        </div>
                                        <div class="text-white font-bold sm:text-lg text-base mt-2 hover:text-blue-400">

                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="set-web mx-auto grid grid-cols-12">

        <!-- LEFT WEB -->

        <div class="sm:col-span-9 col-span-12 p-2 mb-2" >
            <div style="border: 2px solid rgba(204, 204, 204, 0.678);" class="p-2">
                <p class="font-bold border-b border-yellow-700 text-blue-800 text-xl mb-4" style="border-bottom: 2px solid rgba(2, 57, 119, 0.8);"> TIN NỔI BẬT</p>

                <div class="grid grid-cols-12 mt-6 ">
                    @if($tinnoibatnb)
                    <div class="sm:col-span-6 col-span-12 sm:mr-6">
                        <div class="new_img_l mx-auto">
                            <a href="/chi-tiet-tin-tuc/{{$tinnoibatnb->slug}}">
                                <img class="w-full" src="{{$tinnoibatnb->thumbnail}}" alt="">
                            </a>
                        </div>
                        <a href="/chi-tiet-tin-tuc/{{$tinnoibatnb->slug}}">
                            <p class="font-bold text-justify text-xl my-1 text-gray-800">{{$tinnoibatnb->title}}</p>
                        </a>
                        <p class="text-base  text-justify text-gray-800">{{$tinnoibatnb->excerpt}}
                        </p>
                    </div>
                    @endif
                    <div class="sm:col-span-6 col-span-12">
                        @foreach($tinnoibat as $tnb)
                        <div class="grid grid-cols-12 mb-2">

                            <div class="col-span-4 pb-4 ">
                                <a href="/chi-tiet-tin-tuc/{{$tnb->slug}}">
                                    <img src="{{$tnb->thumbnail}}" alt="">
                                </a>
                            </div>
                            <div class="col-span-8 ml-3 ">
                                <a href="/chi-tiet-tin-tuc/{{$tnb->slug}}">
                                    <p class="font-medium text-justify text-base text-gray-800 ">{{$tnb->title}}</p>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>  
            </div>
            
            <div class="grid grid-cols-12 mt-6 sm:shadow-lg shadow-md">
                <img class="col-span-12" src="/images/2022 CMNM.png" alt="">
            </div>
        </div>

        <!-- RIGHT WEB -->

        <div class="sm:col-span-3 col-span-12 sm:ml-6 px-2 shadow-lg">
            <div class="border-2 border-gray-100 ">
                <div class="text-blue-600 text-center bg-gray-100 mt-1" style="color:rgba(2, 57, 119, 0.8);">
                    <p class="mb-2 font-bold text-xl text-blue-600 py-2" style="color:rgba(2, 57, 119, 0.8); border-top: 2px solid rgba(2, 57, 119, 0.8);">THÔNG BÁO</p>
                </div>
                <div class="">
                    <div class="">
                        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" height="250px">
                        @foreach ($thongbao as $tb)
                            <a href="">
                                <p class=" text-sm mb-1 p-2 text-justify" style="border-bottom: dashed 1px #75bdcd">-
                                    {{$tb->title}}</p>
                            </a>
                        @endforeach 
                        @foreach ($thongbaodaugia as $tbdg)
                            <a href="">
                                <p class=" text-sm mb-1 p-2 text-justify" style="border-bottom: dashed 1px #75bdcd">-
                                    {{$tbdg->title}}</p>
                            </a>
                        @endforeach     
                        </marquee>
                    </div>
                </div>
            </div>
            <div id="menu">
                <div class="uldoc mx-auto">
                    @foreach ($menuleft as $dm)
                    <div class="lidoc font-bold">
                        <a href="/danh-muc/{{$dm['slug']}}" class="text-white font-bold">{{$dm['label']}}</a>
                        @if ($dm['kiemtra']==1)
                        @include('layout.childleft', ['danhmuc' => $dm['children']])
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- <div>
                Ảnh chức năng
                <div class="mb-1">
                    <a href="">
                            <img src="/images/chucnang-1.jpg" alt="" class="w-full">
                    </a>
                </div>    
               <div class="mb-1">
                    <a href="">
                            <img src="/images/chucnang-2.jpg" alt="" class="w-full">
                    </a>
                </div>    
                <div class="mb-1">
                    <a href="">
                            <img src="/images/chucnang-3.jpg" alt="" class="w-full">
                    </a>
                </div>
                <div class="mb-1">
                    <a href="">
                            <img src="/images/chucnang-4.jpg" alt="" class="w-full">
                    </a>
                </div>    
            </div> -->
        </div>
    </div>
    <!-- TIN TỨC CHUYÊN NGÀNH -->
    <div class="grid grid-cols-12 mt-6 set-web mx-auto">
        <div class="sm:col-span-4 col-span-12 sm:mr-6 shadow-xl p-2">
            <p class="font-bold border-b border-blue-700 text-blue-800 text-xl my-4 pl-2" style="border-bottom: 2px solid rgba(2, 57, 119, 0.8);"> HOẠT ĐỘNG TƯ PHÁP</p>

            @foreach($hdtuphap as $hdtp)
            <div class="grid grid-cols-12 py-4 ">
                <div class="col-span-4">
                    <a href="/chi-tiet-tin-tuc/{{$hdtp->slug}}">
                        <img src="{{$hdtp->thumbnail}}" alt="">
                    </a>
                </div>
                <div class="col-span-8 ml-4 font-medium text-justify tintuc-content-s ">
                    <a href="/chi-tiet-tin-tuc/{{$hdtp->slug}}">
                        <p>{{$hdtp->title}}</p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="sm:col-span-4 col-span-12 sm:mr-6 shadow-xl p-2">
            <p class="font-bold border-b border-yellow-700 text-blue-800 text-xl my-4 pl-2" style="border-bottom: 2px solid rgba(2, 57, 119, 0.8);"> TIN TỨC TƯ PHÁP HÀ TĨNH</p>

            @foreach($tintuctuphap as $tttp)
            <div class="grid grid-cols-12 py-4 ">
                <div class="col-span-4">
                    <a href="/chi-tiet-tin-tuc/{{$tttp->slug}}">
                        <img src="{{$tttp->thumbnail}}" alt="">
                    </a>
                </div>
                <div class="col-span-8 ml-4 font-medium text-justify tintuc-content-s ">
                    <a href="/chi-tiet-tin-tuc/{{$tttp->slug}}">
                        <p>{{$tttp->title}}</p>
                    </a>

                </div>
            </div>
            @endforeach
        </div>
        <div class="sm:col-span-4 col-span-12 sm:mr-6 shadow-xl p-2">
            <p class="font-bold border-b border-yellow-700 text-blue-800 text-xl my-4 pl-2" style="border-bottom: 2px solid rgba(2, 57, 119, 0.8);"> HOẠT ĐỘNG CƠ SỞ</p>

            @foreach($hdcoso as $hdcs)
            <div class="grid grid-cols-12 py-4 ">
                <div class="col-span-4">
                    <a href="/chi-tiet-tin-tuc/{{$hdcs->slug}}">
                        <img src="{{$hdcs->thumbnail}}" alt="">
                    </a>
                </div>
                <div class="col-span-8 ml-4 font-medium text-justify tintuc-content-s ">
                    <a href="/chi-tiet-tin-tuc/{{$hdcs->slug}}">
                        <p>{{$hdcs->title}}</p>
                    </a>

                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class=" px-20 py-10 mt-6 mb-6" style="background-color: rgba(2, 57, 119, 0.8);">
        <span class="sm:text-3xl text-xl mt-5 mb-5 font-bold text-gray-100"> <i class="fas fa-photo-video mr-3"></i>ẢNH -
            VIDEO</span>
        <div class=" image-img-l mt-5 rounded-xl overflow-hidden relative">
            <a href="/thu-vien-anh/{{$image->slug}}">
            <img class="w-full" src="/storage/{{$image->thumbnail}}" alt="">
            </a>
            <div class="image-content-l font-bold    text-justify text-2xl  absolute" style="background-color: rgba(195,131,53,0.7);">
                <p class="border-l-2  pl-4 my-2 mx-52" style="color: #fffad7; border-color: #ffe893;">Hội nghị trực tuyến toàn quốc sơ kết công tác dân tộc 9 tháng năm 2021; Triển khai nhiệm vụ trọng tâm 03 tháng cuối năm 2021</p>
            </div>
        </div>
        <div class="grid grid-cols-12 mt-4 ">
            @foreach($danhsachvideo as $p)
            <div class="sm:col-span-3 col-span-12 sm:mr-4">
                <video class="w-full video-video-l rounded-xl sm:mt-2"  width="320" height="240" controls>
                    <source src="{{ $p['linkyoutube'] }}" type="video/mp4">
                </video>
                <p class="text-justify text-white mt-2">{{ $p['name'] }}</p>
            </div>
            @endforeach

        </div>
    </div>
    <div class="grid grid-cols-12 set-web mx-auto shadow-lg">
        <div class="col-span-12 text-center py-2 text-2xl font-bold text-white" style="background-color:rgba(2, 57, 119, 0.8) ;">
            <p>PHỔ BIẾN, GIÁO DỤC PHÁP LUẬT</p>
        </div>
        <div class="col-span-12 grid grid-cols-12 " style="border-bottom: 2px solid rgba(204, 204, 204, 0.678); border-left: 2px solid rgba(204, 204, 204, 0.678);">
            <div class="sm:col-span-4 col-span-12 grid grid-cols-12 " style="border-right: 2px solid rgba(204, 204, 204, 0.678);">
                <div class="col-span-12 text-center text-xl font-bold bg-gray-200 mb-4 h-12" style="color:rgba(2, 57, 119, 0.8);">
                    <p class="m-2">CHỈ ĐẠO HƯỚNG DẪN</p>
                </div>
                @foreach($chidaohuongdan as $cdhd)

                <div class="col-span-12  pb-2 px-2" style="border-bottom:2px solid rgba(204, 204, 204, 0.678);">
                    <a href="/chi-tiet-tin-tuc/{{$cdhd->slug}}">
                        <div class="px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 float-left mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-sm">{{$cdhd->title}}</p>
                        </div>
                    </a>    

                </div>
                @endforeach
                <!-- <div class="col-span-12 mb-4 pb-2 px-2" style="border-bottom:2px solid rgba(204, 204, 204, 0.678);">
                    <div class="px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 float-left mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm">Hướng dẫn của Hội đồng phối hợp PBGDPL tỉnh về tuyên truyền pháp luật về bầu cử</p>
                    </div>
                </div>
                <div class="col-span-12 mb-4 pb-2 px-2" style="">
                    <div class="px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 float-left mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm">Hướng dẫn của Hội đồng phối hợp PBGDPL tỉnh về tuyên truyền pháp luật về bầu cử</p>
                    </div>
                </div> -->
            </div>
            <div class="sm:col-span-4 col-span-12 grid grid-cols-12 " style="border-right: 2px solid rgba(204, 204, 204, 0.678);">
                <div class="col-span-12 text-center text-xl font-bold bg-gray-200 mb-4  h-12" style="color:rgba(2, 57, 119, 0.8);">
                    <p class="m-2">VĂN BẢN PHÁP LUẬT MỚI</p>
                </div>
                @foreach($vanbanphapluatmoi as $vbplm)

                <div class="col-span-12 pb-2 px-2" style="border-bottom:2px solid rgba(204, 204, 204, 0.678);">
                    <a href="/chi-tiet-tin-tuc/{{$vbplm->slug}}">
                        <div class="px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 float-left mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-sm">{{$vbplm->title}}</p>
                        </div>
                    </a>    

                </div>
                @endforeach
            </div>
            <div class="sm:col-span-4 col-span-12 grid grid-cols-12 " style="border-right: 2px solid rgba(204, 204, 204, 0.678);">
                <div class="col-span-12 text-center text-xl font-bold bg-gray-200 mb-4  h-12" style="color:rgba(2, 57, 119, 0.8);">
                    <p class="m-2">TÀI LIỆU PBGDPL</p>
                </div>
                @foreach($phobienphapluat as $pbgdpl)

                <div class="col-span-12  pb-2 px-2" style="border-bottom:2px solid rgba(204, 204, 204, 0.678);">
                    <a href="/chi-tiet-tin-tuc/{{$pbgdpl->slug}}">    
                        <div class="px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 float-left mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-sm">{{$pbgdpl->title}}</p>
                        </div>
                    </a>    

                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

<script>
    $('.tinnoibat').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        autoHeight: true,
        items: 1,
        dots: false,

    });
    // $('.thuvienanh').owlCarousel({
    //     loop: true,
    //     margin: 10,
    //     nav: false,
    //     autoplay: true,
    //     autoplayTimeout: 2000,
    //     autoplayHoverPause: true,
    //     items: 4,

    // })
</script>

@endsection