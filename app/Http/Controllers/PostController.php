<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Danhmuc;
use App\Models\Thuvienanh;

use Illuminate\Http\Request;
use App\Models\Disannghethuat;
use App\Models\Fileupload;
use App\Models\Loaidanhmuc;
use Laravel\Nova\Fields\Image;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostController\list1;

class PostController extends Controller
{


    public function trangchulocha()
    {

        $laybainoibat = Post::where('noibat', 1)->get();
        $baivietnoibat = Post::where('noibat', 1)->first();
        // return $baivietnoibat;
        $tinnoibat = Post::where('danhmuc_id', 0)->take(6)->get();
        $arrs = [];
        foreach ($laybainoibat as $nb) {
            $arrs[] = $nb->id;
        }
        $tintucsukiennoibat = Post::where('danhmuc_id', 47084)->where('noibat', '=', 1)->orderBy('id', 'desc')->first();
        // return $tintucsukiennoibat;
        $tintucsukien = Post::where('danhmuc_id', 47084)->orderby('id', 'asc')->take(5)->get();
        // danhmuc_id = 47084;
        // return $tintucsukien;   
        $arr = [];
        foreach ($tinnoibat as $nb) {
            $arr[]  = $nb->id;
        }
        $dieuhanhtacnghiep = Post::whereNotIn('id', $arr)->take(4)->get();
        //return $listdieuhanhtacnghiep;
        // $bigimg = Post::where()
        $chidaodieuhanh = Post::where('danhmuc_id', 54535)->take(5)->get();
        // danhmuc_id = 545345;
        //return $chidaodieuhanh;
        $xaydungdangnb = Post::where('danhmuc_id', 47085)->where('noibat', '=', 1)->first();
        $xaydungdang = Post::where('danhmuc_id', 47085)->orderBy('id', 'desc')->take(4)->get();
        //return $tinnoibat;

        $vanhoaxhnb = Post::where('danhmuc_id', 47086)->where('noibat', '=', 1)->first();
        $vanhoaxh = Post::where('danhmuc_id', 47086)->orderBy('id', 'desc')->take(4)->get();

        $quocphongnb = Post::where('danhmuc_id', 47087)->where('noibat', '=', 1)->first();
        $quocphong = Post::where('danhmuc_id', 47087)->orderBy('id', 'desc')->take(4)->get();

        // Chính quyền : Danhmuc_id = 288955, 
        // Ngân sách .. Danhmuc_id = 531447 , Doanh Nghiệp... 408417 ,   Thủ tục hành chính .. 3960220
        //Công Dân .. 305245 , Giới Thiệu ... 3960225
        //return $menucha;
        return view('posts.home', [
            'tinnoibat' => $tinnoibat,
            'dieuhanhtacnghiep' => $dieuhanhtacnghiep,

            'tintucsukien' => $tintucsukien,
            'baivietnoibat' => $baivietnoibat,

            'tintucsukiennoibat' => $tintucsukiennoibat,
            'chidaodieuhanh' => $chidaodieuhanh,

            'xaydungdangnb' => $xaydungdangnb,
            'xaydungdang' => $xaydungdang,

            'vanhoaxhnb' => $vanhoaxhnb,
            'vanhoaxh' => $vanhoaxh,

            'quocphongnb' => $quocphongnb,
            'quocphong' => $quocphong,

        ]);
    }


    public function tintuc($slug)
    {

        $getdanhmuc = Danhmuc::where('slug', $slug)->first();

        $allbaiviet = Post::orderBy('id', 'desc')->take(10)->where('published_at', '!=', null);
        $danhmuc = $getdanhmuc->id;
        if ($danhmuc) {
            $allbaiviet = $allbaiviet->where(function ($query) use ($danhmuc) {
                $query->where('danhmuc_id', 'like', '%[' .  $danhmuc . '%')
                    ->orWhere('danhmuc_id', 'like', '%, ' .  $danhmuc . ',%')
                    ->orWhere('danhmuc_id', 'like', '%, ' .  $danhmuc . ']%');
            });
        }
        $allbaiviet = $allbaiviet->paginate(10);
        return view('posts.tintuc', [
            'getdanhmuc' => $getdanhmuc,
            'allbaiviet' => $allbaiviet,

        ]);
    }

    public function chitiettintuc($slug)
    {
        $baivietchitiet = Post::where('slug', $slug)->firstOrFail();

        $tinlienquan = Post::where('danhmuc_id', $baivietchitiet->danhmuc_id)->orderBy('id', 'desc')->limit(6)->get();

        $getdanhmuc = Danhmuc::where('id', $baivietchitiet->danhmuc_id)->first();

        $upload = Fileupload::where('idtruong', $baivietchitiet->id)->get();
        $danhmuc = Danhmuc::where('id', $baivietchitiet->danhmuc_id)->first();

        // // return $baivietchitiet;
        // return  $baivietchitiet;
        return view('posts.chitiettintuc', [
            'baivietchitiet' => $baivietchitiet,
            'getdanhmuc' => $getdanhmuc,
            'tinlienquan' => $tinlienquan,
            'upload' => $upload,
            'chuyenmuc' => $danhmuc,

        ]);
    }



    public function timkiem()
    {
        return view('posts.timkiem', []);
    }

    public function searchPost(Request $request)
    {
        // $chuyenmuc = Loaidanhmuc::where('danhmuc_id', $request->loaivb)->get();
        //return $request->chuyenmuc_id;$request->chuyenmuc_id
        $post = Post::orderBy('id', 'desc');
        if ($request->searchName) {
            $post =  $post->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->searchName . '%')
                    ->orWhere('title', 'like', $request->searchName . '%')
                    ->orWhere('title', 'like', '%' . $request->searchName);
            });
        }

        $post = $post->where('danhmuc_id', '=', 0)->take(7)->get();
        return $post;
    }

    public function updateData(Request $request)
    {
        // return $request->id;
        // $post = Post::find('id', $request->id)->first();
        $post = Post::where('id', $request->id)->first();

        // return $post;
        $post->danhmuc_id = $request->danhmuc;
        $post->save();

        return $request->danhmuc;
    }



    public function danhmuc($table)
    {

        $info = DB::table($table)->orderBy('id', 'desc')->get();

        return $info;
    }


    public function listPost()
    {
        $baiviet_id = DB::table('post_tag')->where('tag_id', 0)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $post = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(6)->get();
        // foreach ($post as $pt) {
        //     $pt->title = self::catchuoi($pt->title, 16) . "...";
        // }
        return  $post;
    }

    public function list()
    {

        $danhmuc = Danhmuc::where('danhmuc_id', 0)->get();

        $datas = array();
        foreach ($danhmuc as $dm) {
            $t = array();
            $t['id'] = $dm->id;
            $t['label'] = $dm->name;
            $t['slug'] = $dm->slug;
            $t['loaidanhmuc_id'] = $dm->loaidanhmuc_id;
            $t['children'] = [];
            $t['kiemtra'] = 0;
            $t['menuduoi'] = 0;

            $dem = Danhmuc::where('danhmuc_id', $dm->id)->count();
            if ($dem > 0) {
                $t['children'] = $this->list1($dm->id);
                $t['kiemtra'] = 1;
            }
            array_push($datas, $t);
        }
        return $datas;
    }

    public function list1($id)
    {
        $danhmuc = Danhmuc::where('danhmuc_id', $id)->get();

        $datas = array();
        foreach ($danhmuc as $dm) {
            $t = array();
            $t['id'] = $dm->id;
            $t['label'] = $dm->name;
            $t['slug'] = $dm->slug;
            $t['loaidanhmuc_id'] = $dm->loaidanhmuc_id;
            $t['children'] = [];
            $t['kiemtra'] = 0;
            $t['menuduoi'] = 0;
            $dem = Danhmuc::where('danhmuc_id', $dm->id)->count();
            if ($dem > 0) {
                $t['children'] = $this->list1($dm->id);
                $t['kiemtra'] = 1;
            } else

                array_push($datas, $t);
        }
        return $datas;
    }
}
