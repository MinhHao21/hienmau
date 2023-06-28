<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\thongtinnguoihien;
use Illuminate\Http\Request;

class ThongtinhienmauController extends Controller
{
    public function trangchu()
    {
        $dangkyhienmau = thongtinnguoihien::all();

        return view('posts.home', [
            
            'dangkyhienmau' => $dangkyhienmau,
        ]);
    }


    public function dangkyhienmau()
    {
        $dangkyhienmau = thongtinnguoihien::all();
        return $dangkyhienmau;
        
    }

    public function dangkyhienmauview()
    {
        $dangkyhienmau = thongtinnguoihien::all();
        
        return view('posts.dangkyhienmau', [

            'dangkyhienmau' => $dangkyhienmau,
        ]);
    }

    public function phanhoi(Request $request)
    {

        $thongtinphanhoi = new thongtinnguoihien();
        $thongtinphanhoi->hoten = $request->input('hoten');
        $thongtinphanhoi->email = $request->input('email');
        $thongtinphanhoi->namsinh = $request->input('namsinh');
        $thongtinphanhoi->dienthoai = $request->input('dienthoai');
        $thongtinphanhoi->gioitinh = $request->input('gioitinh');
        $thongtinphanhoi->cccd = $request->input('cccd');
        $thongtinphanhoi->nhommau = $request->input('nhommau');

        
        $thongtinphanhoi->save();

        return redirect('/dang-ky')->with('status', 'Đăng ký thành công');
    }
}
