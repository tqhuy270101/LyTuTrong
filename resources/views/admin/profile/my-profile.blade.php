@extends('admin.layoutAdmin')
@section('admin_content')
    <div class="container">
        <?php
            $name = Session::get('admin_name');
            $email = Session::get('admin_email');
            $phone = Session::get('admin_phone');
        ?>
        <div class="row alert alert-success title">
            <div class="col">
                <h1>Quản lý tài khoản</h1>
            </div>
        </div>
        <div class="row justify-content-center form-update-hocsinh table-bordered profile">
            <div class="col-6">
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Tên:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$name}}" readonly>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$email}}" readonly>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Số điện thoại:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$phone}}" readonly>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">password:</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" value="********" readonly>
                    </div>
                    <hr>
                </div>
                <div class="form-group row justify-content-center">
                    <a href="{{route('cap-nhat-profile')}}" class="btn btn-danger" style="padding: 15px 30px 15px 30px; font-size: 16px; margin-top: 20px">Cập nhật thông tin</a>
                </div>
            </div>
        </div>
    </div>
@endsection