@extends('admin.layoutAdmin')
@section('admin_content')

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    
    <div class="container">
        <div class="row alert alert-success title">
            <div class="col">
                <h1>Cập nhật giáo viên - nhân viên</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table id="example" class="table table-hover table-responsive-xl" width="100%" data-page-length="10" data-order="[[ 1, &quot;asc&quot; ]]">
                    <thead>
                        <tr align="center">
                            <th>STT</th>
                            <th>Họ tên</th>
                            <th>Môn dạy</th>
                            <th>Chức vụ</th>
                            <th>Ngày sinh</th>
                            <th>Số điện thoại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($giaovien as $key => $gv)
                        <tr>
                            <td align="center">{{++$key}}</td>
                            <td>{{$gv->hoten}}</td>
                            <td>{{$gv->monday}}</td>
                            <td align="center">{{$gv->chucvu}}</td>
                            <td align="center">{{date("d-m-Y", strtotime($gv->ngaysinh))}}</td>
                            <td align="center">{{$gv->sdt}}</td>
                            <td align="center"><a href="{{route('sua-giao-vien',['id' => $gv->id])}}"><i class="far fa-edit"></i></a></td>
                            <td align="center"><a href="{{route('xoa-giao-vien',['id' => $gv->id])}}"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{('../backend/datatable/js/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="{{('../backend/datatable/js/script.js')}}"></script>
@endsection