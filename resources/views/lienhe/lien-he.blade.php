<!DOCTYPE html>
<html>
<head>
	<title>Liên hệ</title>
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
					<span><a class="text-link" href="/">Trang chủ</a></span> <i class="fas fa-arrow-right text-white"></i>
					<span><a class="text-link" href="/lien-he">Liên hệ</a></span> 
				</div>
			</div>
        </div>
        <div class="container-fluid" style="background-color: #f2f2f2;">
            <div class="row" style="padding: 50px;">
                <div class="col">
                    <h2><span style="color: #FC9928"><i class="fas fa-map-marker-alt"></i> Bản đồ</span> đường đi</h2>
                    <hr style="width: 130px" align="left">
                </div>
            </div>
            <div class="row" >
                <div class="col">
                <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.3108327348036!2d108.24646771480823!3d16.101213688861197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1
                s0x314217fca6813129%3A0xed1d583e8970db2e!2zMiBOZ3V54buFbiBQaGFuIFZpbmgsIFRo4buNIFF1YW5nLCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1610304819028!5m2!1sen!2s"
                 width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="row form-gopy-big" style="background: url('{{asset('../frontend/images/project-4.jpg')}}'); position: relative; bottom: 50px">
                <div class="col-md-6 title-gopy">
                    <br>
                    <h3>Bạn cần chúng tôi giúp gì ?</h3>
                    <h2 class="text-form">Hãy gửi ngay</h2>
                    <p>Mọi thắc mắc của các bạn, chúng tôi sẽ phản hồi ngay !</p>
                </div>
                <div class="col-md-5 form-gopy">
                    <h2><span class="text-title">Yêu cầu </span><span class="text-title-color">thông tin</span></h2>
                    <form action="{{ route('send.email') }}" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Họ và tên">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <textarea type="text" name="content" class="form-control" placeholder="Câu hỏi của bạn là gì ?" rows="5" style="resize: none;"></textarea>
                        </div>
                      <button type="submit" class="btn btn-warning" style="width: 100px">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
        
        <!--  -->

		

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