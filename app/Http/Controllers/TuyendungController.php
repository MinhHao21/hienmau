<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use GuzzleHttp\Client;
use App\Models\sinhvien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GNAHotelSolutions\Weather\Weather;
use Illuminate\Tests\Integration\Queue\Order;

class TuyendungController extends Controller
{

    public function trangchu()
    {
        $baituyendung = Post::orderBy('id', 'desc')->take(4)->get();

        return view('posts.home', [
            'baituyendung' => $baituyendung,

        ]);
    }

    public function dangky()
    {
        

        return view('posts.dangky', [
            

        ]);
    }

    public function tuyendung($slug)
    {
        // Weather 
        $apiKey = '4ee3608edf596791eae080f2d3205f27'; // Thay YOUR_API_KEY bằng khóa API của bạn từ OpenWeatherMap

        $client = new Client([
            'verify' => false, // Sửa từ 'curl' thành 'verify' và đặt giá trị là false
        ]);

        $response = $client->get("https://api.openweathermap.org/data/2.5/weather?q=Vinh%2C%20Vietnam&appid=$apiKey");

        $data = json_decode($response->getBody(), true);
        $main = $data['main'];
        $main['temp'] = $main['temp'] - 273.15;
        $main['feels_like'] = $main['feels_like'] - 273.15;
        $main['temp_min'] = $main['temp_min'] - 273.15;
        $main['temp_max'] = $main['temp_max'] - 273.15;

        $data['main'] = $main;
        $chitiettuyendung = Post::where('slug', $slug)->firstOrFail();

        // Datetime 
        $currentDateTime = Carbon::now();
        $formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');

        //return $formattedDateTime;
       
        $ungtuyen = sinhvien::all();

        return view('chitiettuyendung', [
            'ungtuyen' => $ungtuyen,
            'data' => $data,
            'formattedDateTime' => $formattedDateTime,
            'chitiettuyendung' => $chitiettuyendung,
        ]);
    }

    public function ungtuyen()
    {
        $ungtuyen = sinhvien::all();
        return $ungtuyen;
        // return view('ungtuyen', [

        //     'ungtuyen' => $ungtuyen,
        // ]);
    }

    public function ungtuyenview()
    {
        $ungtuyen = sinhvien::all();
        
        return view('ungtuyen', [

            'ungtuyen' => $ungtuyen,
        ]);
    }

    // ham sua
    public function update(Request $request, $id)
    {
        // Lấy thông tin trạng thái từ request
        $trangthai = $request->input('trangthai');

        // Tìm ứng viên theo ID
        $ungtuyen = sinhvien::findOrFail($id);

        // Cập nhật trạng thái
        $ungtuyen->trangthai = $trangthai;
        $ungtuyen->save();

        // Trả về kết quả thành công
        return response()->json(['message' => 'Trạng thái đã được cập nhật']);
    }

    public function danhmuc()
    {
        $datas = getDanhmuc(null);
        return $datas;
    }

    public function phanhoi(Request $request)
    {

        $thongtinphanhoi = new sinhvien();
        $thongtinphanhoi->hoten = $request->input('hoten');
        $thongtinphanhoi->email = $request->input('email');
        $thongtinphanhoi->diachi = $request->input('diachi');
        $thongtinphanhoi->sodienthoai = $request->input('sodienthoai');
        $thongtinphanhoi->trangthai = 'Chờ xét duyệt';

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('public', $fileName); // Lưu file vào thư mục 'uploads' với tên gốc của file

            // Lưu thông tin về file vào CSDL

            $thongtinphanhoi->filecv = $fileName;
            $thongtinphanhoi->path = $filePath;
            $thongtinphanhoi->save();
        }
        $thongtinphanhoi->save();

        return redirect('/ung-tuyen')->with('status', 'Phản hồi của bạn đã được gửi. Chúng tôi sẽ sớm phản hồi lại!');
    }

}
