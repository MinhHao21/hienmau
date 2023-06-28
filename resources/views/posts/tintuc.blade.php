@extends('layout.trangchu')
@section('content')
@if($getdanhmuc)
<div class="text-lg border-b border-red-700 font-bold mb-4 pt-3 sm:px-0 px-2" style="">
    <span class=" text-blue-600"><a href="/"><i class="fa fa-home text-blue-600"></i></a> > </span> <span class="danhmuc-text"> {{ $getdanhmuc->name }} </span>
</div>
@endif

<div class="grid grid-cols-12">
    <div class="sm:col-span-3 sm:block hidden col-span-3 text-white mt-2">
        <h2 class="border-b-2 text-sm text-white rounded-sm" style="background-image:url(/images/bg-red.jpg); height:30px;">
            <span id="clock" class="relative top-1">Thứ 4, Ngày 1/3/2023 10:21:14 AM</span>
        </h2>
        <script type="text/javascript">
            /*<![CDATA[*/
            function refrClock() {
                var i = new Date();
                var n = i.getSeconds();
                var e = i.getMinutes();
                var f = i.getHours();
                var k = i.getDay();
                var c = i.getDate();
                var g = i.getMonth();
                var j = i.getFullYear();
                var l = new Array("Chủ nhật", "Thứ hai", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");
                var b = new Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
                var a;
                if (n < 10) {
                    n = "0" + n
                }
                if (e < 10) {
                    e = "0" + e
                }
                if (f > 12) {
                    f -= 12;
                    AM_PM = "PM"
                } else {
                    AM_PM = "AM"
                }
                if (f < 10) {
                    f = "0" + f
                }
                document.getElementById("clock").innerHTML = l[k] + ", Ngày " + c + "/" + b[g] + "/" + j + " " + f + ":" + e + ":" + n + " " + AM_PM;
                setTimeout("refrClock()", 1000)
            }
            refrClock(); /*]]>*/
        </script>
        <div id="menu">
            @foreach($menuleft as $mnl)
            <div class="uldoc mx-auto bg-blue-600 hover:bg-blue-500" style=" width:100%; list-style-type: none; text-align: left;">
                <div class="lidoc font-bold grid grid-cols-12" style="text-transform: uppercase; font-size: 12px; position: relative; border-bottom: 1px solid #e8e8e8; padding: 8px 3px; color: #fff;">
                    <div class="col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 ">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="col-span-10">
                        <a href="/tin-tuc/{{$mnl['slug']}}" class="text-white font-bold">{{$mnl['label']}}</a>
                    </div>

                    <div class="sub-menu uldoc bg-blue-600" style="font-size: 11px;">
                        @foreach($mnl['children'] as $mn)
                        <div class="lidoc font-bold" style="font-size: 11px;">
                            <a href="/tin-tuc/{{$mn['slug']}}">
                                {{$mn['label']}}
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="grid grid-cols-12">
            <div class="sm:col-span-12 col-span-12">
                <ul class="fix-bn-right sm:block hidden">
                    <li class="rounded-sm pb-2"><a href=""><img style="width:300px;" src="../images/vanphongdientu.png" alt=""></a></li>
                    <li class="rounded-sm pb-2"><a href=""><img style="width:300px;" src="../images/bn-left-2.png" alt=""></a></li>
                    <li class="rounded-sm pb-2"><a href=""><img style="width:300px;" src="../images/bn-left-3.jpg" alt=""></a></li>
                    <li class="rounded-sm pb-2"><a href=""><img style="width:300px;" src="../images/bn-left-4.png" alt=""></a></li>
                    <li class="rounded-sm pb-2"><a href=""><img style="width:300px;" src="../images/bn-left-5.png" alt=""></a></li>

                </ul>
            </div>

            <div class="sm:col-span-12 col-span-12 text-center border-2 sm:mt-0 mt-2 sm:block hidden">
                <h2 class="border-b-2 text-center text-xl text-white rounded-sm " style="background: url(./images/tab-right.png),linear-gradient(#2282e2, #0f69c3);">
                    Thư Viện Âm Nhạc
                </h2>
                <div>
                    <div style="border: 1px solid #C7C7C7;" class="p-2">
                        <iframe width="100%" class="bttpht" src="https://www.youtube.com/embed/ia8HYgGF_1g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sm:col-span-9 col-span-12 sm:ml-3 mx-3">

        @foreach($allbaiviet as $abv)
        <div class="grid grid-cols-12 my-2 bg-white p-4" style="border: 1px solid gray">
            <div class="col-span-3">
                <div>
                @if($abv->thumbnail == null)
                    <img src="/images/noimg.jpg" alt="{{$abv->title}}" id="imghot">
                    @else
                    <img src="/storage/{{ $abv->thumbnail }}" alt="">
                @endif
                </div>
            </div>
            <div class="col-span-8 ml-4">
                <div class="col-span-12 text-justify ">
                    <a href="/chi-tiet-tin-tuc/{{$abv['slug']}}">
                        <p class="sm:text-lg text-base text-gray-700 font-bold mb-4" style="color: #000;">
                            {{ $abv->title }}
                        </p>
                    </a>
                </div>
                @if($abv->published_at)
                <div class="col-span-12">
                    <p class="text-gray-500 sm:text-base text-sm"><i class="fas fa-calendar-alt"></i>
                        {{$abv->published_at->format('d/m/Y')}}
                    </p>
                </div>
                @endif

            </div>
        </div>
        @endforeach
        <div class="NA">
            {{$allbaiviet->links('pagination::default')}}
            <!-- {{ $allbaiviet->links('vendor.pagination.default') }} -->
        </div>
    </div>

</div>
@endsection