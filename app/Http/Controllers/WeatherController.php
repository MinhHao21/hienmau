<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        // $city = $request->input('Hà Nội');
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
       // return $data;
        return view('chitiettuyendung', [
            'data' => $data,
        ]);
    }
}
