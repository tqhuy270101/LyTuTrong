<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();
use App\Http\Controllers\Post;


class tintucController extends Controller
{
    public function home_tintuc(){
        $tintuc = DB::table('tbl_tintuc')->orderby('id', 'desc')->paginate('8');
        return view('tin-tuc.trangchu-tintuc')->with('tintuc', $tintuc);
    }
    public function xem_tin_tuc($id){
        $tintuc = DB::table('tbl_tintuc')->where('id', $id)->get();     
        $tintuc_noibat = DB::table('tbl_tintuc')->orderby('id', 'desc')->limit('7')->get();
        return view('tin-tuc.xem-tin-tuc')
        ->with('tintuc', $tintuc_noibat)->with('tintuc_chinh', $tintuc);
    }
}
