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
                <form method="post">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Tên:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="ten" value="{{$name}}">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Email:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="email" value="{{$email}}">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Số điện thoại:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="phone" value="{{$phone}}">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Mật khẩu mới:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="password" name="matkhaumoi">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Mật khẩu cũ:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="password" name="matkhaucu">
                        </div>
                        <hr>
                    </div>
                    <div class="form-group row justify-content-center">
                        <button class="btn btn-danger">Cập nhật thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection