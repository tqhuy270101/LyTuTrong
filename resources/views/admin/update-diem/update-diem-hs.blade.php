
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
                <h1 class="text-title">Cập nhật bảng điểm</h1>
            </div>
        </div>
        <div class="row justify-content-around link">
            <div class="col-10">
                <span><a class="text-link" href="{{URL::to('/')}}">Giáo viên</a></span> <i class="fas fa-arrow-right text-white"></i>
                <span><a class="text-link" href="{{URL::to('/thong-bao/bang-diem')}}">Cập nhật điểm</a></span> 
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
                    <form method="post">
                        {{csrf_field()}}
                        <table class="table-responsive table-bordered" style="margin-bottom: 50px; width: 100%" align="center">
                            <tr align="center" >
                                <th rowspan="2">Học kì</th>
                                <th colspan="10" style="width:80%">Điểm môn học</th>
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
                            <tr align="center">
                                <th>Học kì {{$id}}</th>
                                @foreach($bangdiem as $hk1)
                                <td><input class="form-control" type="text" name="toan" value="{{ $hk1->toan }}"></td>
                                <td><input class="form-control" type="text" name="ly" value="{{ $hk1->ly }}"></td>
                                <td><input class="form-control" type="text" name="hoa" value="{{ $hk1->hoa }}"></td>
                                <td><input class="form-control" type="text" name="sinh" value="{{ $hk1->sinh }}"></td>
                                <td><input class="form-control" type="text" name="nguvan" value="{{ $hk1->nguvan }}"></td>
                                <td><input class="form-control" type="text" name="anhvan" value="{{ $hk1->anhvan }}"></td>
                                <td><input class="form-control" type="text" name="su" value="{{ $hk1->su }}"></td>
                                <td><input class="form-control" type="text" name="dia" value="{{ $hk1->dia }}"></td>
                                <td><input class="form-control" type="text" name="congnghe" value="{{ $hk1->congnghe }}"></td>
                                <td><input class="form-control" type="text" name="GDCD" value="{{ $hk1->GDCD }}"></td>
                                @endforeach
                            </tr>
                        </table>
                        <div align="center">
                            <button class="btn btn-danger" type="submit" style="">Cập nhật ngay</button>
                        </div>
                    </form>
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