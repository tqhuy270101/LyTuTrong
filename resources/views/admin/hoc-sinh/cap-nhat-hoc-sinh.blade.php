@extends('admin.layoutAdmin')
@section('admin_content')

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    
    <div class="container">
        <div class="row alert alert-success title">
            <div class="col">
                <h1>Cập nhật học sinh</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table id="example" class="table table-hover table-responsive-xl" width="100%" data-page-length="10" data-order="[[ 1, &quot;asc&quot; ]]">
                    <thead>
                        <tr align="center">
                            <th>STT</th>
                            <th>Họ tên</th>
                            <th>Ngày sinh</th>
                            <th>Địa chỉ</th>
                            <th>Lớp</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hocsinh as $key => $hs)
                        <tr>
                            <td align="center">{{$key}}</td>
                            <td>{{$hs->hoten}}</td>
                            <td align="center">{{$hs->ngay_sinh}}</td>
                            <td>{{$hs->dia_chi}}</td>
                            <td align="center">{{$hs->lop}}</td>
                            <td align="center"><a href="{{route('sua-hoc-sinh',['id' => $hs->id_hocsinh])}}"><i class="far fa-edit"></i></a></td>
                            <td align="center"><a href="{{route('xoa-hoc-sinh',['id' => $hs->id_hocsinh])}}"><i class="far fa-trash-alt"></i></a></td>
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