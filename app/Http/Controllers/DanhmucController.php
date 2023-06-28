<?php

namespace App\Http\Controllers;

use App\Models\Danhmuc;
use App\Models\Post;
use App\Models\Nghesynghenhan;
use App\Models\Caulacbo;
use App\Models\Document;
use App\Models\Video;
use App\Models\Audio;
use App\Models\Disannghethuat;
use App\Models\Fileupload;
use App\Models\Phongban;
use App\Models\Tacpham;
use App\Models\Thuvienanh;
use App\Models\Tochuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DanhmucController extends Controller
{
    public function xoadau($text)
    {
        $text = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $text);
        $text = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $text);
        $text = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $text);
        $text = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $text);
        $text = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $text);
        $text = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $text);
        $text = preg_replace("/(đ)/", 'd', $text);
        $text = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $text);
        $text = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $text);
        $text = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $text);
        $text = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $text);
        $text = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $text);
        $text = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $text);
        $text = preg_replace("/(Đ)/", 'D', $text);
        $text = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $text);
        $text = preg_replace("/()/", '', $text);
        return $text;
    }
    public function check()
    {
        $response = Http::get('http://127.0.0.1:8888/cms/v1/testdocument123');
        foreach ($response['data'] as $dt) {
            $danhmuc = new Danhmuc();
            $danhmuc->name =  $dt['name'];
            if ($dt['parentid'] != 0) {
                foreach ($response['data'] as $dt1) {
                    if ($dt1['id'] == $dt['parentid']) {
                        $danhmuc->danhmuc_id =  $dt1['name'];
                    }
                }
            }
            $slug = str_replace(' ', '-', DanhmucController::xoadau($danhmuc->name));
            $danhmuc->slug = $slug;
            $danhmuc->loaidanhmuc_id =  $dt['type'];
            $danhmuc->hienthi =  1;
            if (Danhmuc::where('slug', $slug)->count() == 0) {
                $danhmuc->save();
            }
        }
        $danhmuc1 = Danhmuc::all();
        foreach ($danhmuc1 as $dm) {
            if ($dm->danhmuc_id) {
                $cha = Danhmuc::where('name', $dm->danhmuc_id)->first();
                $dm->danhmuc_id = $cha->id;
                $dm->save();
            }
        }
    }
    public function checkpost()
    {
      
    }
    public function danhmuc($slug)
    {
        # Lấy danh mục theo url truyền vào ở trên
        $danhmuc = Danhmuc::where('slug', $slug)->first();
        $baiviet_id = DB::table('post_tag')->where('tag_id', $danhmuc->id)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        #Kiểm tra xem danh mục thuộc loại nào
        # 1: tin tức , 2: Hình ảnh, 3: Audio, 4: Video, 5: văn bản
        // Cơ cấu bộ máy tổ chức
        if ($danhmuc->loaidanhmuc_id == 1) {
            $cChitiet = 'chi-tiet-tin-tuc';
            # kiểm tra nếu có danh mục con thì select theo danh mục con
            #return getDanhmucid('');
            $posts = Post::orderBy('id', 'desc')->whereIn('id',  $arr)->paginate(10);
            return view('posts.danhmuc', [
                'posts' => $posts,
                'chuyenmuc' => $danhmuc,
                'cChitiet' => $cChitiet,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 2) {
            $cChitiet = 'van-ban';
            $posts = Document::orderBy('id', 'desc')->where('danhmuc_id', $danhmuc->id)->paginate(10);
            return view('posts.vanban', [
                'dsvanban' => $posts,
                'chuyenmuc' => $danhmuc,
                'cChitiet' => $cChitiet,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 3) {
            $cChitiet = 'chi-tiet-video';
            $posts = Video::orderBy('id', 'desc')->paginate(10);
            $danhsachvideo = [];
            foreach($posts as $p)
            {
                $chuoi = explode(".", $p->linkyoutube);
                if($chuoi[1] == 'mp4')
                {
                    $danhsachvideo[] = $p;
                }               
            }
            return view('video.danhsach', [
                'posts' => $danhsachvideo,
                'chuyenmuc' => $danhmuc,
                'cChitiet' => $cChitiet,
            ]);
        }
        
        // if ($danhmuc->loaidanhmuc_id == 5) {
        //     $cChitiet = 'chi-tiet-audio';
        //     $posts = Audio::where('danhmuc_id', $danhmuc->id)->orderBy('id', 'desc')->paginate(10);
        //     return view('audio.danhsach', [
        //         'posts' => $posts,
        //         'chuyenmuc' => $danhmuc,
        //         'cChitiet' => $cChitiet,
        //     ]);
        // }
        // if ($danhmuc->loaidanhmuc_id == 4) {
        //     $cChitiet = 'chi-tiet-van-ban';
        //     $datas = Document::where('danhmuc_id', $danhmuc->id)->orderBy('id', 'desc')->paginate(10);
        //     // return $datas;
        //     return view('document.danhmuc', [
        //         'datas' => $datas,
        //         'chuyenmuc' => $danhmuc,
        //         'cChitiet' => $cChitiet,
        //     ]);
        // }
        // if ($danhmuc->loaidanhmuc_id == 7) {
        //     $cChitiet = 'chi-tiet-di-san-nghe-thuat';
        //     $posts = Disannghethuat::where('danhmuc_id', $danhmuc->id)->orderBy('id', 'desc')->paginate(10);
        //     $name = Danhmuc::where('slug', $slug)->select('name')->first();

        //     return view('disannghethuat.danhsach', [
        //         'posts' => $posts,
        //         'chuyenmuc' => $danhmuc,
        //         'cChitiet' => $cChitiet,
        //         'name' => $name,

        //     ]);
        // }
        // if ($danhmuc->loaidanhmuc_id == 9) {
        //     $cChitiet = 'chi-tiet-cau-lac-bo';
        //     $datas = Caulacbo::where('danhmuc_id', $danhmuc->id)->orderBy('id', 'desc')->paginate(10);
        //     return view('caulacbo.dscaulacbo ', [
        //         'datas' => $datas,
        //         'chuyenmuc' => $danhmuc,
        //         'cChitiet' => $cChitiet,
        //     ]);
        // }
        return view('posts.danhmuc', [
            'posts' => [],
            'chuyenmuc' => $danhmuc,
            'cChitiet' => '',
        ]);
    }

    public function danhmuchacon()
    {
        $datas = getDanhmuc(0,2);
        return $datas;
    }


    public function chitietdisan($slug)
    {

        $chiTiet = Disannghethuat::where('slug', $slug)->first();
        // $danhmuc = Danhmuc::where('id', $chiTiet->danhmuc_id )->select('name')->first();

        return view('disannghethuat.chitietdisan', [
            'chiTiet' => $chiTiet,
            // 'danhmuc' => $danhmuc,

        ]);
    }

    public function chitiet($slug)
    {
        $chitiet = Post::where('slug', $slug)->firstOrFail();
        # Lấy danh mục theo url truyền vào ở trên


        return view('posts.chitiet', [
            'chitiet' => $chitiet,
        ]);
    }

    // 

    public function chitiettintuc($slug)
    {
        $chitiet = Post::where('slug', $slug)->firstOrFail();
        # Lấy danh mục theo url truyền vào ở trên

        # Tin cùng chuyên mục
        $tinlienquan = Post::where('danhmuc_id', $chitiet->danhmuc_id)->orderBy('id', 'desc')->limit(6)->get();
        $upload = Fileupload::where('idtruong', $chitiet->id)->get();
        // return $upload;
        $danhmuc = Danhmuc::where('id', $chitiet->danhmuc_id)->first();
        #Kiểm tra xem danh mục thuộc loại nào
        // return $chitiet;
        return view('posts.chitiettintuc', [
            'chitiet' => $chitiet,
            'chuyenmuc' => $danhmuc,
            'tinlienquan' => $tinlienquan,
            'upload' => $upload,
        ]);
    }


    public function hoidap()
    {
        $dscauhoi = Hoidap::orderBy('id', 'desc')->take(10)->get();
        return view('posts.hoidap', [
            'dscauhoi' => $dscauhoi,

        ]);
    }

    public function sodowebsite()
    {

        return view('posts.sodowebsite', []);
    }

    public function luuhd(Request $request)
    {
        $hd = new Hoidap;
        $hd->Hoten = $request->input('hotenhd');
        $hd->Diachi = $request->input('diachihd');
        $hd->Sdt = $request->input('sdthd');
        $hd->Email = $request->input('emailhd');
        $hd->Noidungcauhoi = $request->input('noidunghd');

        if ($hd->save()) {
            return redirect()->route('posts.hoidap')->with('message', 'Bạn đã gửi câu hỏi thành công');
        }
    }




    public function lichcongtac()
    {

        return view('posts.lichcongtac', []);
    }

    public function ajaxvanban(Request $request)
    {
        $sokyhieu = $request->input('sokyhieu');
        $coquanbanhanh = $request->input('coquanbanhanh');
        $ngaybanhanh = $request->input('ngaybanhanh');
        $ngayhethan = $request->input('ngayhethan');
        $lvb = $request->input('loaivb');
        $idvb = $request->input('idvb');

        $vanban = Document::where('danhmuc_id', '=', $lvb)->orderBy('id', 'desc');

        if ($sokyhieu) {
            $vanban = $vanban->where(function ($query) use ($request) {
                $query->where('sokyhieu', 'like', '%' . $request->input('sokyhieu') . '%')
                    ->orWhere('sokyhieu', 'like', $request->input('sokyhieu') . '%')
                    ->orWhere('sokyhieu', 'like', '%' . $request->input('sokyhieu'));
            });
        }
        if ($coquanbanhanh) {
            $vanban = $vanban->where(function ($query) use ($request) {
                $query->where('coquanbanhanh', 'like', '%' . $request->input('coquanbanhanh') . '%')
                    ->orWhere('coquanbanhanh', 'like', $request->input('coquanbanhanh') . '%')
                    ->orWhere('coquanbanhanh', 'like', '%' . $request->input('coquanbanhanh'));
            });
        }

        if ($ngaybanhanh) {
            $vanban = $vanban->where('ngaybanhanh', '>', $ngaybanhanh);
        }

        if ($ngayhethan) {
            $vanban = $vanban->where('ngayhethan', '<', $ngayhethan);
        }

        // Loại văn bản
        //if ($lvb) {
        //    $vanban = $vanban->where('document_type_id', '=', $lvb);
        //}
        $vanban = $vanban->get();

        foreach ($vanban as $vb) {
            $vb->link = '' . '/' . $vb->id;
            $vb->ngaybh = $vb->ngaybanhanh->format("Y/m/d");
            // if ($vb->ngaybanhanh) {
            //     $vb->ngaybh = $vb->ngaybanhanh->format('d/m/y');
            // } else {
            //     $vb->ngaybh = '';
            // }
            // if ($vb->ngayhethan) {
            //     $vb->ngayhh = $vb->ngayhethan->format('d/m/y');
            // } else {
            //     $vb->ngayhh = '';
            // }
        }


        return $vanban;
    }

    public function vanbanchitiet($id)
    {
        $ctvanban = Document::where('id', $id)->get();
        foreach($ctvanban as $ct)
        {
            $ct->dinhkem = Fileupload::where('tenbang','document')->where('idtruong',$ct->id)->get();
        }
        return view('posts.vanbanchitiet', [
            'ctvanban' => $ctvanban,

        ]);
    }

    // nhân làm thư viện ảnh

    public function thuvienanh($slug)
    {

        $thuvienanh = Thuvienanh::where('slug', $slug)->first();
        $dsthuvienanh = Fileupload::where('tenbang', 'thuvienanhs')->where('idtruong', $thuvienanh->id)->get();
        return view('thuvienanh.index', [
            'name' => $thuvienanh->name,
            'dsthuvienanh' => $dsthuvienanh,
        ]);
    }
}
