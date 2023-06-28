<?php

namespace App\Http\Controllers;

use App\Models\Danhmuc;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function chitiet($slug)
    {
        $chitiet = Video::where('slug', $slug)->firstOrFail();
        # Lấy danh mục theo url truyền vào ở trên
        # Video cùng chuyên mục
        $videoKhac = Video::where('danhmuc_id', $chitiet->danhmuc_id)->orderBy('id', 'desc')->limit(6)->get();

        $danhmuc = Danhmuc::where('id', $chitiet->danhmuc_id)->first();
        #Kiểm tra xem danh mục thuộc loại nào
        return view('video.chitiet', [
            'chitiet' => $chitiet,
            'chuyenmuc' => $danhmuc,
            'videoKhac' => $videoKhac,
        ]);
    }
}
