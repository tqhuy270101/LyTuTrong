<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\thoikhoabieuController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\gioithieuController;
use App\Http\Controllers\thongbaoController;
use App\Http\Controllers\tintucController;
use App\Http\Controllers\tailieuController;
use App\Http\controllers\khoahocController;
use App\Http\controllers\adminUpdateController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [layoutController::class, 'trangchu']);
Route::get('/trangchu', [layoutController::class, 'trangchu']);
Route::get('/thong-bao/thoikhoabieu', [layoutController::class, 'thoikhoabieu']);

//tkb
//khoi6
Route::get('/thongbao/thoikhoabieu/hocsinh/lop6A', [thoikhoabieuController::class, 'thoikhoabieulop6A']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop6A/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop6A']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop6B', [thoikhoabieuController::class, 'thoikhoabieulop6B']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop6B/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop6B']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop6C', [thoikhoabieuController::class, 'thoikhoabieulop6C']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop6C/sang', [thoikhoabieuController::class, 'thoikhoabieu_sanglop6C']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop6D', [thoikhoabieuController::class, 'thoikhoabieulop6D']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop6D/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop6D']);


//khoi7
Route::get('/thongbao/thoikhoabieu/hocsinh/lop7A', [thoikhoabieuController::class, 'thoikhoabieulop7A']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop7A/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop7A']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop7B', [thoikhoabieuController::class, 'thoikhoabieulop7B']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop7B/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop7B']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop7C', [thoikhoabieuController::class, 'thoikhoabieulop7C']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop7C/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop7C']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop7D', [thoikhoabieuController::class, 'thoikhoabieulop7D']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop7D/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop7D']);


//khoi8
Route::get('/thongbao/thoikhoabieu/hocsinh/lop8A', [thoikhoabieuController::class, 'thoikhoabieulop8A']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop8A/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop8A']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop8B', [thoikhoabieuController::class, 'thoikhoabieulop8B']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop8B/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop8B']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop8C', [thoikhoabieuController::class, 'thoikhoabieulop8C']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop8C/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop8C']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop8D', [thoikhoabieuController::class, 'thoikhoabieulop8D']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop8D/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop8D']);

//khoi9
Route::get('/thongbao/thoikhoabieu/hocsinh/lop9A', [thoikhoabieuController::class, 'thoikhoabieulop9A']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop9A/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop9A']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop9B', [thoikhoabieuController::class, 'thoikhoabieulop9B']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop9B/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop9B']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop9C', [thoikhoabieuController::class, 'thoikhoabieulop9C']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop9C/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop9C']);

Route::get('/thongbao/thoikhoabieu/hocsinh/lop9D', [thoikhoabieuController::class, 'thoikhoabieulop9D']);
Route::get('/thongbao/thoikhoabieu/hocsinh/lop9D/sang', [thoikhoabieuController::class, 'thoikhoabieu_sang_lop9D']);

//tkb giáo viên
Route::get('/thong-bao/thoi-khoa-bieu/giao-vien', [thoikhoabieuController::class, 'tkb_giaovien'])->name('tkb-giaovien');
Route::post('/thong-bao/thoi-khoa-bieu/giao-vien', [thoikhoabieuController::class, 'tkb_giaovien_submit'])->name('tkb-giaovien-submit');




//gioithieu
Route::get('/gioi-thieu/lich-su-hinh-thanh', [gioithieuController::class, 'lich_su_hinh_thanh']);
Route::get('/gioi-thieu/co-cau-to-chuc', [gioithieuController::class, 'co_cau_to_chuc']);
Route::get('/gioi-thieu/thanh-tich', [gioithieuController::class, 'thanh_tich']);
Route::get('/gioi-thieu/noi-quy-truong-hoc', [gioithieuController::class, 'noi_quy_truong_hoc']);

//thongbao
Route::get('/thong-bao/bang-diem', [thongbaoController::class, 'bang_diem']);
Route::get('/thong-bao/bang-diem/lop{lop}', [thongbaoController::class, 'bang_diem_lop'])->name('bang-diem-lop');
Route::post('/thong-bao/bang-diem/lop{lop}', [thongbaoController::class, 'bang_diem_submit']);

Route::get('/thong-bao/lich-thi', [thongbaoController::class, 'lich_thi']);
Route::get('/thong-bao/lich-cong-tac', [thongbaoController::class, 'lich_cong_tac']);

// tin tức
Route::get('/tin-tuc', [tintucController::class, 'home_tintuc']);
Route::get('/tin-tuc/Xem-tin-tuc/id={id}', [tintucController::class, 'xem_tin_tuc'])->name('xem-tin-tuc');



//khóa học
Route::get('/khoa-hoc', [khoahocController::class, 'khoa_hoc']);
Route::get('/khoa-hoc/khoi={khoi}/mon={mon}', [khoahocController::class, 'tai_lieu_mon'])->name('tai-lieu-mon');

//lien hệ
Route::get('/lien-he', [thongbaoController::class, 'lien_he']);







//admin
Route::get('/admin', [adminController::class, 'show_dashboard']);
Route::get('/login', [adminController::class, 'index']);
Route::get('/admin/dashboard', [adminController::class, 'show_dashboard']);
Route::post('/admin/admin-dashboard', [adminController::class, 'dashboard']);
Route::get('/logout', [adminController::class, 'logout']);
Route::get('/logout-giaovien', [adminController::class, 'logout_giaovien']);


//admin tkb
Route::get('/admin/thoikhoabieu/giaovien', [adminController::class, 'tkb_giaovien']);
Route::post('/admin/thoikhoabieu/giaovien', [adminController::class, 'tkb_giaovien_name'])->name('tkb-giaovien-name');


Route::get('/admin/thoikhoabieu/hocsinh', [adminController::class, 'tkb_hocsinh']);
Route::post('/admin/thoikhoabieu/hocsinh', [adminController::class, 'tkb_hocsinh_lop'])->name('tkb-hocsinh-lop');




//update tkb hoc sinh
Route::post('/admin/thoikhoabieu/hocsinh/update', [adminController::class, 'update_tkb_hocsinh'])->name('update-tkb-hocsinh');
//update tkb giao viên
Route::post('/admin/thoikhoabieu/giaovien/update', [adminController::class, 'update_tkb_giaovien'])->name('update-tkb-giaovien');


//insert Sự kiện
Route::get('/admin/su-kien-sap-toi', [adminController::class, 'admin_event'])->name('admin-event');
Route::post('/admin/su-kien-sap-toi', [adminController::class, 'admin_insert_event'])->name('admin-insert-event');


//update lanhdao
Route::get('/admin/cap-nhat-lanh-dao', [adminController::class, 'admin_lanhdao'])->name('admin-lanhdao');
Route::post('/admin/cap-nhat-lanh-dao', [adminController::class, 'admin_update_lanhdao'])->name('admin-update-lanhdao');


//dang tin tuc
Route::get('/admin/dang-tin-tuc', [adminController::class, 'dang_tin_tuc']);
Route::post('/admin/dang-tin-tuc', [adminController::class, 'dang_tin_tuc_submit']);
//capnhat tin tuc
Route::get('/admin/cap-nhat-tin-tuc', [adminController::class, 'cap_nhat_tin_tuc']);
Route::get('/admin/sua-tin-tuc/id={id}', [adminController::class, 'sua_tin_tuc'])->name('sua-tin-tuc');
Route::post('/admin/sua-tin-tuc/id={id}', [adminController::class, 'sua_tin_tuc_submit']);
Route::get('/admin/xoa-tin-tuc/id={id}', [adminController::class, 'xoa_tin_tuc'])->name('xoa-tin-tuc');


// cập nhật tài liệu học tập
Route::get('/admin/tai-lieu-hoc-tap', [tailieuController::class, 'tailieu_hoctap']);
Route::post('/admin/tai-lieu-hoc-tap', [tailieuController::class, 'tailieu_hoctap_submit'])->name('tailieu-hoctap-submit');


// giáo viên cập nhật điểm
Route::get('/giaovien/cap-nhat-diem', [tailieuController::class, 'update_diem']);
Route::get('/giaovien/cap-nhat-diem/hocky={hocky}/id={id}', [tailieuController::class, 'update_diem_hs'])->name('update-diem-hs');
Route::post('/giaovien/cap-nhat-diem/hocky={hocky}/id={id}', [tailieuController::class, 'submit_diem']);

//admin học sinh
Route::get('/admin/them-hoc-sinh', [adminUpdateController::class, 'them_hoc_sinh']);
Route::post('/admin/them-hoc-sinh', [adminUpdateController::class, 'them_hoc_sinh_submit']);
Route::get('/admin/cap-nhat-hoc-sinh', [adminUpdateController::class, 'cap_nhat_hoc_sinh']);
Route::get('/admin/xoa-hoc-sinh/id={id}', [adminUpdateController::class, 'xoa_hoc_sinh'])->name('xoa-hoc-sinh');
Route::get('/admin/sua-hoc-sinh/id={id}', [adminUpdateController::class, 'sua_hoc_sinh'])->name('sua-hoc-sinh');
Route::post('/admin/sua-hoc-sinh/id={id}', [adminUpdateController::class, 'sua_hoc_sinh_submit']);



//admin giao vien
Route::get('/admin/them-giao-vien', [adminUpdateController::class, 'them_giao_vien']);
Route::post('/admin/them-giao-vien', [adminUpdateController::class, 'them_giao_vien_submit']);
Route::get('/admin/cap-nhat-giao-vien', [adminUpdateController::class, 'cap_nhat_giao_vien']);
Route::get('/admin/xoa-giao-vien/id={id}', [adminUpdateController::class, 'xoa_giao_vien'])->name('xoa-giao-vien');
Route::get('/admin/sua-giao-vien/id={id}', [adminUpdateController::class, 'sua_giao_vien'])->name('sua-giao-vien');
Route::post('/admin/sua-giao-vien/id={id}', [adminUpdateController::class, 'sua_giao_vien_submit']);



//cập nhật profile
Route::get('/admin/my-profile', [adminUpdateController::class, 'my_profile'])->name('my-profile');
Route::get('/admin/my-profile/cap-nhat', [adminUpdateController::class, 'cap_nhat_profile'])->name('cap-nhat-profile');
Route::post('/admin/my-profile/cap-nhat', [adminUpdateController::class, 'update_profile']);




/*mail*/
Route::post('/trangchu', [EmailController::class, 'sendEmail'])->name('send.email');






