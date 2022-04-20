<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class gioithieuController extends Controller
{
    public function lich_su_hinh_thanh(){
        $now = carbon::now();
        $sukien = DB::table('tbl_sukien')->where('ngaytochuc', '>=', $now)->get();
        return view('gioi-thieu.lich-su-hinh-thanh')->with('sukien', $sukien);
    }
    public function co_cau_to_chuc(){
        $hieutruong = DB::table('tbl_lanhdao')->where('lanhdao_chucvu', 'Hiệu trưởng')->get();
        $hieupho1 = DB::table('tbl_lanhdao')->where('lanhdao_id', 1)->get();
        $hieupho2 = DB::table('tbl_lanhdao')->where('lanhdao_id', 3)->get();
        return view('gioi-thieu.co-cau-to-chuc')
        ->with('hieutruong', $hieutruong)->with('hieupho1', $hieupho1)->with('hieupho2', $hieupho2);
    }
    public function thanh_tich(){
        return view('gioi-thieu.thanh-tich');
    }
    public function noi_quy_truong_hoc(){
        return view('gioi-thieu.noi-quy-truong-hoc');
    }
}
