@extends('admin.layoutAdmin')
@section('admin_content')
    <div class="container">
        <div class="row alert alert-success title">
            <div class="col">
                <h1>Sửa thông tin giáo viên</h1>
            </div>
        </div>
        <div class="row justify-content-center form-update-hocsinh">
            <div class="col-6">
                <form method="post">
                    {{csrf_field()}}
                    @foreach($giaovien as $gv)
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Họ tên:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="hoten" value="{{$gv->hoten}}" placeholder="Họ tên giáo viên" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Môn dạy:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$gv->monday}}" name="monday">                                
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Chức vụ</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="chucvu">
                                <?php
                                    if ($gv->chucvu == 'Giáo viên') {
                                        echo '
                                        <option selected value="Giáo viên">Giáo viên</option>
                                        <option value="Nhân viên">Nhân viên</option>';
                                    } else {
                                        echo '<option value="Giáo viên">Giáo viên</option>
                                        <option selected value="Nhân viên">Nhân viên</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Ngày sinh:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="date" value="{{$gv->ngaysinh}}" name="ngaysinh">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Số điện thoại:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" value="{{$gv->sdt}}" name="sdt" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div claaa="col">
                            <button class="btn btn-danger">Sửa giáo viên</button>
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection