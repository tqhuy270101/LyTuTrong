@extends('admin.layoutAdmin')
@section('admin_content')
    
    <div class="container">
        <div class="row alert alert-success title-insert-event" align="center">
            <div class="col">
                <h2>Thêm sự kiện</h2>
            </div>
           
        </div>
        <div class="row justify-content-center form-insert-event">
            <div class="col-8">
                <form action="{{ route('admin-insert-event') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label text-insert-event">Tiêu đề sự kiện</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control text-insert-event" name="tieude" value="Hoạt động ngoại khóa" placeholder="Tiêu đề sự kiện">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label text-insert-event">Tên sự kiện</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control text-insert-event" name="tensukien" placeholder="Tên sự kiện">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label text-insert-event">Ngày tổ chức</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control text-insert-event" name="ngaytochuc" placeholder="Ngày tổ chức">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label text-insert-event">Thời gian diễn ra</label>
                        <div class="col-sm-10">
                        <input type="time" class="form-control text-insert-event" name="thoigian" placeholder="Thời gian diễn ra">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label text-insert-event">Địa chỉ diễn ra</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control text-insert-event" name="diachi" placeholder="Địa chỉ diễn ra">
                        </div>
                    </div><br><br>
                    <div class="form-group" align="center">
                        <button class="btn btn-outline-danger text-insert-event">Thêm sự kiện</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

@endsection