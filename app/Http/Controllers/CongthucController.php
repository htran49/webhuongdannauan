<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use App\Congthuc;
use Illuminate\Http\Request;

class CongthucController extends Controller
{
    public function congThuc($unsigned_name){
        $Congthuc='App\Congthuc'::where('id',$unsigned_name)->get();
        $nguyenlieu=explode(";",$Congthuc[0]['nguyenlieu']);
        $cachlam=explode("//",$Congthuc[0]['cachlam']);
        $anhcachlam=explode(";",$Congthuc[0]['anhcachlam']);
        $loaiid=$Congthuc[0]['loai_id'];
        $monlienquan='App\Congthuc'::where('loai_id',$loaiid)->limit(4)->get();
        $comment='App\Comment'::where ('idPost',$unsigned_name)->get();
        $congthucKey='congthuc_'.$unsigned_name;
        if (!Session::has($congthucKey)) {
            'App\Congthuc'::where('id', $unsigned_name)->increment('songuoixem');
            Session::put($congthucKey, 1);
        }



        return view('page.detail')->with('datacongthuc',$Congthuc)->with('datanguyenlieu',$nguyenlieu)->with('datacachlam',$cachlam)->With('dataanhcachlam',$anhcachlam)->with('datamonlienquan',$monlienquan)->with('dataloai',$loaiid)
        ->with('datacomment',$comment);

        
    }
}
