@extends('layout.layoutchinh')
@section('content')
<div class="my-3 text-justify bg-white">
    <div class="grid grid-cols-12">
        
    </div>
    @if($chitiet)
    <p class="font-bold text-3xl text-justify ">{{ $chitiet->title }}</p>
    <div class="text-gray-600 font-bold font-inclined text-lg text-justify mt-2">{{ $chitiet->excerpt }}</div>
    <div>
    <img class="mt-2" src="/storage/baonoi.png"  alt="">
    </div>
        <p><img src="/storage/{{ $chitiet->thumbnail }}" alt="" class="w-full"></p>
        <p class=" text-lg mt-2  px-auto text-justify" >{!! $chitiet->content !!}</p>     
        @endif
</div>

@endsection