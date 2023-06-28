<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class KyanhController extends Controller
{
    //

    public function trangchu()
    {
        $vidam = Post::where('danhmuc_id','==', 16 )->whereNotNull('noibat')->whereNotNull('published_at')->orderBy('id','desc')->take(3)->get();
        if( !$vidam){
        $vidam = Post::where('danhmuc_id','==', 16 )->whereNotNull('published_at')->take(3)->get();
        }
       return $vidam;
        return view('posts.trangchinh', [
            'vidam' => $vidam,
           ]);
    }
    public function gioithieu()
    {
        return view('posts.cocautochuc', [
        ]);
    }
    public function lienhe()
    {

        return view('posts.lienhe', [

        ]);
    }



}
