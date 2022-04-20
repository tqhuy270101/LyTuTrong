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


class tailieuController extends Controller
{
    public function tailieu_hoctap(){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        return view('admin.tailieu-hoctap.tailieu');
    }
    public function tailieu_hoctap_submit(Request $res){
        $tieude = $res->input('tieude');
        $mon = $res->input('mon');
        $khoi = $res->input('khoi');
        $file = $res->input('file');
        $insert = DB::table('tailieu_hoctap')->insert([
            'tieude' => $tieude,
            'ten_mon' => $mon,
            'file_tailieu' => $file,
            'khoi' => $khoi
        ]);
        if ($insert) {
            Session::put('message', 'Thêm tài liệu thành công !');
            return Redirect::to('/admin/tai-lieu-hoc-tap');
        }
    }
    public function update_diem(){
        $admin_chucdanh = Session::get('admin_chucdanh');
        if (!$admin_chucdanh) {
            return Redirect::to('/login ');
        }
        $hocsinh = DB::table('tbl_hoc_sinh')->where('lop', $admin_chucdanh)->get();
        return view('admin.update-diem.update-diem-hocki')->with('hocsinh', $hocsinh);
    }
    public function update_diem_hs($id, $hocky){
        $admin_chucdanh = Session::get('admin_chucdanh');
        if (!$admin_chucdanh) {
            return Redirect::to('/login ');
        }
        $hocsinh = DB::table('tbl_hoc_sinh')->where('id_hocsinh', $id)->get();
        $bangdiem = DB::table('tbl_diem')->where('id_hocsinh', $id)->where('hoc_ki', $hocky)->get();
        return view('admin.update-diem.update-diem-hs')->with('bangdiem', $bangdiem)->with('hocsinh', $hocsinh)->with('id', $id);
    }
    public function submit_diem(Request $res, $hocky, $id){
        $admin_chucdanh = Session::get('admin_chucdanh');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        $toan = $res->input('toan');
        $ly = $res->input('ly');
        $hoa = $res->input('hoa');
        $sinh = $res->input('sinh');
        $nguvan = $res->input('nguvan');
        $anhvan = $res->input('anhvan');
        $su = $res->input('su');
        $dia = $res->input('dia');
        $congnghe = $res->input('congnghe');
        $GDCD = $res->input('GDCD');

        $update = DB::table('tbl_diem')->where('id_hocsinh', $id)->update([
            'toan' => $toan,
            'ly' => $ly,
            'hoa' => $hoa,
            'sinh' => $sinh,
            'nguvan' => $nguvan,
            'anhvan' => $anhvan,
            'su' => $su,
            'dia' => $dia,
            'congnghe' => $congnghe,
            'GDCD' => $GDCD
        ]);
        if ($update) {
            Session::put('message', 'Cập nhật thành công !');
            return Redirect::to('/giaovien/cap-nhat-diem');
        }
    }
}
