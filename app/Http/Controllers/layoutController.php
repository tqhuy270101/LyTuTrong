<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\layoutController;
use App\Models\User;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();

class layoutController extends Controller
{
    public function trangchu(){
    	$lanhdao = DB::table('tbl_lanhdao')->orderby('lanhdao_id', 'asc')->get();
    	$now = Carbon::now();
        $sukien = DB::table('tbl_sukien')->where('ngaytochuc', '>=', $now)->orderby('ngaytochuc', 'asc')->paginate('3');
        $tintuc = DB::table('tbl_tintuc')->orderby('id', 'desc')->limit(2)->get();
    	return view('home')->with('lanhdao', $lanhdao)->with('sukien', $sukien)->with('tintuc', $tintuc);
    }
    public function thoikhoabieu(){
        $lop6 = DB::table('tbl_lop')->where('id_khoi', 1)->get();
        $lop7 = DB::table('tbl_lop')->where('id_khoi', 2)->get();
        $lop8 = DB::table('tbl_lop')->where('id_khoi', 3)->get();
        $lop9 = DB::table('tbl_lop')->where('id_khoi', 4)->get();
    	return view('thoikhoabieu')->with('lop6', $lop6)->with('lop7', $lop7)->with('lop8', $lop8)->with('lop9', $lop9);
    }
}