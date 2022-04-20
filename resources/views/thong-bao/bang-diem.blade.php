
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
                    <h1 class="text-font-playfair-dislay"><span style="color:#FC9928"><i class="fas fa-book"></i> Tra cứu</span> kết quả học tập</h1>
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


    <x-footer></x-footer>

<script type="text/javascript" src="{{asset('../frontend/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../frontend/js/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>