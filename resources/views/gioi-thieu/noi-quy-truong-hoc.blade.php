
<!DOCTYPE html>
<html>
<head>
    <title>Nội quy trường học</title>
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
                <h1 class="text-title">Nội quy trường học</h1>
            </div>
        </div>
        <div class="row justify-content-around link">
            <div class="col-10">
                <span><a class="text-link" href="{{URL::to('/')}}">Trang chủ</a></span> <i class="fas fa-arrow-right text-white"></i>
                <span><a class="text-link" href="{{URL::to('/gioithieu/noi-quy-truong-hoc')}}">Nội quy trường học</a></span> 
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 50px; padding:30px" align="center">
            <div class="col">
                <h1 class="text-font-playfair-dislay"><span style="color:#FC9928">Nội quy</span> nhà trường</h1>
                <hr>
            </div>
        </div>
        <div class="row" style="padding: 20px; margin-bottom:50px">
            <div class="col">
                <p><b>1.</b> Kính trọng, lễ phép với thầy cô, cán bộ CNV. Giúp đỡ bạn bè trong học tập và rèn luyện hạnh kiểm.</p>
                <p><b>2.</b> Thuộc bài và làm bài đầy đủ theo yêu cầu của giáo viên bộ môn trước khi lên lớp.</p>
                <p><b>3.</b> Có ý thức bảo vệ tài sản chung của nhà trường, giữ gìn vệ sinh và cảnh quang môi trường XANH - SẠCH - ĐẸP.</p>
                <p><b>4.</b> Tuyệt đối không uống rượu bia, hút thuốc lá và dùng các chất kích thích khác.</p>
                <p><b>5.</b> Khi đến trường phải mặc đồng phục theo qui định, mang bảng tên và huy hiệu Đoàn (Nếu là đoàn viên).</p>
                <p><b>6.</b> Thật thà trung thực trong học tập, dũng cảm, biết bảo vệ lẽ phải, cái đúng, cái tốt.</p>
                <p><b>7.</b> Không gây gỗ, bè phái đánh nhau trong và ngoài nhà trường. Tuyệt đối không mang theo hung khí, chất nổ vào trong trường học.</p>
                <p><b>8.</b> Khi nghỉ học phải có đơn xin phép với lý do chính đáng và được cha mẹ xác nhận.</p>
                <p><b>9.</b> Hàng tháng học sinh phải trình cho gia đình sổ liên lạc và ghi rõ kết quả học tập và rèn luyện đạo đức đã được giáo viên chủ nhiệm và nhà trương xác nhận.</p>
                <p><b>10.</b> Tham gia tích cực và đầy đủ các ngày lễ, sinh hoạt chủ điểm do nhà trường và các đoản thể tổ chức.</p>
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