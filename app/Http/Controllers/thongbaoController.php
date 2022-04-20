<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class thongbaoController extends Controller
{
    public function lich_thi(){
        return view('thong-bao.lich-thi');
    }
    public function lich_cong_tac(){
        return view('thong-bao.lich-cong-tac');
    }
    public function bang_diem(){
        return view('thong-bao.bang-diem');
    }
    public function bang_diem_lop($lop){
        $hocsinh = DB::table('tbl_hoc_sinh')->where('lop', $lop)->get();
        return view('thong-bao.bang-diem-lop')->with('hocsinh', $hocsinh);
    }
    public function bang_diem_submit(Request $res){
        $id_hs = $res->input('id_hs');
        $hocsinh = DB::table('tbl_hoc_sinh')->where('id_hocsinh', $id_hs)->get();
        $bangdiem_hk1 = DB::table('tbl_diem')->where('id_hocsinh', $id_hs)->where('hoc_ki', 1)->get();
        $bangdiem_hk2 = DB::table('tbl_diem')->where('id_hocsinh', $id_hs)->where('hoc_ki', 2)->get();
        return view('thong-bao.bangdiem-submit')->with('bangdiem_hk1', $bangdiem_hk1)->with('bangdiem_hk2', $bangdiem_hk2)
        ->with('hocsinh', $hocsinh);
    }

    //Liên hệ
    public function lien_he(){
        return view('lienhe.lien-he');
    }
}
