@extends('layout.trangchu')
@section('content')
    <div>
        <div class="text-3xl border-b border-red-700 text-blue-800 mb-4">{{ $chuyenmuc->name }} </div>
            <div class="grid grid-cols-12">
                <!-- tác phẩm nổi bật -->
                <div class="grid grid-cols-12 col-span-12">
                    <div class="col-span-12">
                        TÁC PHẨM NỔI BẬT
                    </div>
                    <div class="col-span-4 mr-6">
                        <div class="shadow-lg">
                            <div class="hinhanh-img overflow-hidden">
                                <a href="index2.html">
                                    <img src="acsets/img/audio.PNG" alt="">

                                </a>

                            </div>
                            <p class="hinhanh-content font-bold text-yellow-800 text-justify">TIẾN QUÂN CA</p>
                            <p class="hinhanh-content font-medium text-justify"><audio src="acsets/audio/Tien-Quan-Ca-Quoc-Ca-Viet-Nam-Various-Artists.mp3" controls></audio></p>
                        </div>
                        <div class="mt-6 shadow-lg">
                            <div class="hinhanh-img overflow-hidden">
                                <a href="index2.html">
                                    <img src="acsets/img/audio.PNG" alt="">
                                </a>
                            </div>
                            <p class="hinhanh-content font-bold text-yellow-800 text-justify">TIẾN QUÂN CA</p>
                            <p class="hinhanh-content font-medium text-justify "><audio src="acsets/audio/Tien-Quan-Ca-Quoc-Ca-Viet-Nam-Various-Artists.mp3" controls></audio></p>
                        </div>

                    </div>
                    <div class="col-span-4 mr-6">
                        <div class="shadow-lg">
                            <div class="hinhanh-img overflow-hidden">
                                <a href="index2.html">
                                    <img src="acsets/img/audio.PNG" alt="">
                                </a>
                            </div>
                            <p class="hinhanh-content font-bold text-yellow-800 text-justify">TIẾN QUÂN CA</p>
                            <p class="hinhanh-content font-medium text-justify"><audio src="acsets/audio/Tien-Quan-Ca-Quoc-Ca-Viet-Nam-Various-Artists.mp3" controls></audio></p>
                        </div>
                        <div class="mt-6 shadow-lg">
                            <div class="hinhanh-img overflow-hidden">
                                <a href="index2.html">
                                    <img src="acsets/img/audio.PNG" alt="">
                                </a>
                            </div>
                            <p class="hinhanh-content font-bold text-yellow-800 text-justify">TIẾN QUÂN CA</p>
                            <p class=" hinhanh-content font-medium text-justify"><audio controls>
                                <source src="acsets/audio/Tien-Quan-Ca-Quoc-Ca-Viet-Nam-Various-Artists.mp3">
                            </audio></p>
                        </div>

                    </div>
                    <div class="col-span-4 mr-6">
                        <div class="shadow-lg">
                            <div class="hinhanh-img overflow-hidden">
                                <a href="index2.html" class="">
                                    <img src="acsets/img/audio.PNG" alt="">
                                </a>
                            </div>
                            <p class="hinhanh-content font-bold text-yellow-800 text-justify">TIẾN QUÂN CA</p>
                            <p class="hinhanh-content font-medium text-justify"><audio src="acsets/audio/Tien-Quan-Ca-Quoc-Ca-Viet-Nam-Various-Artists.mp3" controls></audio></p>

                        </div>
                        <div class="mt-6 shadow-lg">
                            <div class="hinhanh-img overflow-hidden">
                                <a href="index2.html">
                                    <img src="acsets/img/audio.PNG" alt="">
                                </a>
                            </div>
                            <p class="hinhanh-content font-bold text-yellow-800 text-justify">TIẾN QUÂN CA</p>
                            <p class="hinhanh-content font-medium text-justify"><audio src="acsets/audio/Tien-Quan-Ca-Quoc-Ca-Viet-Nam-Various-Artists.mp3" controls></audio></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection