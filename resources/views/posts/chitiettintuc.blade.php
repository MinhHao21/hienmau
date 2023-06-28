@extends('layout.trangchu')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://codepen.io/fancyapps/pen/Kxdwjj" />
<style>
    .fancybox-button svg {
        background: white;
    }

    button:focus {
        outline: none;
    }

    .images>p>span>img {
        margin-block-start: 1rem;
        margin-block-end: 1rem;
    }

    .images>p>img {
        margin-block-start: 1rem;
        margin-block-end: 1rem;
    }
</style>
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
                            <a href="/tin-tuc/{{$mn['slug']}}"> {{$mn['label']}}</a>
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

    <div class="sm:col-span-9 col-span-12 m-3 text-justify bg-white " style="border-top: 2px solid black; font-family: Cambria, Georgia, serif;">
        <div class="p-2 " style="border:1px solid #c7c7c7; font-family: Times New Roman, Times, serif; ">
            @if($baivietchitiet)
            <div class="flex justify-end ">
                <button id="btn-increase" class="mr-2 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-type">
                        <polyline points="4 7 4 4 20 4 20 7"></polyline>
                        <line x1="9" y1="20" x2="15" y2="20"></line>
                        <line x1="12" y1="4" x2="12" y2="20"></line>
                    </svg>
                </button>
                <button class="mr-2  mt-2 " id="btn-decrease">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-type">
                        <polyline points="4 7 4 4 20 4 20 7"></polyline>
                        <line x1="9" y1="20" x2="15" y2="20"></line>
                        <line x1="12" y1="4" x2="12" y2="20"></line>
                    </svg>
                </button>
                <button style="font-size:24px; color: #024fc3"><i class="mr-2 fa-brands fa-facebook-square"></i></button>
                <button><img class="w-6 mr-2" src="/images/message.png" alt=""></i></button>
                <button><img class="w-6 mr-2" src="/images/twitter.png" alt=""> </button>
                <button><img class="w-6 mr-2" src="/images/in.png" alt=""> </button>
                <button> <img class="w-6 mr-2" src="/images/pinterest.png" alt=""></button>
                <button> <img class="w-6" src="/images/email.png" alt=""></button>
            </div>
            <p class="font-bold text-3xl text-justify  text-gray-800 mt-2 leading-tight">{{ $baivietchitiet->title }}</p>

            <!-- <p class="mx-auto"><img src="/storage/{{ $baivietchitiet->thumbnail }}" alt="" class="w-full mx-auto"></p> -->
            <p class="text-gray-600 font-inclined text-lg text-justify mt-2 italic mt-2 leading-tight" style="font-size:19px;">
                {{ $baivietchitiet->excerpt }}
            </p>
            @if($baivietchitiet)

            <div class=" text-lg mt-2  px-auto text-justify images" style="font-size: 19px; line-height:30px">
                {!!$baivietchitiet->content!!}</div>
            @endif

            @endif
        </div>
        @foreach( $upload as $ul)
        @if( $ul->duoifile == 'jpg' || $ul->duoifile == 'png' )

        <img class="w-full mx-auto" src="/{{$ul->linkview}}" alt="">
        @elseif ( $ul->duoifile == 'pdf' || $ul->duoifile == 'PDF' )
        <a class="hidden xl:block mt-1" data-fancybox data-type="iframe" href="{{$ul->linkview}}" data-small-btn="true"
            data-iframe='{"preload":false}'>
            <div class="items-center mb-2 overflow-hidden">
                <img class="w-6 float-left "
                    src="https://iconarchive.com/download/i100036/iynque/flat-ios7-style-documents/pdf.ico" alt="">
                <span class="py-auto ml-4"> {{$ul->tenfile}}
            </div>
        </a>
        <!-- <a target="_blank" href="/{{$ul->linkview}}"><img class="w-6 float-left " src="https://iconarchive.com/download/i100036/iynque/flat-ios7-style-documents/pdf.ico" alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}}  </span></a> -->
        @elseif ( $ul->duoifile == 'doc' || $ul->duoifile == 'docx' )
        <a class="hidden xl:block mt-1" data-fancybox data-type="iframe" href="{{$ul->linkview}}" data-small-btn="true"
            data-iframe='{"preload":false}'>
            <div class="items-center mb-2 overflow-hidden">
                <img class="w-6 float-left "
                    src="https://banner2.cleanpng.com/20180425/hze/kisspng-microsoft-word-computer-icons-microsoft-office-5ae03fddba9b65.6523323015246458537644.jpg"
                    alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}}
            </div>
        </a>
        <!-- <a target="_blank" href="/{{$ul->linkview}}" ><img class="w-6 float-left " src="https://banner2.cleanpng.com/20180425/hze/kisspng-microsoft-word-computer-icons-microsoft-office-5ae03fddba9b65.6523323015246458537644.jpg" alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}} </span></a> -->
        @elseif ( $ul->duoifile == 'pptx' || $ul->duoifile == 'ppt' || $ul->duoifile == 'pps' )
        <a class="hidden xl:block mt-1" data-fancybox data-type="iframe" href="{{$ul->linkview}}" data-small-btn="true"
            data-iframe='{"preload":false}'>
            <div class="items-center mb-2 overflow-hidden">
                <img class="w-6 float-left "
                    src="https://banner2.cleanpng.com/20180205/wbq/kisspng-microsoft-powerpoint-microsoft-publisher-presentat-ms-powerpoint-transparent-background-5a78abcf270e40.63961649151785774316.jpg"
                    alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}}
            </div>
        </a>
        @elseif ( $ul->duoifile == 'xlsx' || $ul->duoifile == 'xls' )
        <a class="hidden xl:block mt-1" data-fancybox data-type="iframe" href="{{$ul->linkview}}" data-small-btn="true"
            data-iframe='{"preload":false}'>
            <div class="items-center mb-2 overflow-hidden">
                <img class="w-6 float-left "
                    src="https://banner2.cleanpng.com/20180205/wbq/kisspng-microsoft-powerpoint-microsoft-publisher-presentat-ms-powerpoint-transparent-background-5a78abcf270e40.63961649151785774316.jpg"
                    alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}}
            </div>
        </a>
        @elseif ( $ul->duoifile == 'rar' || $ul->duoifile == 'zip' || $ul->duoifile == 'zipx' || $ul->duoifile == '7z'
        || $ul->duoifile == 'bin' )
        <a class="hidden xl:block mt-1" href="/{{$ul->link}}">
            <div class="items-center mb-2 overflow-hidden">
                <img class="w-6 float-left "
                    src="https://media.istockphoto.com/vectors/file-folder-in-flat-on-white-background-vector-id1175215972?k=20&m=1175215972&s=612x612&w=0&h=feHYQZBtaj92l-rpFivkPFAHupJz3vEOWqkZ6DXPDNw="
                    alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}}
            </div>
        </a>
        <!-- <a target="_blank" href="/{{$ul->linkview}}" ><img class="w-6 float-left " src="https://banner2.cleanpng.com/20180205/wbq/kisspng-microsoft-powerpoint-microsoft-publisher-presentat-ms-powerpoint-transparent-background-5a78abcf270e40.63961649151785774316.jpg" alt=""> <span class="py-auto ml-4">{{$ul->tenfile}} </span></a> -->
        @else
            
        <video width="100%" loop muted autoplay>
            <source src="{{$ul->link}}" type="video/mp4">
            Your browser does not support HTML video.
        </video>
        @endif
        @endforeach
        <h3 class="mt-4 text-red-700" style="border-left:2px solid red;">&nbspTIN TỨC LIÊN QUAN</h3>
        <div class="p-2 mt-2" style="border:1px solid #c7c7c7;">
            @foreach($tinlienquan as $p)
            <div class="col-span-12 grid grid-cols-12 mb-4 mt-2 border-b-2" style="font-family: Times New Roman, Times, serif;">
                <div class="sm:col-span-2 col-span-12 mt-2 p2">


                    @if($p->thumbnail == null)
                    <img src="/images/noimg.jpg" alt="{{$p->title}}" id="imghot">
                    @else
                    <img src="/storage/{{ $p->thumbnail }}" alt="" class="w-full">
                    @endif
                </div>
                <div class="sm:col-span-10  col-span-12 pl-2 pt-2">
                    <div class="font-bold text-justify my-1 text-gray-800" style="">
                        <a href="/chi-tiet-tin-tuc/{{$p['slug']}}">
                            {{ $p->title }}
                        </a>
                    </div>
                    <div class="text-base  text-justify text-gray-800">
                        {{ $p->excerpt }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<script>
    var $affectedElements = $("p"); // Can be extended, ex. $("div, p, span.someClass")
    // Storing the original size in a data attribute so size can be reset
    $affectedElements.each(function() {
        var $this = $(this);
        $this.data("orig-size", $this.css("font-size"));
    });

    $("#btn-increase").click(function() {
        changeFontSize(1);
    })

    $("#btn-decrease").click(function() {
        changeFontSize(-1);
    })

    $("#btn-orig").click(function() {
        $affectedElements.each(function() {
            var $this = $(this);
            $this.css("font-size", $this.data("orig-size"));
        });
    })

    function changeFontSize(direction) {
        $affectedElements.each(function() {
            var $this = $(this);
            $this.css("font-size", parseInt($this.css("font-size")) + direction);
        });
    }
</script>
<script>
    $(document).ready(function() {
        $('.fancybox').fancybox({
            toolbar: false,
            smallBtn: true,
            iframe: {
                preload: false
            }
        })
        // Close current fancybox instance
        parent.jQuery.fancybox.getInstance().close();

        // Adjust iframe height according to the contents
        parent.jQuery.fancybox.getInstance().update();
    });
</script>
@endsection