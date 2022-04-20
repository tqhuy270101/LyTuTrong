@extends('admin.layoutAdmin')
@section('admin_content')
    <div class="container">
        <div class="row alert alert-success title">
            <div class="col">
                <h1>Thêm học sinh</h1>
            </div>
        </div>
        <div class="row justify-content-center form-update-hocsinh">
            <div class="col-6">
                <form action="" method="post">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Họ tên:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="hoten" placeholder="Họ tên học sinh" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Ngày sinh:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="ngaysinh" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Địa chỉ:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ học sinh" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Lớp:</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="lop">
                                @foreach($lop as $lop)
                                <option value="{{$lop->lop}}">Lớp {{$lop->lop}}</option>
                                @endforeach
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