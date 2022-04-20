
<!DOCTYPE html>
<html>
<head>
    <title>Tra cứu điểm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/load.css')}}">
    

</head>
<body>
    <!-- loadind -->
    <x-loading></x-loading>
    <!-- menu -->
    <x-menu></x-menu>
    <div class="container-fluid background">
        <div class="row justify-content-around link">
            <div class="col-10 offset-col-2">
                <h1 class="text-title">Bảng điểm học sinh</h1>
            </div>
        </div>
        <div class="row justify-content-around link">
            <div class="col-10">
                <span><a class="text-link" href="{{URL::to('/')}}">Trang chủ</a></span> <i class="fas fa-arrow-right text-white"></i>
                <span><a class="text-link" href="{{URL::to('/thong-bao/bang-diem')}}">Bảng điểm</a></span> 
            </div>
        </div>
    </div>
    <div class="container-fluid">
            <div class="row menu-khoahoc" align="center">
                <div class="col" style="margin-top: 30px">
                    <h1 class="text-font-playfair-dislay"><span style="color:#FC9928"><i class="fas fa-search"></i> Tra cứu</span> kết quả học tập</h1>
                    <hr>
                    <div class="btn-group khoahoc">
                        <button type="button" class="btn btn-danger dropdown-toggle button-khoahoc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Khối 6
                        </button>
                        <div class="dropdown-menu khoahoc">
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '6A'])}}">Lớp 6A</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '6B'])}}">Lớp 6B</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '6C'])}}">Lớp 6C</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '6D'])}}">Lớp 6D</a>   
                        </div>
                    </div>
                    <div class="btn-group khoahoc">
                        <button type="button" class="btn btn-danger dropdown-toggle button-khoahoc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Khối 7
                        </button>
                        <div class="dropdown-menu khoahoc">
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '7A'])}}">Lớp 7A</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '7B'])}}">Lớp 7B</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '7C'])}}">Lớp 7C</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '7D'])}}">Lớp 7D</a>
                        </div>
                    </div>
                    <div class="btn-group khoahoc">
                        <button type="button" class="btn btn-danger dropdown-toggle button-khoahoc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Khối 8
                        </button>
                        <div class="dropdown-menu khoahoc">
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '8A'])}}">Lớp 8A</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '8B'])}}">Lớp 8B</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '8C'])}}">Lớp 8C</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '8D'])}}">Lớp 8D</a>
                        </div>
                    </div>
                    <div class="btn-group khoahoc">
                        <button type="button" class="btn btn-danger dropdown-toggle button-khoahoc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Khối 9
                        </button>
                        <div class="dropdown-menu khoahoc">
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '9A'])}}">Lớp 9A</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '9B'])}}">Lớp 9B</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '9C'])}}">Lớp 9C</a>
                            <a class="dropdown-item text-monhoc" href="{{route('bang-diem-lop',['lop' => '9D'])}}">Lớp 9D</a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row alert alert-success" align="center" style="margin-top: 50px">
            <div class="col">
                @foreach($hocsinh as $hs)
                <h3>Bảng điểm học sinh - {{$hs->hoten}}</h3>
                <b>- Lớp {{$hs->lop}} -</b>
                <p>(Năm học: 2020-2021)</p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table">
                    <table class="table-responsive table-bordered table-hover" style="margin-bottom: 50px;">
                        <thead>
                            <tr align="center" >
                                <th rowspan="2">Học kì</th>
                                <th colspan="10" style="width:80%">Môn học</th>
                                <th rowspan="2">Điểm trung bình</th>
                            </tr>
                            <tr align="center">
                                <th>Toán</th>
                                <th>Lý</th>
                                <th>Hóa</th>
                                <th>Sinh học</th>
                                <th>Ngữ văn</th>
                                <th>Anh văn</th>
                                <th>Lịch sử</th>
                                <th>Địa lý</th>
                                <th>Công nghệ</th>
                                <th>GDCD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr align="center">
                                <th>Học kì 1</th>
                                @foreach($bangdiem_hk1 as $hk1)
                                <td>{{ $hk1->toan }}</td>
                                <td>{{$hk1->ly}}</td>
                                <td>{{$hk1->hoa}}</td>
                                <td>{{$hk1->sinh}}</td>
                                <td>{{$hk1->nguvan}}</td>
                                <td>{{$hk1->anhvan}}</td>
                                <td>{{$hk1->su}}</td>
                                <td>{{$hk1->dia}}</td>
                                <td>{{$hk1->congnghe}}</td>
                                <td>{{$hk1->GDCD}}</td>
                                <td>
                                    {{$tbkk1 = ($hk1->toan + $hk1->ly + $hk1->hoa + $hk1->sinh + $hk1->nguvan + $hk1->anhvan + $hk1->su + $hk1->dia + $hk1->congnghe + $hk1->GDCD ) / 10}}
                                </td>
                                @endforeach
                            </tr>
                            <tr align="center">
                                <th>Học kì 2</th>
                                @foreach($bangdiem_hk2 as $hk2)
                                <td>{{ $hk2->toan }}</td>
                                <td>{{$hk2->ly}}</td>
                                <td>{{$hk2->hoa}}</td>
                                <td>{{$hk2->sinh}}</td>
                                <td>{{$hk2->nguvan}}</td>
                                <td>{{$hk2->anhvan}}</td>
                                <td>{{$hk2->su}}</td>
                                <td>{{$hk2->dia}}</td>
                                <td>{{$hk2->congnghe}}</td>
                                <td>{{$hk2->GDCD}}</td>
                                <td>
                                    {{$tbhk2 = ($hk2->toan + $hk2->ly + $hk2->hoa + $hk2->sinh + $hk2->nguvan + $hk2->anhvan + $hk2->su + $hk2->dia + $hk2->congnghe + $hk2->GDCD ) / 10}}
                                </td>
                                
                            </tr>
                            <tr align="center">
                                <th>Cả năm</th>
                                <td>{{ ($hk1->toan + $hk2->toan) / 2 }}</td>
                                <td>{{ ($hk1->ly + $hk2->ly) / 2 }}</td>
                                <td>{{ ($hk1->hoa + $hk2->hoa) / 2 }}</td>
                                <td>{{ ($hk1->sinh + $hk2->sinh) / 2 }}</td>
                                <td>{{ ($hk1->nguvan + $hk2->nguvan) / 2 }}</td>
                                <td>{{ ($hk1->anhvan + $hk2->anhvan) / 2 }}</td>
                                <td>{{ ($hk1->su + $hk2->su) / 2 }}</td>
                                <td>{{ ($hk1->dia + $hk2->dia) / 2 }}</td>
                                <td>{{ ($hk1->congnghe + $hk2->congnghe) / 2 }}</td>
                                <td>{{ ($hk1->GDCD + $hk2->GDCD) / 2 }}</td>
                                <td>{{ ($tbkk1 + $tbhk2) / 2}}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <x-footer></x-footer>

<script type="text/javascript" src="{{asset('../frontend/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../frontend/js/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>