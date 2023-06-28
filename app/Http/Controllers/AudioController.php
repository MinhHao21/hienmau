<?php

namespace App\Http\Controllers;

use App\Models\Danhmuc;
use App\Models\Audio;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    //
    public function chitiet($slug)
    {
        $chitiet = Audio::where('slug', $slug)->firstOrFail();
        # Lấy danh mục theo url truyền vào ở trên
        # Video cùng chuyên mục
        $audioKhac = Audio::where('danhmuc_id', $chitiet->danhmuc_id)->orderBy('id', 'desc')->limit(6)->get();

        $danhmuc = Danhmuc::where('id', $chitiet->danhmuc_id)->first();
        #Kiểm tra xem danh mục thuộc loại nào
        return view('audio.chitiet', [
            'chitiet' => $chitiet,
            'chuyenmuc' => $danhmuc,
            'audioKhac' => $audioKhac,
        ]);
    }
}

