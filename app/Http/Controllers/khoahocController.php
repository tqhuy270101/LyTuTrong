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

class khoahocController extends Controller
{
    public function khoa_hoc(){
        $tailieu = DB::table('tailieu_hoctap')->get();
        return view('khoa-hoc.khoa-hoc')->with('tailieu', $tailieu);
    }
    public function tai_lieu_mon($khoi, $mon){
        $tailieu = DB::table('tailieu_hoctap')->where('khoi', $khoi)->where('ten_mon', $mon)->get();
        return view('khoa-hoc.tai-lieu-mon')
        ->with('tailieu', $tailieu);
    }
}
