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

class adminUpdateController extends Controller
{

    //học sinh
    public function them_hoc_sinh(){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        $lop = DB::table('tbl_lop')->get();
        return view('admin.hoc-sinh.them-hoc-sinh')->with('lop', $lop);
    }
    public function them_hoc_sinh_submit(Request $res){
        $data = array();
        $data['hoten'] = $res->input('hoten');
        $data['ngay_sinh'] = $res->input('ngaysinh');
        $data['dia_chi'] = $res->input('diachi');
        $data['lop'] = $res->input('lop');

        $id_lop = DB::table('tbl_lop')->where('lop', $res->input('lop'))->value('id');
        $data['id_lop'] = $id_lop;

        DB::table('tbl_hoc_sinh')->insert($data);
        Session::put('message', 'Thêm học sinh thành công!');
	    return Redirect::to('/admin/them-hoc-sinh');
        
    }
    public function cap_nhat_hoc_sinh(){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        $hocsinh = DB::table('tbl_hoc_sinh')->get();
        return view('admin.hoc-sinh.cap-nhat-hoc-sinh')->with('hocsinh', $hocsinh);
    }
    public function xoa_hoc_sinh($id){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        DB::table('tbl_hoc_sinh')->where('id_hocsinh', $id)->delete();
        
        Session::put('message', 'Xóa học sinh thành công!');
	    return Redirect::to('/admin/cap-nhat-hoc-sinh');
    }
    public function sua_hoc_sinh($id){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }

        $lop = DB::table('tbl_lop')->get();
        $hocsinh = DB::table('tbl_hoc_sinh')->where('id_hocsinh', $id)->get();
        return view('admin.hoc-sinh.sua-hoc-sinh')->with('hocsinh', $hocsinh)->with('lop', $lop);
    }
    public function sua_hoc_sinh_submit(REquest $res, $id){
        $hoten = $res->input('hoten');
        $ngaysinh = $res->input('ngaysinh');
        $diachi = $res->input('diachi');
        $lop = $res->input('lop');

        DB::table('tbl_hoc_sinh')->where('id_hocsinh', $id)->update([
            'hoten' => $hoten,
            'ngay_sinh' => $ngaysinh,
            'dia_chi' => $diachi,
            'lop' => $lop
        ]);
        Session::put('message', 'Sửa học sinh thành công!');
	    return Redirect::to('/admin/cap-nhat-hoc-sinh');
    }






    // giáo viên
    public function them_giao_vien(){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        $lop = DB::table('tbl_lop')->get();
        return view('admin.giao-vien.them-giao-vien')->with('lop', $lop);
    }

    public function them_giao_vien_submit(Request $res){
        $data = array();
        $data['hoten'] = $res->input('hoten');
        $data['ngaysinh'] = $res->input('ngaysinh');
        $data['sdt'] = $res->input('sdt');
        $data['monday'] = $res->input('monday');
        $data['chucvu'] = $res->input('chucvu');

        DB::table('tbl_giaovien_nhanvien')->insert($data);
        Session::put('message', 'Thêm giáo viên thành công!');
	    return Redirect::to('/admin/them-giao-vien');  
    }
    public function cap_nhat_giao_vien(){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        $giaovien = DB::table('tbl_giaovien_nhanvien')->get();
        return view('admin.giao-vien.cap-nhat-giao-vien')->with('giaovien', $giaovien);
    }
    public function xoa_giao_vien($id){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        DB::table('tbl_giaovien_nhanvien')->where('id', $id)->delete();
        
        Session::put('message', 'Xóa giáo viên thành công!');
	    return Redirect::to('/admin/cap-nhat-giao-vien');
    }
    public function sua_giao_vien($id){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        $giaovien = DB::table('tbl_giaovien_nhanvien')->where('id', $id)->get();
        return view('admin.giao-vien.sua-giao-vien')->with('giaovien', $giaovien);
    }
    public function sua_giao_vien_submit(Request $res, $id){
        $hoten = $res->input('hoten');
        $monday = $res->input('monday');
        $chucvu = $res->input('chucvu');
        $ngaysinh = $res->input('ngaysinh');
        $sdt = $res->input('sdt');

        DB::table('tbl_giaovien_nhanvien')->where('id', $id)->update([
            'hoten' => $hoten,
            'ngaysinh' => $ngaysinh,
            'chucvu' => $chucvu,
            'ngaysinh' => $ngaysinh,
            'sdt' => $sdt
        ]);
        Session::put('message', 'Sửa thông tin giáo viên thành công!');
	    return Redirect::to('/admin/cap-nhat-giao-vien');
    }


    // my-profile
    public function my_profile(){
        return view('admin.profile.my-profile');
    }
    public function cap_nhat_profile(){
        return view('admin.profile.cap-nhat-profile');
    }
    public function update_profile(Request $res){
        $name = $res->input('ten');
        $email = $res->input('email');
        $phone = $res->input('phone');
        $matkhaucu = md5($res->input('matkhuacu'));
        $matkhaumoi = md5($res->input('matkhaumoi'));

        $id = Session::get('admin_id');
        $result = DB::table('tbl_admin')->where('admin_password', $matkhaucu)->where('admin_id', $id)->get();
        if ($result) {
            DB::table('tbl_admin')->where('admin_id', $id)->update([
                'admin_email' => $email,
                'admin_name' => $name,
                'admin_phone' => $phone,
                'admin_password' => $matkhaumoi
            ]);
            Session::put('message', 'Cập nhật tài khoản thành công !');
	        return Redirect::to('/admin/my-profile');
        }
    }
}
