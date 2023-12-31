<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\thongtinnguoihien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DOMDocument;
use GuzzleHttp\Client;

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

        return redirect('/dang-ky-hien-mau')->with('status', 'Đăng ký thành công');
    }

    public function tigiangoaite()
    {

        $client = new Client([
            'verify' => false, // Sửa từ 'curl' thành 'verify' và đặt giá trị là false
        ]);
        $response = $client->get("https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx?b=10");
        
        $xml = new DOMDocument();
        $xml->loadXML($response->getBody());

        $dateTime = $xml->getElementsByTagName('DateTime')->item(0)->nodeValue;
        $exrates = [];

        $exrateNodes = $xml->getElementsByTagName('Exrate');
        foreach ($exrateNodes as $exrateNode) {
            $currencyCode = $exrateNode->getAttribute('CurrencyCode');
            $currencyName = $exrateNode->getAttribute('CurrencyName');
            $buy = $exrateNode->getAttribute('Buy');
            $transfer = $exrateNode->getAttribute('Transfer');
            $sell = $exrateNode->getAttribute('Sell');

            $exrates[] = [
                'currencyCode' => $currencyCode,
                'currencyName' => $currencyName,
                'buy' => $buy,
                'transfer' => $transfer,
                'sell' => $sell,
            ];
        }
        return view('posts.tigiangoaite', [
            'dateTime' => $dateTime,
            'exrates' => $exrates,
        ]);
    }
}
