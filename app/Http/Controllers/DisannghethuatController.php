<?php

namespace App\Http\Controllers;

use App\Models\Danhmuc;
use App\Models\Disannghethuat;
use Illuminate\Http\Request;

class DisannghethuatController extends Controller
{
    //
    public function chitiet($slug)
    {
        $chitiet = Disannghethuat::where('slug', $slug)->firstOrFail();
        # Lấy danh mục theo url truyền vào ở trên
        # Video cùng chuyên mục
        $tacphamKhac = Disannghethuat::where('danhmuc_id', $chitiet->danhmuc_id)->orderBy('id', 'desc')->limit(6)->get();

        $danhmuc = Danhmuc::where('id', $chitiet->danhmuc_id)->first();
        #Kiểm tra xem danh mục thuộc loại nào
        return view('disannghethuat.chitiet', [
            'chitiet' => $chitiet,
            'chuyenmuc' => $danhmuc,
            'tacphamKhac' => $tacphamKhac,
        ]);
    }
}
