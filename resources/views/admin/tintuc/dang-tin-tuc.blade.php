@extends('admin.layoutAdmin')
@section('admin_content')
    <div class="container">
        <div class="row alert alert-success" style="margin-top: 50px" align="center">
            <div class="col">
                <h1>Thêm tin tức mới</h1>
            </div>
        </div>
        <div class="row" align="center" style="padding:50px">
            <div class="col-12">
                <form action="" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="" class="col-sm-3 text-dang-tintuc">Tiêu đề:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control form-dang-tintuc" name="tieude" placeholder="Tiêu đề">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 text-dang-tintuc">Ảnh nổi bật:</label>
                        <div class="col-sm-12">
                            <input type="file" class="form-control form-dang-tintuc" name="img" style="padding-top:10px">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 text-dang-tintuc">Nội dung:</label>
                        <div class="col-sm-10">
                            <textarea  id="noidung" name="noidung"></textarea>
                        </div>
                    </div>
                    <button type="submit" style="margin:50px; width:200px; height: 50px; font-size: 18px" class="btn btn-outline-danger">Thêm tin tức</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('noidung');
    </script>
@endSection