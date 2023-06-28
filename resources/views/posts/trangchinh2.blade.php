@extends('layout.trangchu')
@section('content')

<div class="w-full  rounded-lg">
    <!--form Tin tức - sự kiện-->

    <!-- Start newslider-vertical -->

    <div class="sliderkit newslider-vertical relative">

        <div class="sliderkit-nav absolute" >

            <div class="sliderkit-nav-clip overflow-hidden">
                <div class="box-2 border-red-700 border-b-2  py-1 px-2 rounded-t-lg">
                    <a href="">
                        <i class="fas fa-newspaper text-xl px-2 text-red-700"></i>
                        <span class=" font-bold text-xl text-red-700 ">TIN TỨC SỰ KIỆN</p>
                        </span>
                    </a>
                </div>
                <ul class="text-justify">
                    @foreach($vanhoa as $vh)
                    <li><a href="/chi-tiet/{{$vh->slug}}" title="[link title]" class="overflow-hidden border-gray-500 border-dashed bg-gray-200 text-justify px-2 border-b py-2 font-bold text-sm hover:text-red-700 h-auto">{{$vh->title}} </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="sliderkit-panels sm:block hidden ">
            @foreach($vanhoa as $vh)

            <div class="sliderkit-panel">
                <div class="sliderkit-news">
                    <a href="/chi-tiet/{{$vh->slug}}" title="[Titre de l'article]"><img class="w-full" src="/storage/{{ $vh->thumbnail }}" alt="[alternative text]" /></a>

                </div>
            </div>
            @endforeach


        </div>
    </div>
    <!-- // end of newslider-vertical -->






    <!--form bầu cử-->
    <div class=" sm:mt-10 mt-2">
        <div class="grid grid-cols-12 pb-2">
            <div class="col-span-12 text-center -mb-6 font-bold text-2xl text-red-600">
                Bầu cử Đại biểu Quốc Hội và Hội đồng Nhân Dân các cấp
            </div>
        </div>
        <hr class="w-full mt-5 mb-1 border-b  border-red-700 border-solid">
        <div class="grid grid-cols-12 sm:mx-3 mt-3">
            @foreach($baucu as $bc)
            <div class="sm:col-span-3 col-span-12 text-center mt-2 sm:mr-3">
                <div class="grid grid-cols-12">
                    <div class=" box-img-baucu overflow-hidden col-span-12 border border-gray-200 rounded-md w-full px-1 py-1 shadow-md">
                        <img class="w-full h-full" src="/storage/{{ $bc->thumbnail }}">
                    </div>
                    <div class="baucu-content overflow-hidden col-span-12 mx-2   text-justify  text-left mt-2 text-gray-900 hover:text-red-700">
                        <a href="/chi-tiet/{{$bc->slug}}"> {{$bc->title}} </a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
<!--------------------------- past 2--form điều hành tác nghiệp----------------------------->
@section('content2')
<div class="grid grid-cols-12 sm:mt-6 sm:mx-3 mx-2 mb-8">
    <div class="sm:col-span-12 col-span-12 sm:pl-0">

        <!-- khối giới thiệu  -->
        <div class="w-full">
            <div class="w-full my-3 mb-6">
                <div class="grid grid-cols-12 sm:block hidden ">
                    <div class="col-span-12 text-center -mb-6 font-bold text-3xl text-red-600 text-xl font-bold">
                        ĐIỀU HÀNH TÁC NGHIỆP
                    </div>
                </div>
            </div>


            <div class="grid grid-cols-12 ">
                <div class="sm:col-span-4 col-span-12 text-center  sm:mr-4 ">
                    <div class="col-span-4 text-center ">
                        <div class="tn-title bg-red-700  rounded-t-lg  border-b-2  py-3 px-2 rounded-t-lg ">
                            <a href="/van-ban/van-ban-tw">
                                <i class="fas fa-file-contract text-2xl px-2 text-white"></i>
                                <span class=" font-bold text-xl  text-white ">VĂN BẢN CHỈ ĐẠO ĐIỀU HÀNH</p>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 border-4 border-red-700 tn-content">
                        <div class="sm:col-span-12 col-span-12 overflow-y-auto h-80">
                            @foreach($vanban as $vb)
                            @if($vb->id % 2 == 0)
                            <div class=" w-full bg-gray-50 my-1">
                                <div class="grid grid-cols-12 px-2 py-2">
                                    <div class="col-span-12 text-left text-gray-400">
                                        20/04/2021
                                    </div>
                                    <div class="col-span-12 text-justify  text-blue-600 hover:text-blue-900">
                                        <a href="/van-ban-chi-tiet/{{$vb->id}}"> {{ $vb->trichyeu }} </a>
                                    </div>
                                </div>
                            </div>
                            @else($vb->id % 2 == 1)
                            <div class=" w-full bg-gray-200 my-1">
                                <div class="grid grid-cols-12 px-2 py-2">
                                    <div class="col-span-12 text-left text-gray-400">
                                        20/04/2021
                                    </div>
                                    <div class="col-span-12 text-justify text-blue-600 hover:text-blue-900">
                                        <a href="/van-ban-chi-tiet/{{$vb->id}}"> {{ $vb->trichyeu }} </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="sm:col-span-4 col-span-12 text-center ">
                    <div class="bg-red-700 tn-title rounded-t-lg border-b-2  py-3 px-2 sm:mt-0 mt-3 ">
                        <a href="/van-ban/van-ban-huyen">
                            <i class="fas fa-file-contract text-2xl px-2 text-white"></i>
                            <span class=" font-bold text-lg  text-white ">VĂN BẢN HUYỆN KỲ ANH</p>
                            </span>
                        </a>
                    </div>
                    <div class="grid grid-cols-12 border-red-700 border-4 tn-content">
                        <div class="sm:col-span-12 col-span-12 overflow-y-auto h-80">

                            @foreach($vanbanhuyen as $vbh)
                            @if($vbh->id % 2 == 0)
                            <div class=" w-full bg-gray-50 my-1">
                                <div class="grid grid-cols-12 px-2 py-2">
                                    <div class="col-span-12 text-left text-gray-400">
                                        20/04/2021
                                    </div>
                                    <div class="col-span-12 text-justify text-blue-600 hover:text-blue-900">
                                        <a href="/van-ban-chi-tiet/{{$vbh->id}}" class="text-justify">
                                            {{ $vbh->trichyeu }} 
                                        </a>
                                    </div>

                                </div>
                            </div>
                            @else($vbh->id % 2 == 1)
                            <div class=" w-full bg-gray-200 my-1">
                                <div class="grid grid-cols-12 px-2 py-2">
                                    <div class="col-span-12 text-left text-gray-400">
                                        20/04/2021
                                    </div>
                                    <div class="col-span-12 text-left text-justify text-blue-600 hover:text-blue-900">
                                        <a href="/van-ban-chi-tiet/{{$vbh->id}}" class="text-justify"> {{ $vbh->trichyeu }} </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-4 col-span-12 text-center sm:ml-4 ml-0  ">
                    <div class=" bg-red-700 tn-title  rounded-t-lg  border-b-2  py-3 sm:mt-0 mt-3 pl-2 rounded-t-lg ">
                        <a href="">
                            <i class="fas fa-laptop-medical  text-2xl px-2 text-white"></i>
                            <span class=" font-bold text-xl  text-white ">CÔNG SỞ THÔNG MINH</p>
                            </span>
                        </a>
                    </div>
                    <div class=" w-full mb-4 border-red-700 border-4 tn-content">
                        <div>
                            <ul class="">
                                <li class="pl-2 border border-t-0">
                                    <a href="/danh-muc/lich-cong-tac-tuan" class="flex py-2">
                                        <i class="fas fa-calendar-week text-4xl text-red-700 pr-2 pt-2"></i>
                                        <p class=" mt-3 pr-2 text-justify hover:text-red-700 ">
                                            LỊCH CÔNG TÁC
                                        </p>
                                    </a>
                                </li>
                                <li class="pl-2 border border-t-0">
                                    <a href="/danh-muc/dich-vu-cong" class="flex py-2">
                                        <i class="fas fa-user-tie text-4xl text-red-700 pr-2 pt-2"></i>
                                        <p class=" mt-3 pr-2 text-justify hover:text-red-700 ">
                                            MỘT CỬA ĐIỆN TỬ
                                        </p>
                                    </a>
                                </li>
                                <li class="pl-2 border border-t-0">
                                    <a href="/danh-muc/danh-ba" class="flex py-2">
                                        <i class="fas fa-portrait text-4xl text-red-700 pr-2 pt-2"></i>
                                        <p class=" mt-3 pr-2 text-justify hover:text-red-700 ">
                                            DANH BẠ KÌ ANH
                                        </p>
                                    </a>
                                </li>
                                <li class="pl-2 border border-t-0">
                                    <a href="/hoi-dap" class="flex py-2">
                                        <i class="fas fa-paste text-4xl text-red-700 pr-2 pt-2"></i>
                                        <p class=" mt-3 pr-2 text-justify hover:text-red-700 ">
                                            GIẢI ĐÁP THẮC MẮC
                                        </p>
                                    </a>
                                </li>
                                <li class="pl-2 ">
                                    <a href="/danh-muc/thong-tin-chi-dao-dieu-hanh" class="flex py-2">
                                        <i class="fas fa-file-alt text-4xl text-red-700 pr-2 pt-2"></i>
                                        <p class=" mt-3 pr-2 text-justify hover:text-red-700 ">
                                            TÀI LIỆU CÁC KỲ HỌP HĐND
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('content3')
<!--form truyền hình địa phương-->
<div class="sm:py-10 sm:px-10 sm:mb-5 sm:mt-0 -mt-10 px-2 py-2" style="background-color:#343434">
    <div class="grid grid-cols-12 mb-4 overflow-hidden ">
        <div class="sm:col-span-6 col-span-12 border-red-700 border-b-2">
            <a href="">
                <i class="fab fa-youtube text-xl text-white pr-2"></i>
                <span class=" font-bold text-xl  text-white  ">TRUYỀN HÌNH ĐỊA PHƯƠNG</p>
                </span>
            </a>
        </div>
        <div class="sm:col-span-6 col-span-12 sm:border-b-2 border-white">
        </div>
    </div>
    <div class="grid grid-cols-12">
        <div class=" sm:col-span-8 col-span-12 sm:pr-4">
            @if($truyenhinh)
            <iframe class="w-full vd-l sm:mt-2" src="https://www.youtube.com/embed/{{ $truyenhinh->link_youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <div class="vd-content-l overflow-hidden">
                <p class="sm:text-xl text-sm font-bold text-justify text-white "> {{ $truyenhinh->name }}</p>
                <i class="fas fa-eye text-red-700 sm:text-lg text-sm">
                    <span class="font-bold sm:text-lg text-sm text-white"> 123 </span>
                </i>
                <i class="far fa-comment-dots pl-4 text-red-700 sm:text-lg text-sm">
                    <span class="font-bold text-white sm:text-lg text-sm"> 57 </span>
                </i>
            </div>
            @endif
        </div>
        <div class="sm:col-span-4 col-span-12 sm:mt-0 -mt-5">
            <ul>
                @foreach($truyenhinh2 as $th2)
                <li>
                    <div class="grid grid-cols-12  border-white border-b border-dashed pb-1 ">
                        <div class="col-span-5 ">
                            <iframe class="w-full vd-s mt-2 " src="https://www.youtube.com/embed/{{ $th2->link_youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            </iframe>
                        </div>
                        <div class="col-span-7 ml-2">
                            <p class="vd-content-s overflow-hidden text-lg text-justify overflow-hidden">
                                <a href="" class="sm:text-sm text-xs text-white font-bold">
                                    {{ $th2->name }}
                                </a>

                            </p>

                        </div>
                    </div>
                </li>
                @endforeach



            </ul>

        </div>
    </div>
</div>
<!--form giáo dục - đào tạo-->
<div class="">
    <div class="grid grid-cols-12 mb-4 sm:mt-0 mt-4 overflow-hidden ">
        <div class="sm:col-span-5 col-span-12 border-red-700 border-b-2">
            <a href="/danh-muc/giao-duc-y-te">
                <i class="fas fa-book-reader sm:text-3xl text-xl text-red-700 pr-2 "></i>
                <span class=" font-bold sm:text-3xl text-xl  text-red-700  ">GIÁO DỤC - ĐÀO TẠO</p>
                </span>
            </a>
        </div>
        <div class="sm:col-span-7 col-span-12 sm:border-b-2 border-gray-400">
        </div>
    </div>


    <div class="grid grid-cols-12">

        <div class="sm:col-span-6 col-span-12 sm:mr-4">
            @if($noibat3)
            <div>
                <div class="gd-img-l overflow-hidden  ">
                    <a href="/chi-tiet/{{$noibat3->slug}}">
                        <img class="w-full" src="/storage/{{ $noibat3->thumbnail }}" alt=""></a>
                </div>

                <div class="gd-content-l overflow-hidden">
                    <p class="font-bold text-justify"><a href="/chi-tiet/{{$noibat3->slug}}" class="sm:text-xl text-base hover:text-red-700 ">{{ $noibat3->title }}</a></p>
                    <p class="text-gray-500 sm:text-base text-sm">Ngày đăng: 30/4/2021</p>
                    <p class="pt-2 sm:text-base text-sm text-justify">{{ $noibat3->excerpt }}</p>
                </div>
            </div>
            @endif
        </div>

        <div class="sm:col-span-6 col-span-12">
            <div class="grid grid-cols-12">
                <div class="col-span-6">
                    @foreach($noibat4 as $nb4)
                    <div class="mb-4">
                        <div class="gd-img-s overflow-hidden">
                            <a href="/chi-tiet/{{$nb4->slug}}"><img class="w-full" src="/storage/{{ $nb4->thumbnail }}" alt=""></a>
                        </div>
                        <div class="">
                            <p class="text-justify font-bold sm:text-base text-xs gd-content-s overflow-hidden"> <a href="/chi-tiet/{{$nb4->slug}}"> {{ $nb4->title }}</a></p>
                            <p class="text-gray-500 sm:text-base text-sm ">Ngày đăng: 30/4/2021</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-span-6 ml-4">
                    @foreach($noibat9 as $nb9)
                    <div class="mb-4">
                        <div class="gd-img-s overflow-hidden">
                            <img class="w-full" src="/storage/{{ $nb9->thumbnail }}" alt="">
                        </div>
                        <div class="">
                            <p class="text-justify sm:text-base text-xs gd-content-s overflow-hidden font-bold"> {{ $nb9->title }}</p>
                            <p class="text-gray-500 sm:test-base text-sm ">Ngày đăng: 30/4/2021</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<!--form thư viện ảnh-->
<div class="mt-6 sm:block hidden">
    <div class="grid grid-cols-12 my-4 overflow-hidden ">
        <div class="sm:col-span-5 col-span-12 border-red-700 border-b-2">
            <a href="">
                <i class="fas fa-images sm:text-3xl text-xl text-red-700 pr-2 "></i>
                <span class=" font-bold sm:text-3xl text-xl  text-red-700  ">THƯ VIỆN ẢNH</p>
                </span>
            </a>
        </div>
        <div class="sm:col-span-7 col-span-12 sm:border-b-2 border-gray-400">
        </div>
    </div>


    <div class="grid grid-cols-12">

        <div class=" sm:col-span-4 col-span-12 sm:block hidden">
            @foreach($thuvienanh as $tva)
            @if($tva->id % 2 == 0)
            <div class="tva-content-l text-xl text-gray-300 bg-gray-200 py-10 px-5 text-justify font-bold">
                {{ $tva->name }}
            </div>
            @else($tva->id % 2 == 1)
            <div class="tva-content-l text-xl text-gray-100 bg-gray-100 py-10 px-5 text-justify font-bold">
                {{ $tva->name }}
            </div>
            @endif
            @endforeach


        </div>
        <div class=" sm:col-span-8 " style="">
            <div class="slideshow-container">
                @foreach($thuvienanh as $tva)
                <div class="mySlides tva-img-l fade overflow-hidden">
                    <img class="w-full" src="/storage/{{ $tva->Anh }}">
                </div>
                @endforeach

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

        </div>

    </div>
    <div class="sm:grid grid-cols-12 mt-3 sm:block hidden">
        @foreach($thuvienanh1 as $tva1)
        <div class="col-span-3 pr-4">
            <div class="tva-img-s overflow-hidden">
                <img class="w-full" src="/storage/{{ $tva1->Anh }}" alt="">
            </div>
            <p class="tva-content-s text-justify"></p>
        </div>
        @endforeach
    </div>
</div>

<!--form nông thôn mới-->
<div class="">
    <div class="grid grid-cols-12 mb-4 overflow-hidden ">
        <div class="sm:col-span-5 col-span-12 border-red-700 border-b-2">
            <a href="">
                <i class="fas fa-atom sm:text-3xl text-xl text-red-700 pr-2 "></i>
                <span class=" font-bold sm:text-3xl text-xl  text-red-700  ">NÔNG THÔN MỚI</p>
                </span>
            </a>
        </div>
        <div class="sm:col-span-7 col-span-12 sm:border-b-2 border-gray-400">
        </div>
    </div>


    <div class="grid grid-cols-12 ">

        <div class="sm:col-span-6 col-span-12 sm:mr-4">
            @if($noibat5)
            <div class="gd-img-l overflow-hidden  ">
                <a href="/chi-tiet/{{$noibat5->slug}}">
                    <img class="w-full" src="/storage/{{ $noibat5->thumbnail }}" alt=""></a>
            </div>

            <div class="gd-content-l overflow-hidden">
                <p class="font-bold text-justify"><a href="/chi-tiet/{{$noibat5->slug}}" class="sm:text-xl text-base hover:text-red-700 ">{{ $noibat5->title }}</a></p>
                <p class="text-gray-500 sm:text-base text-sm">Ngày đăng: 30/4/2021</p>
                <p class="pt-2 text-justify sm:text-base text-sm">{{ $noibat5->excerpt }}</p>
            </div>
            @endif
        </div>

        <div class="sm:col-span-6 col-span-12 sm:mt-0 mt-4">
            <div class="grid grid-cols-12">
                <div class="col-span-6 ">
                    @foreach($noibat6 as $nb6)

                    <div class="mb-4">
                        <div class="gd-img-s overflow-hidden">
                            <a href="/chi-tiet/{{$nb6->slug}}"><img class="w-full h-full" src="/storage/{{ $nb6->thumbnail }}" alt=""></a>
                        </div>
                        <div class="">
                            <p class="text-justify font-bold sm:text-base text-xs gd-content-s overflow-hidden"><a href="/chi-tiet/{{$nb6->slug}}">{{ $nb6->excerpt }}</a></p>
                            <p class="text-gray-500  sm:text-base text-xs ">Ngày đăng: 30/4/2021</p>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="col-span-6 ml-4">
                    @foreach($noibat10 as $nb10)
                    <div class="mb-4">
                        <div class="gd-img-s overflow-hidden">
                            <img class="w-full h-full" src="/storage/{{ $nb10->thumbnail }}" alt="">
                        </div>
                        <div class="">
                            <p class="text-justify gd-content-s sm:text-base text-xs overflow-hidden font-bold">{{$nb10->title}}</p>
                            <p class="text-gray-500 sm:text-base text-xs ">Ngày đăng: 30/4/2021</p>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>

<!--form quốc phòng an ninh  + form tiềm năng cơ hôi-->
<div class="sm:mt-0 -mt-8">
    <div class="grid grid-cols-12 my-6">

        <!--form QPAN-->
        <div class="sm:col-span-6 col-span-12 sm:mr-4">
            <div class="grid grid-cols-12 my-4 overflow-hidden ">
                <div class="sm:col-span-7 col-span-12 border-red-700 border-b-2 ">
                    <a href="/danh-muc/an-ninh-quoc-phong">
                        <i class="far fa-star text-xl text-red-700 pr-2"></i>
                        <span class=" font-bold text-xl  text-red-700  ">QUỐC PHÒNG - AN NINH</p>
                        </span>
                    </a>
                </div>
                <div class="sm:col-span-5 col-span-12 sm:border-b-2 border-gray-400">
                </div>
            </div>
            @if($noibat)
            <div class="border-b border-gray-400 border-dashed ">
                <div class="gd-img-l overflow-hidden  ">
                    <a href="/chi-tiet/{{$noibat->slug}}">
                        <img class="w-full h-full" src="/storage/{{ $noibat->thumbnail }}" alt=""></a>
                </div>

                <div class="gd-content-l overflow-hidden">
                    <p class="font-bold text-justify"><a href="" class="sm:text-xl text-base hover:text-red-700 ">{{ $noibat->title }}
                        </a></p>
                    <p class="text-gray-500 sm:text-base text-sm">Ngày đăng: 30/4/2021</p>
                    <p class="pt-2 text-justify sm:text-base text-sm">{{ $noibat->excerpt }}</p>
                </div>
            </div>
            @endif
            <div class="grid grid-cols-12 mt-2">
                @foreach($noibat2 as $nb2)

                <div class="sm:col-span-4 col-span-12 sm:mt-0 mt-2 sm:mr-3">

                    <div class="qp-img-s overflow-hidden mb-1 ">
                        <a href="/chi-tiet/{{$nb2->slug}}">
                            <img class="w-full h-full" src="/storage/{{ $nb2->thumbnail }}" alt=""></a>
                    </div>

                    <div class="">
                        <p class="qp-content-s overflow-hidden font-bold text-xs text-justify"><a href="/chi-tiet/{{$nb2->slug}}" class="text-base hover:text-red-700 ">{{ $nb2->title }}
                            </a></p>
                        <p class="text-gray-500 text-xs">Ngày đăng: 30/4/2021</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <!--form TNCH-->
        <div class="sm:col-span-6 col-span-12">
            <div class="col-span-6">
                <div class="grid grid-cols-12 my-4 overflow-hidden ">
                    <div class="sm:col-span-8 col-span-12 border-red-700 border-b-2 ">
                        <a href="">
                            <i class="fas fa-chart-line sm:text-xl text-base text-red-700 pr-2 "></i>
                            <span class=" font-bold sm:text-xl text-base text-red-700  ">DI TÍCH LS - DL THẮNG CẢNH
                                </p>
                            </span>
                        </a>
                    </div>
                    <div class="sm:col-span-4 col-span-12 sm:border-b-2 border-gray-400">

                    </div>
                </div>
                @if($noibat7)
                <div class="border-b border-gray-400 border-dashed">
                    <div class="gd-img-l overflow-hidden  ">
                        <a href="/chi-tiet/{{$noibat7->slug}}">
                            <img class="w-full h-full" src="/storage/{{ $noibat7->thumbnail }}" alt=""></a>
                    </div>

                    <div class="gd-content-l overflow-hidden">
                        <p class="font-bold text-justify"><a href="/chi-tiet/{{$noibat7->slug}}" class="sm:text-xl text-base hover:text-red-700 ">{{ $noibat7->title }}
                            </a></p>
                        <p class="text-gray-500 sm:text-base text-sm">Ngày đăng: 30/4/2021</p>
                        <p class="pt-2 text-justify sm:text-base text-sm">{{ $noibat7->excerpt }}</p>
                    </div>
                </div>
                @endif
                <div class="grid grid-cols-12 mt-2">
                    @foreach($noibat8 as $nb8)

                    <div class="sm:col-span-4 col-span-12 sm:mt-0 mt-2 sm:pr-3">
                        <div class="qp-img-s overflow-hidden mb-1 ">
                            <a href="/chi-tiet/{{$nb8->slug}}">
                                <img class="w-full h-full" src="/storage/{{ $nb8->thumbnail }}" alt=""></a>
                        </div>

                        <div class="">
                            <p class="qp-content-s overflow-hidden font-bold text-xs text-justify"><a href="/chi-tiet/{{$nb8->slug}}" class="text-bold hover:text-red-700 ">{{ $nb8->title }}

                                </a></p>
                            <p class="text-gray-500 text-xs">Ngày đăng: 30/4/2021</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

</div>
<!-- 3 tab-->
<div class="w-full shadow-xl my-4 rounded-lg sm:block hidden">
    <div class="tab ">
        <button class="tablinks font-bold hover:text-white rounded-t-lg" onclick="openCity(event, 'tab-1')" id="defaultOpen"> XÃ</button>
        <button class="tablinks font-bold hover:text-white rounded-t-lg" onclick="openCity(event, 'tab-2')">SỞ - BAN - NGÀNH</button>
        <button class="tablinks font-bold hover:text-white rounded-t-lg" onclick="openCity(event, 'tab-3')">THÀNH PHỐ - HUYỆN - THỊ</button>
    </div>

    <div id="tab-1" class="tabcontent">
        <div class="grid grid-cols-12">
            <div class="sm:col-span-4 col-span-12 ">
                <div class="flex my-3">
                    <span class="ml-2">Xã Kỳ Phong</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Bắc</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Tiên</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Xuân</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Giang</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Khang</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Đồng</span>
                </div>
            </div>
            <div class="sm:col-span-4 col-span-12 ">
                <div class="flex my-3">
                    <span class="ml-2">Xã Kỳ Sơn</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Thượng</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Lạc</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Tây</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Trung</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Hợp</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Châu</span>
                </div>
            </div>
            <div class="sm:col-span-4 col-span-12 ">
                <div class="flex my-3">
                    <span class="ml-2">Xã Kỳ Phú</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Thọ</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Thư</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Văn</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Hải</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Xã Kỳ Châu</span>
                </div>

            </div>

        </div>
    </div>

    <div id="tab-2" class="tabcontent">
        <div class="grid grid-cols-12">
            <div class="sm:col-span-4 col-span-12 ">
                <div class="flex my-3">
                    <span class="ml-2">VP Đoàn ĐBQH & HĐND tỉnh</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Nông nghiệp và PTNT</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Y tế</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Nội vụ</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Thông tin và Truyền thông</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Xây dựng</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Trường Chính trị Trần phú</span>
                </div>
                <div class="flex my-3">
                    <span class="ml-2">Ban QL Khu KT tỉnh Hà Tĩnh</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Trường đại học Hà Tĩnh</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Bảo hiểm xã hội tỉnh</span>
                </div>
            </div>
            <div class="sm:col-span-4 col-span-12 ">
                <div class="flex my-3">
                    <span class="ml-2">Sở Kế hoạch và Đầu Tư</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Tài chính</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Giáo dục và Đào tạo</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Ngoại vụ</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Lao động - TBXH</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Ngân hàng Nhà nước</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Ban VSTBCPN tỉnh</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Cục thuế Hà Tĩnh</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Văn Phòng UBND Tỉnh</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Công an tỉnh Hà Tĩnh</span>
                </div>


            </div>
            <div class="sm:col-span-4 col-span-12 ">
                <div class="flex my-3">
                    <span class="ml-2">Sở Công thương</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở VH-TT-DL</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Khoa học và Công nghệ</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Tài nguyên và Môi trường</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Sở Tư pháp</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Cục Hải quanc</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Viện kiểm sát nhân dân</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Tòa án nhân dân tỉnh</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Ban chỉ đạo xây dựng NTM</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Thanh Tra Tỉnh</span>
                </div>


            </div>

        </div>
    </div>

    <div id="tab-3" class="tabcontent">
        <div class="grid grid-cols-12">
            <div class="sm:col-span-4 col-span-12 ">
                <div class="flex my-3">
                    <span class="ml-2">Thành Phố Hà Tĩnh</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Huyện Nghi Xuân</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Thị xã Kỳ Anh</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Thị Xã Hồng Lĩnh</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Huyện Kỳ Anh</span>
                </div>

            </div>
            <div class="sm:col-span-4 col-span-12 ">
                <div class="flex my-3">
                    <span class="ml-2">Huyện Cẩm Xuyên</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Huyện Hương Khê</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Huyện Thạch Hà</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Huyện Vũ Quang</span>
                </div>

            </div>
            <div class="sm:col-span-4 col-span-12 ">
                <div class="flex my-3">
                    <span class="ml-2">Huyện Can Lộc</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Huyện Lộc Hà</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Huyện Đức Thọ</span>
                </div>
                <div class="flex mb-3">
                    <span class="ml-2">Huyện Hương Sơn</span>
                </div>


            </div>

        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    var vm = new Vue({
        el: '#searchvanban',
        data: {

        },
        // chạy ngay khi web load
        mounted: function() {
            const self = this;

            axios.get('/van-ban-ldt')
                .then(function(response) {
                    self.dsvanban = response.data;
                });
        },
        // chạy khi thực hiện event
        methods: {
            search: function() {
                const self = this;

                axios.get('/ajax-van-ban?sovb=' + self.vanban +
                        "&tungay=" + self.tungay +
                        "&denngay=" + self.denngay +
                        "&cqbanhanh=" + self.cqbanhanh +
                        "&loaivb=" + self.loaivb +
                        "&idvb=" + self.idvb)
                    .then(function(response) {
                        self.dsvanban = response.data;
                    })
                console.log(self.id_vb);
            }
        }
    })
</script>

<script type="text/javascript">
    $(window).load(function() { //$(window).load() must be used instead of $(document).ready() because of Webkit compatibility				

        // News slider > Vertical
        $(".newslider-vertical").sliderkit({
            shownavitems: 10,
            verticalnav: true,
            navitemshover: true,
            circular: true
        });



    });
</script>
@endsection