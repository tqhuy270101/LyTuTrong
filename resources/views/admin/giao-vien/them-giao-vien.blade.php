@extends('admin.layoutAdmin')
@section('admin_content')
    <div class="container">
        <div class="row alert alert-success title">
            <div class="col">
                <h1>Thêm giáo viên và nhân viên</h1>
            </div>
        </div>
        <div class="row justify-content-center form-update-hocsinh">
            <div class="col-6">
                <form action="" method="post">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Họ tên:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="hoten" placeholder="Họ tên giáo viên">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Ngày sinh:</label>
                        <div class="col-sm-9">
                            <input type="date" name="ngaysinh" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Số điện thoại:</label>
                        <div class="col-sm-9">
                            <input type="number" name="sdt" class="form-control" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Môn dạy:</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="monday">
                                <option value="Toán">Toán</option>
                                <option value="Vật lý">Vật lý</option>
                                <option value="Hóa học">Hóa học</option>
                                <option value="Sinh học">Sinh học</option>
                                <option value="Lịch sử">Lịch sử</option>
                                <option value="Địa lý">Địa lý</option>
                                <option value="Ngữ văn">Ngữ Văn</option>
                                <option value="Anh văn">Anh văn</option>
                                <option value="Công nghệ">Công nghệ</option>
                                <option value="GDCD">GDCD</option>
                                <option value="Âm nhạc">Âm nhạc</option>
                                <option value="Mỹ thuật">Mỹ thuật</option>
                                <option value="Thể dục">Thể dục</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Chức vụ:</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="chucvu">
                                <option value="Giáo viên">Giáo viên</option>
                                <option value="Nhân viên">Nhân viên</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div claaa="col">
                            <button class="btn btn-danger">Thêm học sinh</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection