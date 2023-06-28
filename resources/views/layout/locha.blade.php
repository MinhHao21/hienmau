<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Đổ Menu -->
    <ul class="w-full flex bg-blue-600">
                    @foreach ( $danhmuc as $dm)
                    <li class="group  relative dropdown  px-2 text-white  cursor-pointer font-bold text-base uppercase p-2.5 ">
                        <a>{{$dm['label']}}</a>
                        <div class="group-hover:block dropdown-menu absolute hidden h-auto">
                            <ul class="top-0 w-64 bg-white shadow px-2 py-4">
                                @if ($dm['kiemtra']==1)
                                <li class="py-1">
                                    @foreach($dm['children'] as $cd)
                                    <a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">
                                        {{$cd['label']}}
                                    </a>
                                        @endforeach
                                </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                    @endforeach
        </ul>
    <!--  End Đổ menu -->
    <title>Cổng TTĐT Sở Tư Pháp Hà Tĩnh</title>
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

    <!-- owl carousel -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>

    <script src="/js/owlcarousel/owl.carousel.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> -->
    <script type="text/javascript" src="https://sites.google.com/site/iristipsblogger/file/hoamai-hoadao.js"></script>
    <!-- css -->
    <link href="/css/index.css" rel="stylesheet">
    <link href="/css/repon.css" rel="stylesheet">

    <!-- <style>
        .owl-item {
            height: 600px;
        }

        .item {
            height: 650px;
        }
    </style> -->

    <title>Lộc Hà </title>


    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
</head>

<body>
    <div class="main mx-auto" style="max-width: 1200px; ">
        <div class="header " style="height: 145px;">
            <div class="bg-header grid grid-cols-12 mx-auto">
                <img src="./images/Banner_TXHongLinh_10-2-2022_043558.jpg" alt="" class="col-span-12"
                    style="height: 100px;">
            </div>
            <!-- This is an example component -->
            <div class="mx-auto bg-blue-600 ">

              
            </div>

        </div>
        <div class="container grid grid-cols-12 mx-auto">
            <div class="sm:col-span-6 col-span-12">
                <img src="./images/ZK73SBgT6sQDlcoSdhCPMbqhBtX2J7POGtzucTRX.jpg" style="height: 355px;
                        width: -webkit-fill-available;"alt="">
            </div>
            <div class="sm:col-span-3 col-span-12 text-center border-2  sm:mt-0 mt-2 ml-2">
                <h2 class="border-b-2 block bg-sky-500 text-gray-100 text-xl">Tin Nổi Bật</h2>
                <ul class="list-news cursor-pointer sm:text-left text-left ">
                    <li class="mb-1">
                        <p class="hover:text-pink-700 p-1">- Ngành Tư pháp Hà Tĩnh đoàn kết, chủ động, sáng tạo, tích
                            cực thi đua hoàn thành tốt
                            các nhiệm vụ, góp phần phát triển kinh tế - xã hội trên địa bàn tỉnh
                        </p>
                    </li>
                    <li class="mb-1">
                        <p class="border-t-2 hover:text-pink-700 pointer p-1 ">- Hà Tĩnh - 10 sự kiện nổi bật năm 2022
                        </p>
                    </li>
                    <li class="mb-1">
                        <p class="border-t-2 hover:text-pink-700 pointer p-1">- Với 10 sự kiện nổi bật năm 2022 của
                            Ngành Tư pháp</p>

                    </li>
                    <li class="mb-1">
                        <p class="border-t-2 hover:text-pink-700 pointer p-1">- Lấy ý kiến Nhân dân về dự thảo báo cáo
                            kết quả xây dựng huyện nông thôn mới đến năm 2022</p>
                    </li>
                    <li class="mb-1">
                        <p class="border-t-2 hover:text-pink-700 pointer p-1">- Lan tỏa ngày hội đọc sách tại trường
                            Tiểu học Thịnh Lộc</p>
                    </li>
                    <li>

                    </li>
                </ul>
            </div>


            <div class="sm:col-span-3 col-span-12 text-center sm:ml-1 ml-0 border-2 sm:mt-0 mt-2">
                <h2 class="border-b-2 text-xl"
                    style="background: url(./images/tab-right.png),linear-gradient(#2282e2, #0f69c3);color: #ffffffd9;">
                    Thông Báo</h2>
            </div>

        </div>
        <div class="grid grid-cols-10 sm:pb-4 pb-2 pt-2 sm:cols-span-10">
            <div class="sm:col-span-2 col-span-5 sm:mr-2 ml-0 mr-0 sm:ml-0">
                <a href="http://vbpl.vn/Pages/portal.aspx"><img src="images/vanbanphapluat.jpg"
                        class="w-full h-full  border-2" alt="" style="max-height: 86px; ">
                </a>
            </div>
            <div class="sm:col-span-2 col-span-5 sm:mr-2 mr-0 ml-2 sm:ml-0">
                <a href="https://qppl.hatinh.gov.vn/"><img src="images/chucnang-2.jpg" class="w-full h-full border-2"
                        alt="" style="max-height: 86px; ">
                </a>
            </div>
            <div class="sm:col-span-2 col-span-5 sm:mr-2 mr-0 ml-2 sm:ml-0">
                <a href="https://dichvucong.hatinh.gov.vn/portaldvc/KenhTin/chi-tiet-thu-tuc.aspx?_nlv=STP"><img
                        src="images/chuyendoiso.png" class="w-full h-full border-2" alt="" style="max-height: 86px; ">
                </a>
            </div>
            <div class="sm:col-span-2 col-span-5 sm:mr-2 mr-0 ml-2 sm:ml-0 ">
                <a
                    href="https://dichvucong.hatinh.gov.vn/portaldvc/KenhTin/dich-vu-cong-truc-tuyen.aspx?_dv=578E3597-D1C6-FEA0-1671-D63152DA1967&amp;_tk="><img
                        src="images/thutuchanhchinh.jpg" class="w-full h-full border-2" alt=""
                        style="max-height: 86px; ">
                </a>
            </div>
            <div class="sm:col-span-2 col-span-5 sm:mr-2 mr-0 ml-2 sm:ml-0">
                <a href="danh-muc/chuyen-doi-so.html"><img src="images/dichvucongtructuyen.jpg"
                        class="w-full h-full border-2" alt="" style="max-height: 86px; ">
                </a>
            </div>
        </div>
        <div class="news grid grid-cols-12  mx-auto sm:px-2 px-3 sm:pt-3 pt-2">
            <div class="sm:col-span-9 col-span-12">
                <div class="div w-full bg-sky-500 border-2 text-center mb-2 col-span-12 flex">
                    <img src="./images/nhanuoc.png" alt="" style="height: 16px; margin: 4px;">
                    <p class="font-bold  text-gray-100 text-left ml-2 text-xl">Điều Hành Tác Nghiệp</p>
                </div>
                <div class="sm:col-span-3 col-span-12">

                    <div class="noibat cols-span-3 mx-auto fix-img">
                        <img src="./images/chihoiphunu.jpg" alt="">

                    </div>
                </div>
                <div class="sm:col-span-9 col-span-12 sm:pl-4 pl-0">
                    <h3 class="font-bold mb-2 hover:text-pink-700 cursor-pointer">Chi hội phụ nữ TDP Thuận Tiến ra quân
                        trồng cây hoa giấy và làm vệ sinh môi
                        trường</h3>
                    <p> Chiều ngày 17/9, Chi hội phụ nữ TDP Thuận Tiến đã ra quân trồng cây hoa giấy và làm vệ sinh môi
                        trường trên tuyến từ đường Thống Nhất đến trạm bơm TDP Thuận Tiến.
                    </p>
                </div>
                <div class="col-span-12 mt-3">
                    <ul class="pointer">
                        <div class="mb-3">
                            <i class="fa-solid fa-caret-right"></i>
                            <a href="" class="hover:text-pink-700 ">Hướng dẫn công tác phổ biến, giáo dục pháp luật quý
                                I/2023</a>
                        </div>
                        <div class="mb-3">
                            <i class="fa-solid fa-caret-right"></i>
                            <a href="" class="hover:text-pink-700 "> Hội nghị tập huấn Đại hội Công đoàn nhiệm kỳ 2023 -
                                2028 và một số nội dung cơ bản của Luật phổ biến giáo dục pháp luật </a>
                        </div>
                        <div class="mb-3">
                            <i class="fa-solid fa-caret-right"></i>
                            <a href="" class="hover:text-pink-700 "> Ra mắt tổ chuyển đối số cộng đồng điểm tại xã Mai
                                Phụ </a>
                        </div>
                        <div class="mb-3">
                            <i class="fa-solid fa-caret-right"></i>
                            <a href="" class="hover:text-pink-700 "> Hội nghị tập huấn Đại hội Công đoàn nhiệm kỳ 2023 -
                                2028 và một số nội dung cơ bản của Luật phổ biến giáo dục pháp luật </a>
                        </div>
                        <div class="mb-3">
                            <i class="fa-solid fa-caret-right"></i>
                            <a href="" class="hover:text-pink-700 "> Công nhận kết quả trúng tuyển viên chức đơn vị sự
                                nghiệp năm 2022 </a>
                        </div>
                    </ul>
                </div>

            </div>
            <div class="sm:col-span-3 col-span-12 sm:ml-3 ml-0 mb-2">
                <h2 class="border-b-2 text-center text-xl"
                    style="background: url(./images/tab-right.png),linear-gradient(#2282e2, #0f69c3);color: #ffffffd9;">
                    Bản đồ hành chính </h2>
                <iframe class="sm:col-span-3 col-span-12 w-full "
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121101.39672004388!2d105.79845187365953!3d18.46468658914131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3138498f85874361%3A0x86cf39e29b9076a4!2zTOG7mWMgSMOgLCBIw6AgVMSpbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1673507107829!5m2!1svi!2s"
                    height="325" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="news-banner grid grid-cols-12  mx-auto sm:px-2 px-3 sm:pt-3 pt-2">
            <div class="sm:col-span-9 col-span-12">
                <div class="div w-full bg-sky-500 border-2 text-center mb-2 col-span-12 flex">
                    <img src="./images/nhanuoc.png" alt="" style="height: 16px; margin: 4px;">
                    <p class="font-bold  text-gray-100 text-left ml-2 text-xl ">Tin Tức, Sự Kiện</p>
                </div>
                <div class="sm:col-span-3 col-span-12">
                    <div class="noibat  mx-auto fix-img">
                        <img src="./images/chihoiphunu.jpg" alt="">
                    </div>
                </div>
                <div class="sm:col-span-6 col-span-12 sm:pl-4 pl-0">
                    <h3 class="font-bold mb-2 hover:text-pink-700 cursor-pointer">Chi hội phụ nữ TDP Thuận Tiến ra quân
                        trồng cây hoa giấy và làm vệ sinh môi
                        trường</h3>
                    <p> Chiều ngày 17/9, Chi hội phụ nữ TDP Thuận Tiến đã ra quân trồng cây hoa giấy và làm vệ sinh môi
                        trường trên tuyến từ đường Thống Nhất đến trạm bơm TDP Thuận Tiến.
                    </p>
                </div>
            </div>
            <div class="sm:col-span-3 col-span-12 text-center sm:ml-3 ml-0 border-2 sm:mt-0 mt-2">
                <h2 class="border-b-2 text-center text-xl  "
                    style="background: url(./images/tab-right.png),linear-gradient(#2282e2, #0f69c3);color: #ffffffd9;">
                    Chỉ đạo điều hành
                </h2>
            </div>
            <div class="col-span-12 mt-3">
                <ul>
                    <div class="mb-3">
                        <i class="fa-solid fa-caret-right"></i>
                        <a href="" class="hover:text-pink-700">Hướng dẫn công tác phổ biến, giáo dục pháp luật quý
                            I/2023</a>
                    </div>
                    <div class="mb-3">
                        <i class="fa-solid fa-caret-right"></i>
                        <a href="" class="hover:text-pink-700"> Hội nghị tập huấn Đại hội Công đoàn nhiệm kỳ 2023 - 2028
                            và một số nội dung cơ bản của Luật phổ biến giáo dục pháp luật </a>
                    </div>
                    <div class="mb-3">
                        <i class="fa-solid fa-caret-right"></i>
                        <a href="" class="hover:text-pink-700"> Ra mắt tổ chuyển đối số cộng đồng điểm tại xã Mai Phụ
                        </a>
                    </div>
                    <div class="mb-3">
                        <i class="fa-solid fa-caret-right"></i>
                        <a href="" class="hover:text-pink-700"> Hội nghị tập huấn Đại hội Công đoàn nhiệm kỳ 2023 - 2028
                            và một số nội dung cơ bản của Luật phổ biến giáo dục pháp luật </a>
                    </div>
                    <div class="mb-3">
                        <i class="fa-solid fa-caret-right"></i>
                        <a href="" class="hover:text-pink-700"> Công nhận kết quả trúng tuyển viên chức đơn vị sự nghiệp
                            năm 2022 </a>
                    </div>
                </ul>
            </div>
        </div>
        <div class="unit   mx-auto sm:px-2 px-3 sm:pt-3 pt-2">
            <div class="div w-full bg-sky-500 border-2 text-center mb-2 col-span-9 flex">
                <img src="./images/nhanuoc.png" alt="" style="height: 16px; margin: 4px;">
                <p class="font-bold  text-gray-100 text-left ml-2 text-xl ">Đơn Vị Trực Thuộc </p>
            </div>
        </div>

                        <footer class="footer text-white mt-4 pl-2 py-8"
                            style="background-image: url(./public/images/footerbg.png); height:230px; background-size: cover;">
                            <div class=" mx-auto" style="max-width: 1002px; padding-left:300px">
                              
                                <div class="mb-4 sm:block hidden">
                                    <span class="mr-10 text-sm">Giới thiệu </span>
                                    <span class="mr-10 text-sm">Văn bản QPPL </span>
                                    <span class="mr-10 text-sm">Sở điện tử </span>
                                    <span class="mr-10 text-sm">Báo cáo </span>
                                    <span class="mr-10 text-sm">Hỏi đáp - Lấy ý kiến </span>
                                    <span class="mr-10 text-sm"><a href="so-do-website.html">Sơ Đồ Cổng</a> </span>
                                </div>
                                <div class="text-xl text-white" style="font-size: 15px; font: Arial 600;">
                                    CỔNG THÔNG TIN ĐIỆN TỬ SỞ TƯ PHÁP HÀ TĨNH
                                </div>
                                <div class="text-white mt-2" style="font-size: 15px; font: Arial 600;">
                                    Email: sotuphap@hatinh.gov.vn
                                </div>
                                <div class="text-white mt-2" style="font-size: 15px; font: Arial 600;">
                                    Địa chỉ: Số 92, đường Phan Đình Phùng, thành phố Hà Tĩnh, tỉnh Hà Tĩnh
                                </div>
                                <div class="text-white mt-2" style="font-size: 15px; font: Arial 600;">
                                    Điện thoại/ Fax: 0239.3856654
                                </div>
                    </div>
                </footer>
            </body>
            <script src="https://cdn.tailwindcss.com"></script>
            <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    </div>
    </footer>
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    function activeTab(element) {
        let siblings = element.parentNode.querySelectorAll("button");
        for (let item of siblings) {
            item.children[1].classList.add("hidden");
            item.classList.add("text-gray-600");
            item.classList.remove("text-indigo-700");
            item.children[0].children[1].innerHTML = "Inactive";
        }
        element.children[1].classList.remove("hidden");
        element.classList.remove("text-gray-600");
        element.classList.add("text-indigo-700");
        element.children[0].children[1].innerHTML = "Active";
    }
</script>


</html>