@extends('layout.layoutchinh')
@section('content')
<div class="set-web mx-auto sm:col-span-9 col-span-12">
    <div class="text-3xl border-b border-red-700 text-blue-800 mb-4">{{ $chuyenmuc->name }} </div>
    <main class="grid grid-cols-12">
        @foreach($posts as $p)
        <div class="col-span-12">
            <div class="grid grid-cols-12 my-2 pb-4">
                <div class="col-span-12 lg:col-span-4">
                    <div class="dsdisan-img-l rounded-xl">
                        <a href="/chi-tiet-tin-tuc/{{$p['slug']}}">
                            <img class="w-full" src="{{ $p->thumbnail }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8 lg:text-justify lg:ml-5">
                    <a href="/chi-tiet-tin-tuc/{{$p['slug']}}">
                        <p class="text-lg text-gray-700 hover:text-blue-700 font-bold mb-4">{{ $p->title }}</p>
                    </a>
                    <!-- <p class="mb-0">Ngày đăng: 23/12/2021</p>
                        <p class="mt-3">Sáng tác: Công Vinh | Thể hiện: Công Vinh </p> -->
                    <p class="mt-1">{{ $p->excerpt }}</p>
                </div>
            </div>
            @endforeach
            <div>
                {{ $posts->links() }}
            </div>
        </div>
    </main>
</div>
@endsection