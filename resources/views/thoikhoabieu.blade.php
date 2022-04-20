<!DOCTYPE html>
<html>
<head>
	<title>Thời khóa biểu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('../frontend/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/load.css')}}">
</head>
<body>
    <x-loading></x-loading>
    <x-menu></x-menu>
	<div>
		<div class="container-fluid background">
			<div class="row justify-content-around link">
				<div class="col-10 offset-col-2">
					<h1 class="text-title">Thời khóa biểu</h1>
				</div>
			</div>
			<div class="row justify-content-around link">
				<div class="col-10">
					<span><a class="text-link" href="#">Trang chủ</a></span> <i class="fas fa-arrow-right text-white"></i>
					<span><a class="text-link" href="#">Thời khóa biểu</a></span> 
				</div>
			</div>
		</div>

		<section id="container" class="container-fluid">
			<div class="row">
				<div id="sidebar" class="col-md-2 nav-collapse tkb">
					<div class="leftside-navigation">
						<ul class="sidebar-menu" id="nav-accordion">
							<li class="sub-menu">
								<a  class="text-user" href="{{ route('tkb-giaovien') }}">
									<i class="far fa-user text-white"></i> 
									<span class="text-user"> Giáo viên</span>
								</a>
							</li>
							<li class="sub-menu">
								<a class="text-user" href="#">
									<i class="far fa-user text-white"></i>
									<span class="text-user"> Học sinh</span>
								</a>
								<ul class="sub">
									<li class="sub-menu-1">
										<a  class="text-user" href="#">
											<i class="fas fa-graduation-cap text-white"></i>
											<span class="text-user">Khối 6</span>
											<ul class="sub">
												@foreach($lop6 as $lop6)
													<li class="sub-menu-2"><a class="text-user" href="{{ URL::to('/thongbao/thoikhoabieu/hocsinh/lop') }}{{ $lop6->lop }}"><i class="fas fa-user-friends"></i> Lớp {{ $lop6->lop }}</a></li>
												@endforeach
											</ul>
										</a>
									</li>
								</ul>
								<ul class="sub">
									<li class="sub-menu-1">
										<a  class="text-user" href="#">
											<i class="fas fa-graduation-cap text-white"></i>
											<span class="text-user">Khối 7</span>
											<ul class="sub">
												@foreach($lop7 as $lop7)
													<li class="sub-menu-2"><a class="text-user" href="{{ URL::to('/thongbao/thoikhoabieu/hocsinh/lop') }}{{ $lop7->lop }}"><i class="fas fa-user-friends"></i> Lớp {{ $lop7->lop }}</a></li>
												@endforeach
											</ul>
										</a>
									</li>
								</ul>
								<ul class="sub">
									<li class="sub-menu-1">
										<a  class="text-user" href="#">
											<i class="fas fa-graduation-cap text-white"></i>
											<span class="text-user">Khối 8</span>
											<ul class="sub">
												@foreach($lop8 as $lop8)
													<li class="sub-menu-2"><a class="text-user" href="{{ URL::to('/thongbao/thoikhoabieu/hocsinh/lop') }}{{ $lop8->lop }}"><i class="fas fa-user-friends"></i> Lớp {{ $lop8->lop }}</a></li>
												@endforeach
											</ul>
										</a>
									</li>
								</ul>
								<ul class="sub">
									<li class="sub-menu-1">
										<a  class="text-user" href="#">
											<i class="fas fa-graduation-cap text-white"></i>
											<span class="text-user">Khối 9</span>
											<ul class="sub">
												@foreach($lop9 as $lop9)
													<li class="sub-menu-2"><a class="text-user" href="{{ URL::to('/thongbao/thoikhoabieu/hocsinh/lop') }}{{ $lop9->lop }}"><i class="fas fa-user-friends"></i> Lớp {{ $lop9->lop }}</a></li>
												@endforeach
											</ul>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				@yield('thoikhoabieu_content')
			</div>
    	</section>

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