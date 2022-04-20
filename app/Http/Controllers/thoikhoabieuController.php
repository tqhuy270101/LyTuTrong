<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();

class thoikhoabieuController extends Controller
{
    // khoi6
    //lop6A
    public function thoikhoabieulop6A(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 1)->where('id', 1)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 1)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 1)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 1)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 1)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 1)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 1)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop6A')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop6A(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 1)->where('id', 1)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 1)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 1)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 1)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 1)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 1)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 1)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop6A')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    //lop6B
    public function thoikhoabieulop6B(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 1)->where('id', 2)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 2)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 2)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 2)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 2)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 2)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 2)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop6B')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop6B(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 1)->where('id', 2)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 2)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 2)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 2)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 2)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 2)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 2)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop6B')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }


    //lop6C
    public function thoikhoabieulop6C(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 1)->where('id', 3)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 3)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 3)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 3)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 3)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 3)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 3)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop6C')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop6C(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 1)->where('id', 3)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 3)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 3)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 3)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 3)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 3)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 3)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop6C')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    //lop6D
    public function thoikhoabieulop6D(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 1)->where('id', 4)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 4)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 4)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 4)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 4)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 4)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 4)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop6D')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop6D(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 1)->where('id', 4)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 4)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 4)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 4)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 4)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 4)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 4)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop6D')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    // khoi7
    //lop7A
    public function thoikhoabieulop7A(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 2)->where('id', 5)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 5)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 5)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 5)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 5)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 5)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 5)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop7A')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop7A(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 2)->where('id', 5)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 5)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 5)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 5)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 5)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 5)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 5)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop7A')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    //lop7B
    public function thoikhoabieulop7B(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 2)->where('id', 6)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 6)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 6)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 6)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 6)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 6)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 6)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop7B')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop7B(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 2)->where('id', 6)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 6)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 6)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 6)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 6)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 6)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 6)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop7B')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }


    //lop7C
    public function thoikhoabieulop7C(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 2)->where('id', 7)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 7)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 7)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 7)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 7)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 7)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 7)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop7C')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop7C(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 2)->where('id', 7)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 7)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 7)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 7)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 7)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 7)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 7)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop7C')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    //lop7D
    public function thoikhoabieulop7D(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 2)->where('id', 8)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 8)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 8)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 8)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 8)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 8)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 8)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop7D')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop7D(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 2)->where('id', 8)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 8)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 8)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 8)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 8)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 8)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 8)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop7D')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    // khoi8
    //lop8A
    public function thoikhoabieulop8A(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 3)->where('id', 9)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 9)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 9)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 9)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 9)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 9)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 9)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop8A')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop8A(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 3)->where('id', 9)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 9)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 9)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 9)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 9)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 9)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 9)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop8A')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    //lop8B
    public function thoikhoabieulop8B(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 3)->where('id', 10)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 10)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 10)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 10)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 10)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 10)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 10)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop8B')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
        
    }
    public function thoikhoabieu_sang_lop8B(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 3)->where('id', 10)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 10)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 10)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 10)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 10)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 10)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 10)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop8B')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }


    //lop8C
    public function thoikhoabieulop8C(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 3)->where('id', 11)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 11)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 11)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 11)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 11)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 11)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 11)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop8C')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop8C(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 3)->where('id', 11)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 11)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 11)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 11)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 11)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 11)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 11)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop8C')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    //lop8D
    public function thoikhoabieulop8D(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 3)->where('id', 12)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 12)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 12)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 12)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 12)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 12)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 12)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop8D')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop8D(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 3)->where('id', 12)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 12)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 12)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 12)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 12)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 12)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 12)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop8D')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    // khoi9
    //lop9A
    public function thoikhoabieulop9A(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 4)->where('id', 13)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 1)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 13)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 13)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 13)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 13)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 13)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop9A')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop9A(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 4)->where('id', 13)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 13)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 13)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 13)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 13)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 13)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 13)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop9A')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    //lop9B
    public function thoikhoabieulop9B(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 4)->where('id', 14)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 14)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 14)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 14)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 14)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 14)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 14)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop9B')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop9B(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 4)->where('id', 14)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 14)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 14)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 14)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 14)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 14)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 14)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop9B')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }


    //lop9C
    public function thoikhoabieulop9C(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 4)->where('id', 15)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 15)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 15)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 15)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 15)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 15)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 15)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop9C')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop9C(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 4)->where('id', 15)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 3)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 15)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 15)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 15)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 15)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 15)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop9C')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    //lop9D
    public function thoikhoabieulop9D(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 4)->where('id', 16)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 16)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 16)->where('tiet', 1)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 16)->where('tiet', 2)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 16)->where('tiet', 3)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 16)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 16)->where('tiet', 4)->where('buoi', 'chieu')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieulop9D')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }
    public function thoikhoabieu_sang_lop9D(){
        $tkb_ngay_chieu = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'chieu')->get();
        $tkb_ngay_sang = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', 'sang')->get();
        $thoigian = Carbon::now();
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $lop_hoc = DB::table('tbl_lop')->where('id_khoi', 4)->where('id', 16)->get();
        $chunhiem = DB::table('tbl_lop')->where('id', 16)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 16)->where('tiet', 1)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 16)->where('tiet', 2)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 16)->where('tiet', 3)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 16)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', 16)->where('tiet', 4)->where('buoi', 'sang')->orderby('thu', 'asc')->get();
        return view('thoikhoabieu.thoikhoabieu-sang-lop9D')
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)->with('lophoc', $lop_hoc)
        ->with('chunhiem', $chunhiem)->with('thoigian', $thoigian)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('tkb_ngay_chieu', $tkb_ngay_chieu)->with('tkb_ngay_sang', $tkb_ngay_sang);
    }

    //tkb giaovien
    public function tkb_giaovien(){
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
        $giaovien = DB::table('tbl_giaovien_nhanvien')->where('chucvu', 'Giáo viên')->get();
        return view('thoikhoabieu.tkb-giaovien')->with('giaovien', $giaovien)
        ->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9);
    }
    public function tkb_giaovien_submit(Request $res){
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();

        $id = $res->input('id');
        $buoi = $res->input('buoi');
        $now = Carbon::now();
        $a='';
        if($buoi == 'chieu') {
            $a = 'chiều';
        } else if($buoi == 'sang'){
            $a = 'sáng';
        }

        $giaovien = DB::table('tbl_giaovien_nhanvien')->where('id', $id)->get();
        $ngayapdung = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', $buoi)->get();

        $tkb_t1 = DB::table('tbl_thoikhoabieu_giaovien')->where('id_giaovien', $id)->where('tiet', 1)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_giaovien')->where('id_giaovien', $id)->where('tiet', 2)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_giaovien')->where('id_giaovien', $id)->where('tiet', 3)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_giaovien')->where('id_giaovien', $id)->where('tiet', 4)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_giaovien')->where('id_giaovien', $id)->where('tiet', 5)->where('buoi', $buoi)->orderby('thu', 'asc')->get();

        return view('thoikhoabieu.tkb-giaovien-submit')->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9)
        ->with('now', $now)->with('giaovien', $giaovien)->with('ngayapdung', $ngayapdung)->with('buoi', $a)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5);
    }
}
