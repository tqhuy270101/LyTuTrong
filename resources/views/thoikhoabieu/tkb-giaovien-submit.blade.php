@extends('thoikhoabieu')
@section('thoikhoabieu_content')
    <div class="container">
        <div class="alert alert-success" style="margin-top:50px">
            <div class="row" align="center">
                <div class="col">
                    <h2>Thời khóa biểu giáo viên - Buổi {{ $buoi }}</h2>
                </div>
            </div>
            <div class="row" align="center">
                <div class="col">
                    <b>Tuần học thứ: {{ $now->week() }}</b>
                </div>
                <div class="col">
                    @foreach($giaovien as $gv)
                        <b>Giáo viên: {{ $gv->hoten }}</b>
                    @endforeach
                </div>
                <div class="col">
                    @foreach($ngayapdung as $ngay)
                        <b>Ngày áp dụng: {{ date('d-m-Y', strtotime($ngay->ngayapdung)) }}</b>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive table-bordered table-hover table-striped">
                    <table class="table" >
                        <thead>
                            <tr align="center">
                                <th>Tiết</th>
                                <th>Thứ 2</th>
                                <th>Thứ 3</th>
                                <th>Thứ 4</th>
                                <th>Thứ 5</th>
                                <th>Thứ 6</th>
                                <th>Thứ 7</th>
                            </tr>
                        </thead>
                        <tr align="center">
                            <th>1</th>
                            @foreach($tkb_t1 as $t1)
                                <td>
                                    <p>{{ $t1->mon }}</p>
                                    <p>{{ $t1->lop }}</p>
                                </td>
                            @endforeach
                        </tr>
                        <tr align="center">
                            <th>2</th>
                            @foreach($tkb_t2 as $t2)
                                <td>
                                    <p>{{ $t2->mon }}</p>
                                    <p>{{ $t2->lop }}</p>
                                </td>
                            @endforeach
                        </tr>
                        <tr align="center">
                            <th>3</th>
                            @foreach($tkb_t3 as $t3)
                                <td>
                                    <p>{{ $t3->mon }}</p>
                                    <p>{{ $t3->lop }}</p>
                                </td>
                            @endforeach
                        </tr>
                        <tr align="center">
                            <th>4</th>
                            @foreach($tkb_t4 as $t4)
                                <td>
                                    <p>{{ $t4->mon }}</p>
                                    <p>{{ $t4->lop }}</p>
                                </td>
                            @endforeach
                        </tr>
                        <tr align="center">
                            <th>5</th>
                            @foreach($tkb_t5 as $t5)
                                <td>
                                    <p>{{ $t5->mon }}</p>
                                    <p>{{ $t5->lop }}</p>
                                </td>
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
@endsection