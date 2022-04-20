
<!DOCTYPE html>
<html>
<head>
    <title>Lịch công tác</title>
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
                <h1 class="text-title">Lịch thi</h1>
            </div>
        </div>
        <div class="row justify-content-around link">
            <div class="col-10">
                <span><a class="text-link" href="{{URL::to('/')}}">Trang chủ</a></span> <i class="fas fa-arrow-right text-white"></i>
                <span><a class="text-link" href="{{URL::to('/gioithieu/lich-cong-tac')}}">Lịch thi</a></span> 
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>hello</h1>
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