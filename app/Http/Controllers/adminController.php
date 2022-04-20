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
Session_start();
class adminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }
    public function show_dashboard(){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        $now = Carbon::now();
        return view('admin.dashboard')->with('thoigian', $now);
    }
    public function dashboard(Request $request){
    	$admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        
    	if ($result) {
                $chucdanh =  $result->chucdanh;
                if ($chucdanh == 'admin') {
                    Session::put('admin_name', $result->admin_name);
                    Session::put('admin_email', $result->admin_email);
                    Session::put('admin_id', $result->admin_id);
                    Session::put('admin_phone', $result->admin_phone);
                    return Redirect::to('/admin/dashboard');
                } else {
                    Session::put('admin_chucdanh', $chucdanh);
                    return Redirect::to('/giaovien/cap-nhat-diem');
                }
    	} else {
    		Session::put('message', 'Email hoặc mật khẩu không đúng !');
    		return Redirect::to('/login');
    	}
    }
    public function logout_giaovien(){
        Session::put('admin_chucdanh', null);
		return Redirect::to('/');
    }
    public function logout(){
        Session::put('admin_name', null);
        Session::put('admin_email', null);
        Session::put('admin_id', null);
        Session::put('admin_phone', null);
		return Redirect::to('/login');
    }
    public function tkb_giaovien(){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        $giaovien = DB::table('tbl_giaovien_nhanvien')->where('chucvu', 'Giáo viên')->get();
        return view('admin.admin-thoikhoabieu.tkb-giaovien')
        ->with('giaovien', $giaovien);
    }
    public function tkb_giaovien_name(Request $request){
        $id = $request->input('giaovien');
        Session::put('buoi', $request->input('buoi'));
        $buoi = Session::get('buoi');
        $a = '';
        if ($buoi == 'sang') {
            $a = 'sáng';
        } else {
            $a = 'chiều';
        }
        $name_giaovien = DB::table('tbl_giaovien_nhanvien')->where('id', $id)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_giaovien')->where('id_giaovien', $id)->where('tiet', 1)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_giaovien')->where('id_giaovien', $id)->where('tiet', 2)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_giaovien')->where('id_giaovien', $id)->where('tiet', 3)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_giaovien')->where('id_giaovien', $id)->where('tiet', 4)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_giaovien')->where('id_giaovien', $id)->where('tiet', 5)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $ngayapdung = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', $buoi)->get();
        $thoigian = Carbon::now();
        return view('admin.admin-thoikhoabieu.tkb-giaovien-submit')->with('name_giaovien', $name_giaovien)
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('ngayapdung', $ngayapdung)->with('thoigian', $thoigian)->with('buoi', $a);
    }
    
    public function tkb_hocsinh(){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        $lop = DB::table('tbl_lop')->get();
        return view('admin.admin-thoikhoabieu.tkb-hocsinh')
        ->with('lop', $lop);
    }
    public function tkb_hocsinh_lop(Request $request){
        $id = $request->input('id_lop');
        Session::put('buoi', $request->input('buoi'));
        $buoi = Session::get('buoi');
        if ($buoi == 'sang') {
            $a = 'sáng';
        } else{
            $a = 'chiều';
        }
        $chunhiem = DB::table('tbl_lop')->where('id', $id)->get();
        $tkb_t1 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', $id)->where('tiet', 1)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t2 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', $id)->where('tiet', 2)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t3 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', $id)->where('tiet', 3)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t4 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', $id)->where('tiet', 4)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $tkb_t5 = DB::table('tbl_thoikhoabieu_hocsinh')->where('id_lop', $id)->where('tiet', 5)->where('buoi', $buoi)->orderby('thu', 'asc')->get();
        $ngayapdung = DB::table('tbl_thoikhoabieu_ngay')->where('buoi', $buoi)->get();
        $thoigian = Carbon::now();
        $lop = DB::table('tbl_lop')->where('id', $id)->get();
        return view('admin.admin-thoikhoabieu.tkb-hocsinh-lop')
        ->with('tkb_t1', $tkb_t1)->with('tkb_t2', $tkb_t2)->with('tkb_t3', $tkb_t3)->with('tkb_t4', $tkb_t4)->with('tkb_t5', $tkb_t5)
        ->with('giaovien', $chunhiem)
        ->with('ngayapdung', $ngayapdung)->with('thoigian', $thoigian)
        ->with('lop', $lop)->with('buoi', $a);
    }

    //update tkb hocsinh
    public function update_tkb_hocsinh(Request $res){
       
        $mon12 = $res->input('mon12');
        $giaovien12 = $res->input('giaovien12');
        $id12 = $res->input('id12');

        $mon13 = $res->input('mon13');
        $giaovien13 = $res->input('giaovien13');
        $id13 = $res->input('id13');

        $mon14 = $res->input('mon14');
        $giaovien14 = $res->input('giaovien14');
        $id14 = $res->input('id14');

        $mon15 = $res->input('mon15');
        $giaovien15 = $res->input('giaovien15');
        $id15 = $res->input('id15');

        $mon16 = $res->input('mon16');
        $giaovien16 = $res->input('giaovien16');
        $id16 = $res->input('id16');

        $mon17 = $res->input('mon17');
        $giaovien17 = $res->input('giaovien17');
        $id17 = $res->input('id17');

        $mon22 = $res->input('mon22');
        $giaovien22 = $res->input('giaovien22');
        $id22 = $res->input('id22');

        $mon23 = $res->input('mon23');
        $giaovien23 = $res->input('giaovien23');
        $id23 = $res->input('id23');

        $mon24 = $res->input('mon24');
        $giaovien24 = $res->input('giaovien24');
        $id24 = $res->input('id24');

        $mon25 = $res->input('mon25');
        $giaovien25 = $res->input('giaovien25');
        $id25 = $res->input('id25');

        $mon26 = $res->input('mon26');
        $giaovien26 = $res->input('giaovien26');
        $id26 = $res->input('id26');

        $mon27 = $res->input('mon27');
        $giaovien27 = $res->input('giaovien27');
        $id27 = $res->input('id27');

        $mon32 = $res->input('mon32');
        $giaovien32 = $res->input('giaovien32');
        $id32 = $res->input('id32');

        $mon33 = $res->input('mon33');
        $giaovien33 = $res->input('giaovien33');
        $id33 = $res->input('id33');

        $mon34 = $res->input('mon34');
        $giaovien34 = $res->input('giaovien34');
        $id34 = $res->input('id34');

        $mon35 = $res->input('mon35');
        $giaovien35 = $res->input('giaovien35');
        $id35 = $res->input('id35');

        $mon36 = $res->input('mon36');
        $giaovien36 = $res->input('giaovien36');
        $id36 = $res->input('id36');

        $mon37 = $res->input('mon37');
        $giaovien37 = $res->input('giaovien37');
        $id37 = $res->input('id37');

        $mon42 = $res->input('mon42');
        $giaovien42 = $res->input('giaovien42');
        $id42 = $res->input('id42');

        $mon43 = $res->input('mon43');
        $giaovien43 = $res->input('giaovien43');
        $id43 = $res->input('id43');

        $mon44 = $res->input('mon44');
        $giaovien44 = $res->input('giaovien44');
        $id44 = $res->input('id44');

        $mon45 = $res->input('mon45');
        $giaovien45 = $res->input('giaovien45');
        $id45 = $res->input('id45');

        $mon46 = $res->input('mon46');
        $giaovien46 = $res->input('giaovien46');
        $id46 = $res->input('id46');

        $mon47 = $res->input('mon47');
        $giaovien47 = $res->input('giaovien47');
        $id47 = $res->input('id47');

        $mon52 = $res->input('mon52');
        $giaovien52 = $res->input('giaovien52');
        $id52 = $res->input('id52');

        $mon53 = $res->input('mon53');
        $giaovien53 = $res->input('giaovien53');
        $id53 = $res->input('id53');

        $mon54 = $res->input('mon54');
        $giaovien54 = $res->input('giaovien54');
        $id54 = $res->input('id54');

        $mon55 = $res->input('mon55');
        $giaovien55 = $res->input('giaovien55');
        $id55 = $res->input('id55');

        $mon56 = $res->input('mon56');
        $giaovien56 = $res->input('giaovien56');
        $id56 = $res->input('id56');

        $mon57 = $res->input('mon57');
        $giaovien57 = $res->input('giaovien57');
        $id57 = $res->input('id57');

        $ngayapdung = $res->input('ngayapdung');
        $buoi = Session::get('buoi');

        DB::table('tbl_thoikhoabieu_ngay')->where('buoi', $buoi)->update(['ngayapdung' => $ngayapdung]);
        

        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id12)->update(['mon' => $mon12 , 'giaovien' => $giaovien12]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id13)->update(['mon' => $mon13 , 'giaovien' => $giaovien13]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id14)->update(['mon' => $mon14 , 'giaovien' => $giaovien14]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id15)->update(['mon' => $mon15 , 'giaovien' => $giaovien15]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id16)->update(['mon' => $mon16 , 'giaovien' => $giaovien16]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id17)->update(['mon' => $mon17 , 'giaovien' => $giaovien17]);

        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id22)->update(['mon' => $mon22 , 'giaovien' => $giaovien22]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id23)->update(['mon' => $mon23 , 'giaovien' => $giaovien23]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id24)->update(['mon' => $mon24 , 'giaovien' => $giaovien24]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id25)->update(['mon' => $mon25 , 'giaovien' => $giaovien25]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id26)->update(['mon' => $mon26 , 'giaovien' => $giaovien26]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id27)->update(['mon' => $mon27 , 'giaovien' => $giaovien27]);

        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id32)->update(['mon' => $mon32 , 'giaovien' => $giaovien32]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id33)->update(['mon' => $mon33 , 'giaovien' => $giaovien33]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id34)->update(['mon' => $mon34 , 'giaovien' => $giaovien34]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id35)->update(['mon' => $mon35 , 'giaovien' => $giaovien35]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id36)->update(['mon' => $mon36 , 'giaovien' => $giaovien36]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id37)->update(['mon' => $mon37 , 'giaovien' => $giaovien37]);

        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id42)->update(['mon' => $mon42 , 'giaovien' => $giaovien42]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id43)->update(['mon' => $mon43 , 'giaovien' => $giaovien43]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id44)->update(['mon' => $mon44 , 'giaovien' => $giaovien44]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id45)->update(['mon' => $mon45 , 'giaovien' => $giaovien45]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id46)->update(['mon' => $mon46 , 'giaovien' => $giaovien46]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id47)->update(['mon' => $mon47 , 'giaovien' => $giaovien47]);

        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id52)->update(['mon' => $mon52 , 'giaovien' => $giaovien52]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id53)->update(['mon' => $mon53 , 'giaovien' => $giaovien53]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id54)->update(['mon' => $mon54 , 'giaovien' => $giaovien54]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id55)->update(['mon' => $mon55 , 'giaovien' => $giaovien55]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id56)->update(['mon' => $mon56 , 'giaovien' => $giaovien56]);
        DB::table('tbl_thoikhoabieu_hocsinh')->where('id', $id57)->update(['mon' => $mon57 , 'giaovien' => $giaovien57]);
        
        return Redirect::to('/admin/thoikhoabieu/hocsinh');
        

    }
    //update tkb giao vien
    public function update_tkb_giaovien(Request $res){

        $mon12 = $res->input('mon12');
        $lop12 = $res->input('lop12');
        $id12 = $res->input('id12');

        $mon13 = $res->input('mon13');
        $lop13 = $res->input('lop13');
        $id13 = $res->input('id13');

        $mon14 = $res->input('mon14');
        $lop14 = $res->input('lop14');
        $id14 = $res->input('id14');

        $mon15 = $res->input('mon15');
        $lop15 = $res->input('lop15');
        $id15 = $res->input('id15');

        $mon16 = $res->input('mon16');
        $lop16 = $res->input('lop16');
        $id16 = $res->input('id16');

        $mon17 = $res->input('mon17');
        $lop17 = $res->input('lop17');
        $id17 = $res->input('id17');

        $mon22 = $res->input('mon22');
        $lop22 = $res->input('lop22');
        $id22 = $res->input('id22');

        $mon23 = $res->input('mon23');
        $lop23 = $res->input('lop23');
        $id23 = $res->input('id23');

        $mon24 = $res->input('mon24');
        $lop24 = $res->input('lop24');
        $id24 = $res->input('id24');

        $mon25 = $res->input('mon25');
        $lop25 = $res->input('lop25');
        $id25 = $res->input('id25');

        $mon26 = $res->input('mon26');
        $lop26 = $res->input('lop26');
        $id26 = $res->input('id26');

        $mon27 = $res->input('mon27');
        $lop27 = $res->input('lop27');
        $id27 = $res->input('id27');

        $mon32 = $res->input('mon32');
        $lop32 = $res->input('lop32');
        $id32 = $res->input('id32');

        $mon33 = $res->input('mon33');
        $lop33 = $res->input('lop33');
        $id33 = $res->input('id33');

        $mon34 = $res->input('mon34');
        $lop34 = $res->input('lop34');
        $id34 = $res->input('id34');

        $mon35 = $res->input('mon35');
        $lop35 = $res->input('lop35');
        $id35 = $res->input('id35');

        $mon36 = $res->input('mon36');
        $lop36 = $res->input('lop36');
        $id36 = $res->input('id36');

        $mon37 = $res->input('mon37');
        $lop37 = $res->input('lop37');
        $id37 = $res->input('id37');

        $mon42 = $res->input('mon42');
        $lop42 = $res->input('lop42');
        $id42 = $res->input('id42');

        $mon43 = $res->input('mon43');
        $lop43 = $res->input('lop43');
        $id43 = $res->input('id43');

        $mon44 = $res->input('mon44');
        $lop44 = $res->input('lop44');
        $id44 = $res->input('id44');

        $mon45 = $res->input('mon45');
        $lop45 = $res->input('lop45');
        $id45 = $res->input('id45');

        $mon46 = $res->input('mon46');
        $lop46 = $res->input('lop46');
        $id46 = $res->input('id46');

        $mon47 = $res->input('mon47');
        $lop47 = $res->input('lop47');
        $id47 = $res->input('id47');

        $mon52 = $res->input('mon52');
        $lop52 = $res->input('lop52');
        $id52 = $res->input('id52');

        $mon53 = $res->input('mon53');
        $lop53 = $res->input('lop53');
        $id53 = $res->input('id53');

        $mon54 = $res->input('mon54');
        $lop54 = $res->input('lop54');
        $id54 = $res->input('id54');

        $mon55 = $res->input('mon55');
        $lop55 = $res->input('lop55');
        $id55 = $res->input('id55');

        $mon56 = $res->input('mon56');
        $lop56 = $res->input('lop56');
        $id56 = $res->input('id56');

        $mon57 = $res->input('mon57');
        $lop57 = $res->input('lop57');
        $id57 = $res->input('id57');

        $ngayapdung = $res->input('ngayapdung');
        $buoi = Session::get('buoi');

        DB::table('tbl_thoikhoabieu_ngay')->where('buoi', $buoi)->update(['ngayapdung' => $ngayapdung]);

        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id12)->update(['mon' => $mon12 , 'lop' => $lop12]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id13)->update(['mon' => $mon13 , 'lop' => $lop13]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id14)->update(['mon' => $mon14 , 'lop' => $lop14]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id15)->update(['mon' => $mon15 , 'lop' => $lop15]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id16)->update(['mon' => $mon16 , 'lop' => $lop16]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id17)->update(['mon' => $mon17 , 'lop' => $lop17]);

        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id22)->update(['mon' => $mon22 , 'lop' => $lop22]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id23)->update(['mon' => $mon23 , 'lop' => $lop23]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id24)->update(['mon' => $mon24 , 'lop' => $lop24]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id25)->update(['mon' => $mon25 , 'lop' => $lop25]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id26)->update(['mon' => $mon26 , 'lop' => $lop26]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id27)->update(['mon' => $mon27 , 'lop' => $lop27]);

        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id32)->update(['mon' => $mon32 , 'lop' => $lop32]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id33)->update(['mon' => $mon33 , 'lop' => $lop33]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id34)->update(['mon' => $mon34 , 'lop' => $lop34]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id35)->update(['mon' => $mon35 , 'lop' => $lop35]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id36)->update(['mon' => $mon36 , 'lop' => $lop36]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id37)->update(['mon' => $mon37 , 'lop' => $lop37]);

        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id42)->update(['mon' => $mon42 , 'lop' => $lop42]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id43)->update(['mon' => $mon43 , 'lop' => $lop43]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id44)->update(['mon' => $mon44 , 'lop' => $lop44]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id45)->update(['mon' => $mon45 , 'lop' => $lop45]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id46)->update(['mon' => $mon46 , 'lop' => $lop46]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id47)->update(['mon' => $mon47 , 'lop' => $lop47]);

        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id52)->update(['mon' => $mon52 , 'lop' => $lop52]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id53)->update(['mon' => $mon53 , 'lop' => $lop53]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id54)->update(['mon' => $mon54 , 'lop' => $lop54]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id55)->update(['mon' => $mon55 , 'lop' => $lop55]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id56)->update(['mon' => $mon56 , 'lop' => $lop56]);
        DB::table('tbl_thoikhoabieu_giaovien')->where('id', $id57)->update(['mon' => $mon57 , 'lop' => $lop57]);
        
        return Redirect::to('/admin/thoikhoabieu/giaovien');
    }

    //insert sự kiện
    public function admin_event(){
        return view('admin.event.admin-event');
    }
    public function admin_insert_event(Request $res){
        $tieude = $res->input('tieude');
        $tensukien = $res->input('tensukien');
        $ngaytochuc = $res->input('ngaytochuc');
        $thoigian = $res->input('thoigian');
        $diachi = $res->input('diachi');
        $insert = DB::table('tbl_sukien')->insert([
            'title' => $tieude,
            'tensukien' => $tensukien,
            'ngaytochuc' => $ngaytochuc,
            'thoigian' => $thoigian,
            'diachi' => $diachi
        ]);
        if($insert){
            Session::put('message', 'Thêm sự kiện thành công !');
        }
        return Redirect::to('/admin/su-kien-sap-toi');
    }

    //update lãnh đạo
    public function admin_lanhdao(){
        $lanhdao = DB::table('tbl_lanhdao')->orderby('lanhdao_id', 'asc')->get();
        return view('admin.lanhdao.admin-lanhdao')->with('lanhdao', $lanhdao);
    }
    public function admin_update_lanhdao(Request $res){
        $chucvu0 = $res->input('chucvu0');
        $img0 = '../frontend/images/lanhdao/'.$res->input('img0');
        $hoten0 = $res->input('hoten0');
        $ngaysinh0 = $res->input('ngaysinh0');
        $gioitinh0 = $res->input('gioitinh0');
        $nhiemky0 = $res->input('nhiemky0');

        $chucvu1 = $res->input('chucvu1');
        $img1 = '../frontend/images/lanhdao/'.$res->input('img1');
        $hoten1 = $res->input('hoten1');
        $ngaysinh1 = $res->input('ngaysinh1');
        $gioitinh1 = $res->input('gioitinh1');
        $nhiemky1 = $res->input('nhiemky1');

        $chucvu2 = $res->input('chucvu2');
        $img2 = '../frontend/images/lanhdao/'.$res->input('img2');
        $hoten2 = $res->input('hoten2');
        $ngaysinh2 = $res->input('ngaysinh2');
        $gioitinh2 = $res->input('gioitinh2');
        $nhiemky2 = $res->input('nhiemky2');

        $update0 = DB::table('tbl_lanhdao')->where('lanhdao_id', 1)->where('lanhdao_chucvu', $chucvu0)->update([
            'lanhdao_hoten' => $hoten0,
            'lanhdao_ngaysinh' => $ngaysinh0,
            'lanhdao_gioitinh' => $gioitinh0,
            'lanhdao_nhiemky' => $nhiemky0,
            'lanhdao_hinhanh' => $img0

        ]);
        $update1 = DB::table('tbl_lanhdao')->where('lanhdao_id', 2)->where('lanhdao_chucvu', $chucvu1)->update([
            'lanhdao_hoten' => $hoten1,
            'lanhdao_ngaysinh' => $ngaysinh1,
            'lanhdao_gioitinh' => $gioitinh1,
            'lanhdao_nhiemky' => $nhiemky1,
            'lanhdao_hinhanh' => $img1

        ]);
        $update2 = DB::table('tbl_lanhdao')->where('lanhdao_id', 3)->where('lanhdao_chucvu', $chucvu2)->update([
            'lanhdao_hoten' => $hoten2,
            'lanhdao_ngaysinh' => $ngaysinh2,
            'lanhdao_gioitinh' => $gioitinh2,
            'lanhdao_nhiemky' => $nhiemky2,
            'lanhdao_hinhanh' => $img2

        ]);
        if ($update0 and $update1 and $update2) {
            Session::put('message', 'Cập nhật thành công !');
        } else{
            Session::put('message', 'Cập nhật chưa thành công !');
        }
        return Redirect::to('/admin/cap-nhat-lanh-dao');
        
    }

    public function dang_tin_tuc(){
        return view('admin.tintuc.dang-tin-tuc');
    }
    public function dang_tin_tuc_submit(Request $res){
        $tieude = $res->input('tieude');
        $img = $res->input('img');
        $noidung = $res->input('noidung');
        $thoigian = Carbon::now();
        $insert = DB::table('tbl_tintuc')->insert([
            'TieuDe' => $tieude,
            'Hinh' => $img,
            'NoiDung' => $noidung,
            'NgayDang' => $thoigian,
        ]);

        if ($insert) {
            Session::put('message', 'Đăng tin tức thành công !');
            return Redirect::to('/admin/dang-tin-tuc');
        }
    }
    
    public function sua_tin_tuc($id){
        $tintuc = DB::table('tbl_tintuc')->where('id', $id)->get();
        return view('admin.tintuc.sua-tin-tuc')->with('tintuc', $tintuc);
    }
    public function sua_tin_tuc_submit(Request $res, $id){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        $tieude = $res->input('tieude');
        $img = $res->input('img');
        $noidung = $res->input('nd1');

        $update = DB::table('tbl_tintuc')->where('id', $id)->update([
            'TieuDe' => $tieude,
            'Hinh' => $img,
            'NoiDung' => $noidung
        ]);
        if($update){
            Session::put('message', 'Sửa thành công !');
            return Redirect::to('/admin/cap-nhat-tin-tuc');
        }
    }
    public function cap_nhat_tin_tuc(){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        $tintuc = DB::table('tbl_tintuc')->paginate('20');
        return view('admin.tintuc.cap-nhat-tin-tuc')->with('tintuc', $tintuc);
    }
    public function xoa_tin_tuc($id){
        $admin_name = Session::get('admin_name');
        if (!$admin_name) {
            return Redirect::to('/login ');
        }
        DB::table('tbl_tintuc')->where('id', $id)->delete();
        Session::put('message', 'Xóa thành công !');
        return Redirect::to('/admin/cap-nhat-tin-tuc');
    }
   
}
