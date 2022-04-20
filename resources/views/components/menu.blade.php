<div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col">
                    <i class="fas fa-phone-volume text-white"> <span class="phone-top-menu"> 0862-957-787</span></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="far fa-envelope text-white"> <span> Tqhuy.19it3@vlu.udn.vn</span></i>
                </div>
                <div class="col" align="right">
                    <a href="#"><i class="fab fa-facebook-f text-white"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#"><i class="fab fa-twitter text-white"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#"><i class="fab fa-google-plus-g text-white"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#"><i class="fab fa-instagram text-white"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#"><i class="fab fa-linkedin-in text-white"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                        $admin_chucdanh = Session::get('admin_chucdanh');
                        if ($admin_chucdanh) {
                            echo '<a href="/logout-giaovien"><i class="far fa-user text-white"> Đăng xuất</i></a> &nbsp;<span style="color: white"></span>';
                        } else{
                            echo '<a href="/login"><i class="far fa-user text-white"> Đăng nhập</i></a> &nbsp;<span style="color: white"></span>';   
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-menu">
        <div class="container-fluid menu-top">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 menu" align="center">
                    <a href="{{ URL::to('/trangchu') }}"><img class="logo-menu" src="{{asset('../frontend/images/logo.png')}}"></a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-3 menu">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fas fa-headset menu"></i>
                                </div>
                                <div class="col">
                                    <span>PHONE<br>0862-957-787</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 menu">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="far fa-envelope-open menu"></i>
                                </div>
                                <div class="col">
                                    <span>MAIL<br>Tqhuy.19it3@vku.udn.vn</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 menu">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fas fa-map-marker-alt menu"></i>
                                </div>
                                <div class="col">
                                    <span>LOCATION<br>  02 Nguyễn Phan Vinh, Thọ Quang, Sơn Trà, Đà Nẵng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-warning" href="{{ URL::to('/') }}" style="color: black">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  btn btn-outline-warning" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                          Giới thiệu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding: 0;">
                            <a class="dropdown-item menu" href="{{URL::to('/gioi-thieu/lich-su-hinh-thanh')}}">Lịch sử hình thành</a>
                            <a class="dropdown-item menu" href="{{URL::to('/gioi-thieu/co-cau-to-chuc')}}">Cơ cấu tổ chức</a>
                            <a class="dropdown-item menu" href="{{URL::to('gioi-thieu/thanh-tich')}}">Thành tích</a>
                            <a class="dropdown-item menu" href="{{URL::to('/gioi-thieu/noi-quy-truong-hoc')}}">Nội quy trường học</a>   
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-warning" href="{{ URL::to('/tin-tuc') }}" style="color: black">Tin tức</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  btn btn-outline-warning" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black">
                          Thông báo
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding: 0;">
                            <a class="dropdown-item menu" href="{{ URL::to('/thong-bao/thoikhoabieu') }}">Thời khóa biểu</a>
                            <a class="dropdown-item menu" href="{{ URL::to('/thong-bao/bang-diem') }}">Tra cứu điểm</a>
                            <a class="dropdown-item menu" href="{{ URL::to('/thong-bao/lich-thi') }}">Lịch thi</a>
                            <a class="dropdown-item menu" href="{{ URL::to('/thong-bao/lich-cong-tac') }}">Lịch công tác</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  btn btn-outline-warning" href="{{URL::to('/khoa-hoc')}}" style="color: black">Khóa học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  btn btn-outline-warning" href="{{URL::to('/lien-he')}}" style="color: black">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>