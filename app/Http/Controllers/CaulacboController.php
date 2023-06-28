<?php

namespace App\Http\Controllers;

use App\Models\Caulacbo;
use App\Models\Video;
use App\Models\Post;
use App\Models\Audio;
use Illuminate\Http\Request;

class CaulacboController extends Controller
{
    //
    public function chitietdisan($slug)
    {
        $chitiet = Caulacbo::where('slug', $slug)->firstOrFail();
        $dsVideo = Video::where('caulacbo',$chitiet->id)->orderBy('id','desc')->take(3)->get();
        $dsAudio = Audio::where('caulacbo',$chitiet->id)->orderBy('id','desc')->take(3)->get();
        $dsTintucngang = Post::where('caulacbo_id',$chitiet->id)->orderBy('id','desc')->take(5)->get();
        $arr = array();
        foreach($dsTintucngang as $ds){
            array_push($arr,$ds->id );
        }
        $dsTintuccot = Post::where('caulacbo_id',$chitiet->id)->whereNotIn('id',$arr)->orderBy('id','desc')->take(3)->get();
       
        return view('caulacbo.caulacbo', [
            'chitiet' => $chitiet,
            'dsVideo' => $dsVideo, 
            'dsTintucngang' => $dsTintucngang,  
            'dsTintuccot' => $dsTintuccot,  
            'dsAudio' => $dsAudio,  
        ]);
    }
}
