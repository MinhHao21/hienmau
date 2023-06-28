<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Widget;
use App\Models\Post;
use App\Models\GioithieuIndex;
use App\Models\Linhvuc;
use App\Models\BaiViet;

class ProPhuongnamController extends Controller
{
    public function index()
    {
        $menuHeader = nova_get_menu_by_slug('header');
        $menuFooter = nova_get_menu_by_slug('footer');

        $GTHeader = GioithieuIndex::all();

        $linhvuc = Linhvuc::all();

        $sliders = Slider::all(); //xuất ra mọi dữ liệu

        $widget2 = Widget::find(2); //gọi widget detail ID

        $widget3 = Widget::find(4);

        $intro = Widget::find(5);

        //return $menuHeader; hiện dữ liệu của biến

        return view('prophuongnam.index', [
            'menuHeader' => $menuHeader,
            'menuFooter' => $menuFooter,
            'gtheader' => $GTHeader,
            'linhvucs' => $linhvuc,
            'sliders' => $sliders,
            'widget2' => $widget2,
            'widget3' => $widget3,
            'intro' => $intro,
        ]);
    }

    public function gioithieu()
    {
        $menuHeader = nova_get_menu_by_slug('header');
        $menuFooter = nova_get_menu_by_slug('footer');
        $articles = Article::all();

        

        return view('prophuongnam.gioithieu', [
            'menuHeader' => $menuHeader,
            'menuFooter' => $menuFooter,
            'articles' => $articles,
        ]);
    }

    public function dichvu()
    {
        $menuHeader = nova_get_menu_by_slug('header');
        $menuFooter = nova_get_menu_by_slug('footer');
        $baiviets = BaiViet::all();

        return view('prophuongnam.dichvu', [
            'menuHeader' => $menuHeader,
            'menuFooter' => $menuFooter,
            'baiviets' => $baiviets,

        ]);
    }

    public function chitietbaiviet($id) 
    {
        $menuHeader = nova_get_menu_by_slug('header');
        $menuFooter = nova_get_menu_by_slug('footer');
        $baiviets = BaiViet::where('id', $id)->get();
        $baikhac = BaiViet::orderBy('id', 'desc')->take(5)->get();

        return view('prophuongnam.baichitiet', [
            'menuHeader' => $menuHeader,
            'menuFooter' => $menuFooter,
            'baiviets' => $baiviets,
            'baikhacs' => $baikhac,

        ]);
    }

    public function lienhe()
    {
        $menuHeader = nova_get_menu_by_slug('header');
        $menuFooter = nova_get_menu_by_slug('footer');
        $ars = Article::all();

        return view('prophuongnam.lienhe', [
            'menuHeader' => $menuHeader,
            'menuFooter' => $menuFooter,
            'test' => $ars,
        ]);
    }
}
