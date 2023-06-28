<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */


    public function boot()
    {   
        Paginator::useBootstrap();
        
        $baiviet_id = DB::table('post_tag')->where('tag_id', 84)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $thongbao = Post::orderBy('id', 'desc')->whereIn('id', $arr)->take(5)->get();
        
        // Thông báo đấu giá id = 144
        $baiviet_id = DB::table('post_tag')->where('tag_id', 144)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $thongbaodaugia = Post::orderBy('id', 'desc')->whereIn('id', $arr)->take(5)->get();
        $datas = getDanhmuc(null);
        $menuleft = getDanhmuc(0,1);
        $a = mv_test();
        // $danhmuc = Category::all();
        // $gioithieu = danhmuccon::all();
        // $anhtt = Anhtt::orderBy('id','desc')->take(10)->get();
        View::share('danhmuc',  $datas);
        View::share('menuleft',  $menuleft);
        View::share('thongbao',  $thongbao);
        View::share('thongbaodaugia',  $thongbaodaugia);
    }
}
