@extends('admin.layoutAdmin')
@section('admin_content')
    <div class="container-fluid">
        <div class="row alert alert-success" style="margin-top: 50px" align="center">
            <div class="col">
                <h1>Cập nhật tin tức mới</h1>
            </div>
            
        </div>
        <div class="row justify-content-center table" style="padding:50px">
            <div class="col">
                <table  class="table table-responsive table-hover">
                    <tbody>
                        <tr>
                            <th>Tiêu để</th>
                            <th>Ngày đăng</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                        @foreach($tintuc as $tt)
                        <tr>
                            <td>{!!$tt->TieuDe!!}</td>
                            <td>{{$tt->NgayDang}}</td>
                            <td><a href="{{route('sua-tin-tuc',['id'=>$tt->id])}}"><i class="fas fa-pen-alt"></i></a></td>
                            <td><a href="{{route('xoa-tin-tuc',['id'=>$tt->id])}}"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                {{$tintuc->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
@endSection