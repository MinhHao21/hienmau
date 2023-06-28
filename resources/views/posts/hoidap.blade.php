@extends('layout.layoutchinh')
@section('content')
<div>
    <div class="w-full pt-3 sm:px-0 px-2">

        <div class="w-full pt-2 pb-2">

            <h3 class="w-full font-bold mb-3 text-lg uppercase">hỏi đáp</h3>
            <div class="w-full">
                <p class="text-base w-full font-bold text-blue-600 pb-3 border-b-2 border-gray-200">Gửi câu hỏi đến cho
                    chúng tôi</p>


                @if(session('message'))
                <div id="alertSuc" class="thongbao-tc absolute alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300">
                    <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                        <span class="text-green-500">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="alert-content ml-4">
                        <div class="alert-title font-semibold text-lg text-green-800">
                            Thành công
                        </div>
                        <div class="alert-description text-sm text-green-600">
                            {{ session('message') }}
                        </div>
                    </div>
                </div>
                @endif


                <form action="{{ route('posts.luuhd')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <p class="mb-4 mt-3 italic text-base">
                        Những mục đánh dấu <span class="text-red-500">(*)</span> là những nội dung bắt buộc nhập
                    </p>
                    <div class="grid grid-cols-12">
                        <div class="col-span-6 sm:pr-2 mb-6">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 flex items-center">
                                    <p class="text-base text-gray-600 font-bold">Họ tên: <span class="text-red-500">(*)</span></p>
                                </div>
                                <div class="col-span-8">
                                    <input id="hotenhd" name="hotenhd" class="w-full px-3 py-1 rounded-lg bg-gray-200 border-2 border-gray-300 focus:outline-none focus:border-blue-300" required placeholder="Nhập họ tên ..." type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:pl-2 mb-6">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 flex items-center">
                                    <p class="text-base text-gray-600 font-bold">Địa chỉ:</p>
                                </div>
                                <div class="col-span-8">
                                    <input id="diachihd" name="diachihd" class="w-full px-3 py-1 rounded-lg bg-gray-200 border-2 border-gray-300 focus:outline-none focus:border-blue-300" placeholder="Nhập địa chỉ ..." type="text">
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-span-6 sm:pr-2 mb-6">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 flex items-center">
                                    <p class="text-base text-gray-600 font-bold">Số điện thoại: </p>
                                </div>
                                <div class="col-span-8">
                                    <input id="sdthd" name="sdthd" class="w-full px-3 py-1 rounded-lg bg-gray-200 border-2 border-gray-300 focus:outline-none focus:border-blue-300" placeholder="Nhập SĐT ..." type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:pl-2 mb-6">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4 flex items-center">
                                    <p class="text-base text-gray-600 font-bold">Email: <span class="text-red-500">(*)</span></p>
                                </div>
                                <div class="col-span-8">
                                    <input id="emailhd" name="emailhd" class="w-full px-3 py-1 rounded-lg bg-gray-200 border-2 border-gray-300 focus:outline-none focus:border-blue-300" placeholder="Nhập Email ..." type="email" required>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-span-12 mb-6">
                            <div class="grid grid-cols-10">
                                <div class="col-span-2">
                                    <p class="text-base text-gray-600 font-bold">Nội dung câu hỏi <span class="text-red-500">(*)</span></p>
                                </div>
                                <div class="col-span-8">
                                    <textarea id="noidunghd" name="noidunghd" class="w-full px-3 py-1 rounded-lg bg-gray-200 border-2 border-gray-300 focus:outline-none focus:border-blue-300" name="" id="" rows="6" placeholder="Nhập nội dung ..." required></textarea>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <div class="w-full text-right">
                        <button type="submit" class="ml-auto px-3 py-1 rounded-lg text-lg text-white transition bg-red-500 hover:bg-red-600">
                            GỬI CÂU HỎI
                        </button>
                    </div>
                </form>
            </div>
        </div>

       <!-- danh sach câu hỏi -->
    <div class="w-full mt-8">
        <div class=" w-full py-2">
            @foreach ($dscauhoi as $dsch)
            <div class="w-full mb-6 pb-4 sm:pr-2 border-b-2 border-gray-500 border-dashed">
                <div class="mt-3 mb-4 w-full">
                    {!! $dsch->Noidungcauhoi !!}
                    <div class="w-full text-right">
                        <p class="font-bold text-base">
                            <span class="font-medium">Người gửi: </span>
                            {{$dsch->Hoten}}
                        </p>
                    </div>
                </div>
                <div class="w-full">
                    <p class="text-justify text-base text-left">
                        {!! $dsch->cautralloi !!}
                    </p>
                    <div class="w-full mt-3 text-left">
                        <p class="text-sm font-bold">
                            <span class="font-medium text-sm">Đơn vị trả lời: </span>
                            {{$dsch->nguoitraloi}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <!-- end danh sách câu hỏi -->
    </div>
</div>
<script>
    $(function() {
        setTimeout(function() {
            $("#alertSuc").fadeOut(1500);
        }, 2000)
    })
    </script>
@endsection