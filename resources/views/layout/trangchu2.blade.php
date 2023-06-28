<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huyện Kỳ Anh</title>
    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!-- font-google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">
    <!-- taiwind css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css"
        integrity="sha512-wl80ucxCRpLkfaCnbM88y4AxnutbGk327762eM9E/rRTvY/ZGAHWMZrYUq66VQBYMIYDFpDdJAOGSLyIPHZ2IQ=="
        crossorigin="anonymous" />





    <!-- owl carousel
    <link rel="stylesheet" href="/css/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owlcarousel/assets/owl.theme.default.min.css">-->
    <!-- css -->
    <link href="/css/index.css" rel="stylesheet">
    <link href="/css/sliderkit-core.css" rel="stylesheet">
    <link href="/css/sliderkit-demos.css" rel="stylesheet">


    <!-- <script src="/js/owlcarousel/owl.carousel.min.js"></script> -->
    <script type="text/javascript" src="/js/jquery-1.3.min.js"></script>
    <script type="text/javascript" src="/js/jquery.sliderkit.1.9.2.pack.js"></script>

    <style>
    .owl-item {
        height: 600px;
    }

    .item {
        height: 650px;
    }
    </style>

</head>

<body class="bg-gray-100  w-full mx-auto">

    <header>

        <div class="grid grid-cols-12 pb-1 px-2 shadow-xl">
            <div class="sm:col-span-2 col-span-12 font-bold text-gray-700 flex items-center pt-1">
                <i class="far fa-clock sm:px-2 pr-2 text-gray-600"></i>
                <span class="text-gray-600">
                    Thứ 7, Ngày 05/01/2021 </span>
            </div>
            <div class="sm:col-span-8 col-span-12   sm:px-4">
                <div class="sm:float-right pt-2 font-bold"><a href="" class="sm:pr-4">
                        <i class="far fa-envelope-open text-red-600 text-center pr-1"></i>
                        Email
                    </a> |
                    <a href="" class="px-4">
                        <i class="fas fa-user-alt text-blue-500 "></i>
                        Đăng nhập
                    </a>
                </div>

            </div>
            <div class="sm:col-span-2 col-span-12 border border-blue-600 mt-1 rounded-full">
                <!--Form tìm kiếm-->
                <div class="w-full items-center flex">


                    <div class="  w-full  px-2 ">
                        <input type="text" name="name" id="name" placeholder="Tìm kiếm..."
                            class="input-search pr-4 text-xs bg-gray-100 " />

                    </div>
                    <button type="submit " class="icon-search">
                        <i class="fas fa-search text-blue-500 text-xl"></i>
                    </button>

                </div>
            </div>
        </div>
        <div class="banner w-full mx-auto ">
            <!-- form menu -->
            <div class="ddmenu w-full mb-4 mx-auto " id='menu'>
                <div>
                    <nav class=" rounded-t-lg mx-auto sm:block hidden " style="z-index: 100;">
                        <ul class="menu rounded-t-lg ">
                            <li><a href="#" title="Trang chủ"><i class="fas fa-home text-white"></i></a></li>

                            @foreach($danhmuc as $dm)
                            <li><a href="#" title="Giới thiệu" class="font-bold">{{$dm->name}}</a>
                                <ul class="border border-gray-600 shadow-lg ">

                                    @foreach($gioithieu as $gt)
                                    @if($dm->id == $gt->danhmuc_id)
                                    @if($gt->loaibaiviet == 'baiviet')
                                    <li><a href="/danh-muc/{{$gt->slug}}" title=""
                                            class="text-black hover:text-red-900 hover:bg-gray-200 font-bold">
                                            {{$gt->tendm}}</a></li>
                                    @else
                                    <li><a href="/van-ban/{{$gt->slug}}" title=""
                                            class="text-black hover:text-red-900 hover:bg-gray-200 font-bold">
                                            {{$gt->tendm}}</a></li>
                                    @endif
                                    @endif
                                    @endforeach

                                </ul>
                            </li>
                            @endforeach
                            <li><a href="/hoi-dap" title="Hỏi đáp" class="font-bold">Hỏi đáp</a></li>
                            <li><a href="/lien-he" title="Liên hệ" class="font-bold">Liên hệ</a></li>
                            <li><a href="/so-do-website" title="Hỏi đáp" class="font-bold">Sơ đồ website</a></li>



                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="bd-content mt-4 ">

        <!----------------- past 1---------------------->
        <div class="grid grid-cols-12 shadow-xl mx-2">
            <div class="sm:col-span-9 col-span-12  sm:pl-0 sm:mr-4 ">
                @yield('content')
            </div>

            <!-- Cột 3 - thông báo + thống kê-->
            <div class="sm:col-span-3 col-span-12 sm:block hidden">
                <div class="w-full">

                    <!--form thông báo-->
                    <div class="mb-4">
                        <div class="bg-red-700  rounded-t-lg  border-b-2  py-3 px-2 rounded-t-lg"
                            style="width: 100%; height: 54px;">
                            <a href="">
                                <i class="fas fa-bullhorn text-xl px-2 text-white"></i>
                                <span class=" font-bold text-lg  text-white ">THÔNG BÁO</p>
                                </span>
                            </a>
                        </div>
                        <div class="bg-gray-200 rounded-b-lg " style="height: 250px;">
                            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up"
                                height="250px">
                                <ul>
                                    @foreach($thongbao as $tb)
                                    <li class="border-gray-400 border-dashed border-b mx-3 py-2 text-sm">{{$tb->title}}
                                    </li>

                                    @endforeach
                                </ul>
                            </marquee>
                        </div>
                    </div>

                    <!-- form thgnvb-->
                    <div class="w-full shadow-lg my-2 rounded-lg py-2">
                        <div class="">
                            <p style="font-size : 17px !important;"
                                class=" text-blue-800 text-lg font-bold w-full rounded-t-lg  border-b-2 border-yellow-600 text-center rounded-t-lg">
                                TỔNG HỢP GỬI NHẬN VĂN BẢN
                            </p>
                        </div>
                        <div class=" col-span-12 text-center mt-2 text-xl px-2 font-bold">
                            <span> Đến tháng 4 UBND huyện Kỳ Anh đã nhận </span>
                        </div>
                        <div class=" col-span-12 text-center text-red-700 mt-1 text-4xl font-black">
                            1420
                        </div>
                        <div class=" col-span-12 text-center text-xs font-bold ">
                            Văn bản
                        </div>
                        <div class=" col-span-12 text-center text-xs font-bold mt-2">
                            ( Tự động cập nhật vào 00:00 ngày 25/4/2021 )
                        </div>
                    </div>

                    <!-- form gqgnvb -->
                    <div class="w-full shadow-lg my-4 rounded-lg py-2">
                        <div class="">
                            <p style="font-size : 17px !important;"
                                class=" text-blue-800 text-lg font-bold w-full rounded-t-lg  border-b-2 border-yellow-600 text-center rounded-t-lg">
                                GIẢI QUYẾT GỬI NHẬN VĂN BẢN
                            </p>
                        </div>
                        <div class=" col-span-12 text-center mt-2 text-xl px-2 font-bold">
                            <span> Đến tháng 4 UBND huyện Kỳ Anh đã xử lý </span>
                        </div>
                        <div class=" col-span-12 text-center text-red-700 mt-2 text-4xl font-black">
                            120
                        </div>
                        <div class=" col-span-12 text-center text-xs font-bold ">
                            Văn bản
                        </div>
                        <div class=" col-span-12 text-center text-xs font-bold mt-2">
                            ( Tự động cập nhật vào 00:00 ngày 25/4/2021 )
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content2')



        <!------------------------ past 3----------------------------------->
        <div class="grid grid-cols-12 shadow-xl p-2 sm:mb-8 mb-2">
            <div class="sm:col-span-9 col-span-12  sm:pl-0 sm:mr-4 ">

                <!--form truyền hình địa phương-->

                @yield('content3')

            </div>


            <!-- Cột 3 -->
            <div class="sm:col-span-3 col-span-12 sm:block hidden">
                <div class="w-full">
                    <div>
                        <a href="https://hccka.hatinh.gov.vn/portaldvc/Home/default.aspx">
                            <img class="w-full pb-4" src="http://kyanh.hanhchinhcong.vn/portal/ImageAds/DVC_104336.jpg"
                                alt="">
                        </a>
                    </div>

                    <!--form bản đồ-->
                    <div>
                        <div class="bg-red-700  rounded-t-lg  border-b-2  py-3 px-2 rounded-t-lg sm:block hidden">
                            <a href="">
                                <i class="fas fa-file-contract text-2xl px-2 text-white"></i>
                                <span class=" font-bold text-xl  text-white ">BẢN ĐỒ KỲ ANH</p>
                                </span>
                            </a>
                        </div>
                        <div class="map border-4 border-red-700">
                            <iframe class="w-full h-full"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30344.518581505938!2d106.28325084653116!3d18.068553619114546!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313889b7a885295d%3A0xf652f6b3d760e166!2zdHQuIEvhu7MgQW5oLCBL4buzIEFuaCwgSMOgIFTEqW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1620311865702!5m2!1svi!2sus"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                    </div>

                    <!-- form hình ảnh liên kết-->
                    <div>
                        @foreach($anhtt as $att)
                        <img class="w-full my-3" src="/storage/{{ $att->Anh }}" alt="">
                        @endforeach

                    </div>

                    <!--form kiên kết website-->
                    <div class="w-full py-4 ">
                        <div class="bg-red-700  rounded-t-lg  border-b-2  py-3 px-2 rounded-t-lg sm:block hidden">
                            <a href="">
                                <i class="fas fa-globe text-2xl px-2 text-white"></i>
                                <span class=" font-bold text-xl  text-white ">LIÊN KẾT WEBSITE</p>
                                </span>
                            </a>
                        </div>
                        <div class="border-red-700 border">
                            <select class="w-full text-xl ml-7  my-5 border border-yellow-600" style="width: 80%;">
                                <option value="">-- Liên kết nhanh --</option>
                                <option value="">Trang TTĐT Đại biểu nhân dân tỉnh Hà Tĩnh</option>
                                <option value="">Nông thôn mới tỉnh Hà Tĩnh</option>
                                <option value="">Công an tỉnh Hà Tĩnh</option>
                            </select>
                        </div>
                    </div>

                    <!--form số lượng truy cập-->
                    <div class="w-full py-4 ">
                        <div class="bg-red-700  rounded-t-lg  border-b-2  py-3 px-2 rounded-t-lg sm:block hidden">
                            <a href="">
                                <i class="fas fa-globe text-2xl px-2 text-white"></i>
                                <span class=" font-bold text-xl  text-white ">SỐ LƯỢNG TRUY CẬP</p>
                                </span>
                            </a>
                        </div>
                        <div class="border-red-700 border bg-gray-400">
                            <div class="grid grid-cols-12">
                                <div class="col-span-6 px-8 py-4">
                                    <p class="text-xl font-bold text-white"> Thống kê </p>
                                    <p class="text-2xl text-red-700 font-bold"> 1365</p>
                                </div>
                                <div class="col-span-6 px-8 py-4">
                                    <p class="text-xl font-bold text-white"> Online </p>
                                    <p class="text-2xl text-red-700 font-bold">12</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!--Form footer-->
        <footer class="mt-0 -mt-8">
            <div class="relative">
                <img src="https://www.pngkit.com/png/detail/433-4336452_blue-header-design-png-header-and-footer-design.png"
                    alt="" class="sm:block hidden" width="100% " style="height: 200px;">
                <img src="../images/footer-2.png" class="sm:hidden block" alt="">
                <div class="absolute sm:px-24 px-7 mt-3" style="top: 10px;">
                    <h2 class="sm:text-2xl text-xl font-bold text-gray-700">© CỔNG THÔNG TIN ĐIỆN TỬ <span
                            class="text-blue-600 sm:text-2xl text-lg sm:px-0 px-4">
                            HUYỆN KỲ ANH - TỈNH HÀ TĨNH </span></h2>
                    <p class="text-gray-700 pl-5 sm:block hidden">Cơ quan chủ quản: Ủy ban nhân dân huyện Kỳ Anh <br>
                        Địa chỉ: Xã Kỳ Đồng, huyện Kỳ Anh, tỉnh Hà Tĩnh <br>
                        Chịu trách nhiệm chính: Dương Thị Vân Anh - Phó Chủ tịch UBND huyện Kỳ Anh
                    </p>
                </div>
                <div class="flex flex-justify-beetwen absolute" style="top: 140px; right: 50px;">
                    <div class="float-right text-white sm:text-base text-sm">
                        Điện thoại: 02393965678 <br>
                        Email: ubkyanh@hatinh.gov.vn
                    </div>
                    <div class="float-right">
                        <i class="fas fa-phone-alt text-white text-2xl"></i>
                        <i class="far fa-envelope-open text-white text-2xl px-4"></i>
                        <i class="fab fa-facebook text-white text-2xl"></i>
                    </div>
                </div>
            </div>
        </footer>



        <script type="text/javascript">
        $(window).load(
        function() { //$(window).load() must be used instead of $(document).ready() because of Webkit compatibility				

            // News slider > Vertical
            $(".newslider-vertical").sliderkit({
                shownavitems: 6,
                verticalnav: true,
                navitemshover: true,
                circular: true
            });
        });
        </script>
        <!-- <script type="text/javascript">
			$(window).load(function(){ //$(window).load() must be used instead of $(document).ready() because of Webkit compatibility				
	
				// News slider > Vertical
				$(".newslider-vertical").sliderkit({
					shownavitems:10,
					verticalnav:true,
					navitemshover:true,
					circular:true
				});
				
				// News slider > Horizontal
			
		</script> -->


        <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>


        <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
</body>

</html>