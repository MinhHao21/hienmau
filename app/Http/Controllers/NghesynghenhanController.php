<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Danhmuc;
use App\Models\Diaban;
use App\Models\Nghesynghenhan;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class NghesynghenhanController extends Controller
{
    //
    public function chitiet($slug)
    {
        $chitiet = Nghesynghenhan::where('slug', $slug)->firstOrFail();
        if($chitiet->danhmuc_id == 22){
            $chucDanh = 'nghệ sỹ';
        }else{
            $chucDanh = 'nghệ nhân';
        }
        # Lấy danh mục theo url truyền vào ở trên
        $ngheSykhac = Nghesynghenhan::where('danhmuc_id', $chitiet->danhmuc_id)->orderBy('id', 'desc')->limit(4)->get();

        # Tin tức viết về nghệ nhân, nghệ sỹ
        # Lấy tạm ra 4 tin tức để giàn css sau này thay đổi lại câu query
        #$tinTucs = Post::where('nghesynghenhan_id', $chitiet->id)->orderBy('id', 'desc')->limit(4)->get();
        $tinTucs = Post::orderBy('id', 'desc')->limit(6)->get();

        # Video sáng tác
        # Lấy tạm ra 4 video để giàn css sau này thay đổi lại câu query
        #$tinTucs = Video::where('nghesynghenhan', $chitiet->id)->orderBy('id', 'desc')->limit(4)->get();
        $videos = Video::where('sangtac', $chitiet->id)->orderBy('id', 'desc')->limit(4)->get();
       
        # audio sáng tác
        # Lấy tạm ra 4 audio để giàn css sau này thay đổi lại câu query
        #$tinTucs = Audio::where('nghesynghenhan', $chitiet->id)->orderBy('id', 'desc')->limit(4)->get();
        $audios = Audio::where('sangtac', $chitiet->id)->orderBy('id', 'desc')->limit(4)->get();

        $danhmuc = Danhmuc::where('id', $chitiet->danhmuc_id)->first();
        #Kiểm tra xem danh mục thuộc loại nào
        return view('nghesy.chitiet', [
            'chitiet' => $chitiet,
            'chuyenmuc' => $danhmuc,
            'ngheSykhac' => $ngheSykhac,
            'tinTucs' => $tinTucs,
            'videos' => $videos,
            'audios' => $audios,
            'chucDanh' => $chucDanh,
        ]);
    }

    public function reloadNghenhan(Request $request){
        $khuVuc = $request->khuVuc;
        $searchName = $request->searchName;
        $page = $request->trang;
        $sodong = 10;
        $batdau = ($page - 1) * $sodong;
        $slug = $request->slug;
        $danhmuc = Danhmuc::where('slug',$slug)->first();
        $nameDanhmuc = $danhmuc->name;
        $ngheNhan = Nghesynghenhan::where('danhmuc_id',$danhmuc->id)->orderBy('id','desc');
 
        $dsNghenhan = $ngheNhan->offset($batdau)->limit($sodong)->get();
        if($khuVuc){
            $dsNghenhan = $ngheNhan->where('diaban_id',$khuVuc )->offset($batdau)->limit($sodong)->get();
   }
        if ($searchName) {
            $dsNghenhan = $ngheNhan->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->searchName . '%')
                    ->orWhere('name', 'like', $request->searchName . '%')
                    ->orWhere('name', 'like', '%' . $request->searchName);
            });
            $dsNghenhan = $dsNghenhan->offset($batdau)->limit($sodong)->get();

        }
        foreach($dsNghenhan as $ds){
            // $ds->namsinh->format('d/m/Y');
            $ds->nam = $ds->namsinh->format('Y');
        }
        $sobanghi = $ngheNhan->count();
        $sotrang = ceil($sobanghi / $sodong);
        return [
            'dsNghenhan' => $dsNghenhan,
            'sobanghi' => $sobanghi,
            'sotrang' => $sotrang,
            'nameDanhmuc' => $nameDanhmuc,
        ];
    }

    public function getDiaban(){
        $diaBan = Diaban::get();
        return $diaBan;
    }
}
