<!DOCTYPE html>
<html>
<head>
	<title>Khóa học</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('../frontend/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/load.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/main.css')}}">
	<script src="{{('../backend/ckeditor/ckeditor.js')}}"></script>
</head>
<body>
    <x-loading></x-loading>
    <x-menu></x-menu>
	<div>
		<div class="container-fluid background">
			<div class="row justify-content-around link">
				<div class="col-10 offset-col-2">
					<h1 class="text-title">Tin tức</h1>
				</div>
			</div>
			<div class="row justify-content-around link">
				<div class="col-10">
					<span><a class="text-link" href="#">Trang chủ</a></span> <i class="fas fa-arrow-right text-white"></i>
					<span><a class="text-link" href="#">Tin tức</a></span> 
				</div>
			</div>
        </div>
        <div class="container-fluid">
            <div class="row menu-khoahoc" align="center">
                <div class="col" style="margin-top: 30px">
                    <h1 class="text-font-playfair-dislay"><span style="color:#FC9928"><i class="fas fa-book"></i> Tài liệu</span> học tập</h1>
                    <hr>
                    <div class="btn-group khoahoc">
                        <button type="button" class="btn btn-danger dropdown-toggle button-khoahoc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Khối 6
                        </button>
                        <div class="dropdown-menu khoahoc">
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 6, 'mon' => 'Toán'])}}">Toán</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 6, 'mon' => 'Vật lý'])}}">Vật lý</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 6, 'mon' => 'Sinh học'])}}">Sinh học</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 6, 'mon' => 'Lịch sử'])}}">Lịch sử</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 6, 'mon' => 'Địa lý'])}}">Địa lý</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 6, 'mon' => 'Ngữ văn'])}}">Ngữ văn</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 6, 'mon' => 'Tiếng anh'])}}">Tiếng anh</a>
                        </div>
                    </div>
                    <div class="btn-group khoahoc">
                        <button type="button" class="btn btn-danger dropdown-toggle button-khoahoc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Khối 7
                        </button>
                        <div class="dropdown-menu khoahoc">
                        <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 7, 'mon' => 'Toán'])}}">Toán</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 7, 'mon' => 'Vật lý'])}}">Vật lý</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 7, 'mon' => 'Sinh học'])}}">Sinh học</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 7, 'mon' => 'Lịch sử'])}}">Lịch sử</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 7, 'mon' => 'Địa lý'])}}">Địa lý</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 7, 'mon' => 'Ngữ văn'])}}">Ngữ văn</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 7, 'mon' => 'Tiếng anh'])}}">Tiếng anh</a>
                        </div>
                    </div>
                    <div class="btn-group khoahoc">
                        <button type="button" class="btn btn-danger dropdown-toggle button-khoahoc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Khối 8
                        </button>
                        <div class="dropdown-menu khoahoc">
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 8, 'mon' => 'Toán'])}}">Toán</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 8, 'mon' => 'Vật lý'])}}">Vật lý</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 8, 'mon' => 'Sinh học'])}}">Sinh học</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 8, 'mon' => 'Hóa học'])}}">Hóa học</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 8, 'mon' => 'Địa lý'])}}">Địa lý</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 8, 'mon' => 'Ngữ văn'])}}">Ngữ văn</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 8, 'mon' => 'Lịch sử'])}}">Lịch sử</a>
                        </div>
                    </div>
                    <div class="btn-group khoahoc">
                        <button type="button" class="btn btn-danger dropdown-toggle button-khoahoc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Khối 9
                        </button>
                        <div class="dropdown-menu khoahoc">
                        <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 9, 'mon' => 'Toán'])}}">Toán</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 9, 'mon' => 'Vật lý'])}}">Vật lý</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 9, 'mon' => 'Sinh học'])}}">Sinh học</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 9, 'mon' => 'Hóa học'])}}">Hóa học</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 9, 'mon' => 'Địa lý'])}}">Địa lý</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 9, 'mon' => 'Ngữ văn'])}}">Ngữ văn</a>
                            <a class="dropdown-item text-monhoc" href="{{route('tai-lieu-mon',['khoi' => 9, 'mon' => 'Lịch sử'])}}">Lịch sử</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-top:50px; margin-bottom: 100px" align="center">
                @foreach($tailieu as $tl)
                
                <div class="col tailieu-khoahoc">
                    <a href="../backend/Tailieu/{{$tl->file_tailieu}}" class="link-tailieu" download>
                        <div class="">
                            <img class="anh-tailieu" src="{{('../frontend/images/bg/book.jpg')}}" alt="book">
                            <div class="text-tailieu">
                                <p>Tài liệu môn: {{$tl->ten_mon}}</p>
                                <p>Khối: {{$tl->khoi}}</p>
                            </div>
                        </div>
                        <div>
                            <b>{{$tl->tieude}}</b>
                        </div>
                    </a>    
                </div>
                
                @endforeach
            </div>
        </div>

		

	    <div class="icon-nav">
		<!-- background link -->
		<div class="container-fluid">
			<!--footer  -->
			<x-footer></x-footer>
		</div>
	</div>
<script src="{{asset('../frontend/isset/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('../frontend/isset/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('../frontend/isset/js/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('../frontend/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../frontend/js/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>