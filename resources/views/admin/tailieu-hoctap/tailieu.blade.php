@extends('admin.layoutAdmin')
@section('admin_content')
    <div class="container">
        <div class="row alert alert-success" style="margin-top: 50px" align="center">
            <div class="col">
                <h1>Thêm tài liệu học tập</h1>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 50px">
            <div class="col-6 form-them-tailieu">
                <form action="{{ route('tailieu-hoctap-submit') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" type="text" name="tieude" placeholder="Tiêu đề...">
                    </div>
                    <div class="form-group">
                        <label>Tên môn học</label>
                        <select class="form-control" name="mon" >
                            <option value="Toán">Toán</option>
                            <option value="Lý">Lý</option>
                            <option value="Hóa">Hóa</option>
                            <option value="Sinh">Sinh</option>
                            <option value="Ngữ văn">Ngữ văn</option>
                            <option value="Anh văn">Anh văn</option>
                            <option value="Lịch sử">Lịch sử</option>
                            <option value="Địa lý">Địa lý</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tài liệu khối</label>
                        <select class="form-control" name="khoi" >
                            <option value="6">Khối 6</option>
                            <option value="7">Khối 7</option>
                            <option value="8">Khối 8</option>
                            <option value="9">Khối 9</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>File tài liệu</label>
                        <input class="form-control" type="file" name="file" required>
                    </div>
                    <div align="center" style="margin-top: 50px">
                        <button class="btn btn-outline-danger" style="padding: 20px 50px 20px 50px">Thêm tài liệu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection