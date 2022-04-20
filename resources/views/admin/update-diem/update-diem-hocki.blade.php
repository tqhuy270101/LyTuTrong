
<!DOCTYPE html>
<html>
<head>
    <title>Tra cứu điểm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/load.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/main.css')}}">
    

</head>
<body>
    <?php
        $message = Session::get('message');
        if ($message) {
            echo "<script type='text/javascript'>alert('$message');</script>";
            Session::put('message', null);
        }
    ?>
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
                <span><a class="text-link" href="{{URL::to('/')}}">Trang chủ</a></span> <i class="fas fa-arrow-right text-white"></i>
                <span><a class="text-link" href="{{URL::to('/thong-bao/bang-diem')}}">Cập nhật điểm</a></span> 
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row alert alert-success" align="center" style="margin-top: 50px; margin-bottom:100px">
            <div class="col">
                <?php
                    $chucdanh = Session::get('admin_chucdanh');
                ?>
                <h1 style="padding: 10px">Cập nhật điểm lớp {{$chucdanh}}</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col table">
                <table class="table-responsive-xl table-bordered table-hover" style="width: 100%; margin-bottom: 50px">
                    <thead>
                        <tr align="center">
                            <th rowspan="2">STT</th>
                            <th rowspan="2">Họ tên</th>
                            <th rowspan="2">Ngày sinh</th>
                            <th rowspan="2">Địa chỉ</th>
                            <th rowspan="2">Lớp</th>
                            <th colspan="2">Cập nhật điểm</th>
                        </tr>
                        
                        <tr align="center">
                            <th>Học kì 1</th>
                            <th>Học kì 2</th>
                        </tr>
                    </thead>
                    @foreach($hocsinh as $key => $hs)
                    <tr>
                        <td align="center">{{++$key}}</td>
                        <td>{{$hs->hoten}}</td>
                        <td align="center">{{$hs->ngay_sinh}}</td>
                        <td>{{$hs->dia_chi}}</td>
                        <td align="center">{{$hs->lop}}</td>
                        <td align="center"><a href="{{route('update-diem-hs',['id' => $hs->id_hocsinh, 'hocky' => 1])}}"><i class="far fa-edit"></i></a></td>
                        <td align="center"><a href="{{route('update-diem-hs',['id' => $hs->id_hocsinh, 'hocky' => 2])}}"><i class="far fa-edit"></i></a></td>
                    </tr>
                    @endforeach
                </table>
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