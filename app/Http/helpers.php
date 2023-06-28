<?php

use App\Models\Danhmuc;

    function mv_test()
    {
        return 'mayviet';
    }

    function getDanhmuc($danhmuccha) {
        
            $danhmuc = Danhmuc::where('hienthi', 1)->where('danhmuc_id', $danhmuccha)->get();
        
        
        $datas = array();
        foreach ($danhmuc as $dm){
            $t = array();
            $t['id'] = $dm->id;
            $t['label'] = $dm->name;    
            $t['slug'] = $dm->slug;
            $t['loaidanhmuc_id'] = $dm->loaidanhmuc_id;
            $t['children'] = [];
            $t['kiemtra'] = 0;
            $t['menuduoi'] = 0; 
            
                $dem = Danhmuc::where('hienthi', 1)->where('danhmuc_id', $dm->id)->count();
            
            if ( $dem>0){
                $t['children'] = getDanhmuc($dm->id);
                $t['kiemtra'] = 1;
            }
            array_push($datas, $t,);
        }
        return $datas;
    }
    // function MenuLeft($danhmuccha, $checktop) {

    
    //     if($checktop == 1){
    //         $danhmuc = Danhmuc::where('hienthi', 1)->where('menuduoi', 121)->where('danhmuc_id', $danhmuccha)->get();
    //     }
    //     else{
    //         $danhmuc = Danhmuc::where('hienthi', 1)->where('danhmuc_id', $danhmuccha)->get();
    //     }
    
      
    //     $datas = array();
    //     foreach ($danhmuc as $dm) {
    //         $t = array();
    //         $t['id'] = $dm->id;
    //         $t['label'] = $dm->name;
    //         $t['slug'] = $dm->slug;
    //         $t['danhmuc_id'] = $dm->danhmuc_id;
    //         $t['url'] = $dm->url;
    //         $t['children'] = [];
    //         $t['kiemtra'] = 0;
    //         $t['menuduoi'] = 0;
    //         if ($checktop == 1) {
    //             $dem = Danhmuc::where('hienthi', 1)->where('menuduoi', 121)->where('danhmuc_id', $dm->id)->count();
    //         } else {
    //             $dem = Danhmuc::where('hienthi', 1)->where('danhmuc_id', $dm->id)->count();
    //         }
    //         if ($dem > 0) {
    //             $t['children'] = getDanhmuc($dm->id, $checktop);
    //             $t['kiemtra'] = 1;
    //         }
    //         array_push($datas, $t,);
    //     }
    //     return $datas;
    //    }
    

    // function getDanhmucid($danhmuccha) {
    //     $danhmuc = Danhmuc::where('hienthi', 1)->where('danhmuc_id', $danhmuccha)->get()->pluck('id')->toArray();
    //     $datas = array();
    //     if ($danhmuccha != ''){
    //         array_push($datas, $danhmuccha);
    //     }
    //     foreach ($danhmuc as $dm){

    //         if (Danhmuc::where('hienthi', 1)->where('danhmuc_id', $dm)->count()>0){
    //             $t = getDanhmucid($dm);
    //             #array_merge($datas,$t );
    //             foreach ($t as $a){
    //                 array_push($datas,$a );
    //             }
    //         }

    //         //$datas += $t;
    //         array_push($datas,$dm );
    //     }
    //     return $datas;
    // }
