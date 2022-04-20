@extends('admin.layoutAdmin')
@section('admin_content')
    <div class="container">
        <form action="{{ route('update-tkb-giaovien') }}" method="post">
            {{ csrf_field() }}
            <div class="alert alert-success tkb-title" role="alert">
                <div class="row ">
                    <div class="col" align="center">
                        <h2>Thời khóa biểu giáo viên - Buổi {{ $buoi }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                            <b>Tuần học thứ: {{ $thoigian->week() }}</b>
                    </div>
                    <div class="col">
                        @foreach($name_giaovien as $tkb)
                        <b>Giáo viên: {{$tkb->hoten}}</b> 
                        @endforeach
                    </div>
                    <div class="col">
                        @foreach($ngayapdung as $ngay)
                        
                        <b>Ngày áp dụng: <input type="date" value="{{ $ngay->ngayapdung }}" name="ngayapdung"></b>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table-responsive table-striped">
                        <tr align="center">
                            <th>Tiết</th>
                            <th>Thứ 2</th>
                            <th>Thứ 3</th>
                            <th>Thứ 4</th>
                            <th>Thứ 5</th>
                            <th>Thứ 6</th>
                            <th>Thứ 7</th>
                        </tr>
                        <tr align="center">
                            <th>1</th>
                            @foreach($tkb_t1 as $key=> $tkb1)
                                <td>
                                    <div class="form-edit">
                                        <input class="form-control edit-tkb" type="text"  value="{{ $tkb1->mon }}" name="mon1{{2+$key}}" placeholder="Nhập môn học" required><br>
                                        <input class="form-control edit-tkb" type="text"  value="{{ $tkb1->lop }}" name="lop1{{ 2+$key }}" placeholder="Nhập tên GV"required>
                                        <input class="form-control edit-tkb-id" type="text"  value="{{ $tkb1->id }}" name="id1{{ 2+$key }}" readonly>
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                        <tr align="center">
                            <th>2</th>
                            @foreach($tkb_t2 as $key=> $tkb2)
                                <td>
                                    <div class="form-edit-chan">
                                        <input class="form-control edit-tkb" type="text"  value="{{ $tkb2->mon }}" name="mon2{{2+$key}}" placeholder="Nhập môn học" required><br>
                                        <input class="form-control edit-tkb" type="text"  value="{{ $tkb2->lop }}" name="lop2{{ 2+$key }}" placeholder="Nhập tên GV" required>
                                        <input class="form-control edit-tkb-id-chan" type="text"  value="{{ $tkb2->id }}" name="id2{{ 2+$key }}" readonly>
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                        <tr align="center">
                            <th>3</th>
                            @foreach($tkb_t3 as $key=> $tkb3)
                                <td>
                                    <div class="form-edit">
                                        <input class="form-control edit-tkb" type="text"  value="{{ $tkb3->mon }}" name="mon3{{2+$key}}" placeholder="Nhập môn học" required><br>
                                        <input class="form-control edit-tkb" type="text"  value="{{ $tkb3->lop }}" name="lop3{{ 2+$key }}" placeholder="Nhập tên GV" required>
                                        <input class="form-control edit-tkb-id" type="text"  value="{{ $tkb3->id }}" name="id3{{ 2+$key }}" readonly>
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                        <tr align="center">
                            <th>4</th>
                            @foreach($tkb_t4 as $key=> $tkb4)
                                <td>
                                    <div class="form-edit-chan">
                                        <input class="form-control edit-tkb" type="text"  value="{{ $tkb4->mon }}" name="mon4{{2+$key}}" placeholder="Nhập môn học" required><br>
                                        <input class="form-control edit-tkb" type="text"  value="{{ $tkb4->lop }}" name="lop4{{ 2+$key }}" placeholder="Nhập tên GV" required>
                                        <input class="form-control edit-tkb-id-chan" type="text"  value="{{ $tkb4->id }}" name="id4{{ 2+$key }}" readonly>
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                        <tr align="center">
                            <th>5</th>
                            @foreach($tkb_t5 as $key=> $tkb5)
                                <td>
                                    <div class="form-edit">
                                        <input class="form-control edit-tkb" type="text"  value="{{ $tkb5->mon }}" name="mon5{{2+$key}}" placeholder="Nhập môn học" required><br>
                                        <input class="form-control edit-tkb" type="text"  value="{{ $tkb5->lop }}" name="lop5{{ 2+$key }}" placeholder="Nhập tên GV" required>
                                        <input class="form-control edit-tkb-id" type="text"  value="{{ $tkb5->id }}" name="id5{{ 2+$key }}" readonly>
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                        <tr align="center">
                            <th colspan="7" style="padding:20px">
                                <button style="height: 50px; width: 250px" class="btn btn-primary">Cập nhật</button>
                            </th>
                        </tr>
                    </table>
                </div>   
            </div>
        </form>
    </div>
    


@endsection