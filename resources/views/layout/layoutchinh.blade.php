<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cổng TTĐT Sở Tư Pháp Hà Tĩnh</title>
    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!-- font-google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;600;700&display=swap" rel="stylesheet">

    <!--bulma  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <!-- taiwind css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css"
        integrity="sha512-wl80ucxCRpLkfaCnbM88y4AxnutbGk327762eM9E/rRTvY/ZGAHWMZrYUq66VQBYMIYDFpDdJAOGSLyIPHZ2IQ=="
        crossorigin="anonymous" />
    <!-- owl carousel-->
    <link rel="stylesheet" href="/css/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owlcarousel/assets/owl.theme.default.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Fotorama from CDNJS, 19 KB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

    <!-- css -->
    <link href="/css/index.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/kyanh.js">

</head>

<body class=" w-full mx-auto  shadow-xl" style="background-color: #a7cdd3;">
    <div class="bg-white">
        <header>



            <div class="banner w-full mx-auto ">
                <div class="">
                    <img src="/images/banner-so-yu-phap-xhuan.png" alt="" style="width: 100%;">
                </div>
                <!-- form menu -->
                <!-- <div class="ddmenu w-full mb-4 mx-auto sm:block hidden" id='menu'>
                
            </div> -->

                <!-- menu mobile -->

                <div class="sidebar w-full mb-4 mx-auto ddmenu text-white flex lg:justify-center sm:flex justify-end "
                    id='menu'>
                    <nav>
                        <ul>
                            <li><a href="/" class="text-white font-bold">
                                    <i class="fas fa-home"></i>
                                </a></li>
                            @foreach ($danhmuc as $dm)
                            <li>
                                <a href="/danh-muc/{{$dm['slug']}}" class="text-white font-bold">{{$dm['label']}}</a>
                                @if ($dm['kiemtra']==1)
                                @include('layout.childmobile', ['danhmuc' => $dm['children']])
                                @endif
                            </li>
                            @endforeach
                        </ul>
                        <div class="icon">
                            <i class="fas fa-bars"></i>
                        </div>
                    </nav>
                </div>
            </div>
    </div>
    </header>

    <div class="bd-content mt-4 bg-white">
        <!------------------------ past 3----------------------------------->
        <div class="grid grid-cols-12 shadow-xl sm:p-0 sm:m-0 lg:p-2 set-web lg:mx-auto">
            <div class=" col-span-12 sm:pl-0 sm:mr-4 grid grid-cols-12 ">
                @yield('content')
                <div class="lg:col-span-3 col-span-12 lg:block hidden">
                    <div class="border-2 border-gray-100 ">
                        <div class="text-blue-600 text-center bg-gray-100 mt-1" style="color:rgba(2, 57, 119, 0.8);">
                            <p class="mb-2 font-bold text-xl text-blue-600 py-2"
                                style="color:rgba(2, 57, 119, 0.8); border-top: 2px solid rgba(2, 57, 119, 0.8);">THÔNG
                                BÁO
                            </p>
                        </div>
                        <div class="">
                            <div class="">
                                <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2"
                                    direction="up" height="250px">
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
                    <div>
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
                    </div>


                </div>
            </div>
            <!-- Cột 3 -->

        </div>
        <!--Form footer-->

        <footer class="footer text-white mt-4 pl-2 pt-8 pb-2" style="background-color:#215bac;">
            <div class=" mx-auto">
                <div class="font-bold text-xl text-white">
                    CỔNG THÔNG TIN ĐIỆN TỬ SỞ TƯ PHÁP HÀ TĨNH
                </div>
                <div class="text-white">
                    Email: sotuphap@hatinh.gov.vn - Website: http://dancaxunghe.vn - fanpge: dancaxunghe.vn
                </div>
                <div class="text-white">
                    Địa chỉ: Số 92, đường Phan Đình Phùng, thành phố Hà Tĩnh, tỉnh Hà Tĩnh
                </div>
                <div class="text-white">
                    Điện thoại/ Fax: 0239.3856654
                </div>
                <div class="text-white">
                    Ghi rõ nguồn Cổng thông tin điện tử Sở Tư pháp (http://tuphap.hatinh.gov.vn/) khi trích dẫn lại tin
                    từ địa chỉ này.
                </div>
            </div>
        </footer>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/js/owlcarousel/owl.carousel.min.js"></script>

        <script>
        document.addEventListener("DOMContentLoaded", function() {
            var nut = document.querySelector('div.icon i');
            var mobile = document.querySelector('ul');
            nut.addEventListener('click', function() {
                mobile.classList.toggle('active');
            })
        })
        </script>

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
    </div>
    <script type="text/javascript" src="./js/hoamai-hoadao.js"></script>

</body>

</html>