<?php

namespace App\Console\Commands;

use App\Models\Danhmuc;
use Illuminate\Console\Command;
use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\DB;

class ConvertData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:convertdata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $danhmuc = DB::connection('pgsql')
            ->table('journalarticle')->where('companyid', 10164)->take(2)->get();
        foreach ($danhmuc as $dm) {
            $data = new Danhmuc();
            $data->id = $dm->categoryid;
            $str = $dm->name;
            $str = trim(mb_strtolower($str));
            $str = str_replace('- ', '', $str);
            $str = str_replace(' ', '-', $this::xoadau($str));
             $checkslug = Danhmuc::where('slug', $str)->first();
             if ( $checkslug) {
                 $data->slug = $str.$dm->categoryid;
             } else {
                 $data->slug = $str;
             }
             $data->name = $dm->name;
             $data->danhmuc_id = $dm->parentcategoryid;
             $data->save();
           
        }
       $this.info($data);
    }

    // public function vanban(type $var = null)
    // {
    //     $bv = DB::connection('pgsql')
    //         ->table('journalarticle')->where('id_', 11119)->first();
    //     $body = $bv->content;
    //     $xml = simplexml_load_string($body, 'SimpleXMLElement');
    //     $json = json_encode($xml);
    //     $array = json_decode($json, TRUE);
    //     $bv -> text =  $array['static-content'];
    //     return view('posts.danhmuc', [
    //         'baiviet' =>$bv ,
    //     ]);
    // }
   
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
        $text = preg_replace("/(\“|\”|\, |\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $text);
        $text = preg_replace("/()/", '', $text);
        return $text;
    }
}

    