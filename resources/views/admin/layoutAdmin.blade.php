<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADMIN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('../backend/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('../backend/assets/css/shared/style.css')}}">
    <link rel="stylesheet" href="{{asset('../backend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/fontawesome/css/all.min.css')}}">

    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('../backend/assets/css/demo_1/style.css')}}">
    <link rel="stylesheet" href="{{asset('../backend/assets/css/demo_1/main.css')}}">
    <!-- ckediter -->
    <script type="text/javascript" src="{{('/backend/ckeditor/ckeditor.js')}}"></script>

    <!-- End Layout styles -->
  </head>
  <body>
  <?php
        $message = Session::get('message');
        if ($message) {
            echo "<script type='text/javascript'>alert('$message');</script>";
            Session::put('message', null);
        }
        
    ?>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="{{URL::to('/admin')}}">
                    <img src="{{('/backend/images/logo.png')}}" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="{{URL::to('/admin')}}">
                    <img src="{{('/backend/images/logo.png')}}" alt="logo" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block">
                        <h2>Trường THCS Lý Tự Trọng</h2>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="{{('/backend/images/img_admin.jpg')}}" alt="Profile image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="{{('/backend/images/img_admin.jpg')}}" alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold">
                                    <?php
                                        $admin_name = Session::get('admin_name');
                                        echo $admin_name;
                                    ?>
                                </p>
                                <p class="font-weight-light text-muted mb-0">
                                    <?php
                                        $admin_email = Session::get('admin_email');
                                        echo $admin_email;
                                    ?>
                                </p>
                            </div>
                            <a href="{{route('my-profile')}}" class="dropdown-item">Hồ sơ <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                            <a href="{{URL::to('/logout')}}" class="dropdown-item">Đăng xuất<i class="dropdown-item-icon ti-power-off"></i></a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="profile-image">
                                <img class="img-xs rounded-circle" src="{{('/backend/images/img_admin.jpg')}}" alt="profile image">
                                <div class="dot-indicator bg-success"></div>
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">
                                    <?php
                                        echo $admin_name;
                                    ?>
                                </p>
                                <p class="designation">Quản trị viên</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin')}}">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">Trang chủ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon typcn typcn-coffee"></i>
                            <span class="menu-title">Thời khóa biểu</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a href="{{ URL::to('/admin/thoikhoabieu/giaovien')}}" class="nav-link">Giáo viên</a>
                                    
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('/admin/thoikhoabieu/hocsinh')}}" class="nav-link">Học sinh</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin-event')}}">
                            <i class="menu-icon typcn typcn-shopping-bag"></i>
                            <span class="menu-title">Thêm sự kiện sắp tới</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                            <i class="menu-icon typcn typcn-coffee"></i>
                            <span class="menu-title">Tin tức</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic1">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a href="{{ URL::to('/admin/dang-tin-tuc')}}" class="nav-link" href="">Thêm tin tức</a>
                                    
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('/admin/cap-nhat-tin-tuc')}}" class="nav-link">Cập nhật tin tức</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('/admin/tai-lieu-hoc-tap')}}">
                            <i class="menu-icon typcn typcn-user-outline"></i>
                            <span class="menu-title">Tài liệu học tâp</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic1">
                            <i class="menu-icon typcn typcn-coffee"></i>
                            <span class="menu-title">Cập nhật học sinh</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic2">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a href="{{ URL::to('/admin/them-hoc-sinh')}}" class="nav-link" href="">Thêm học sinh</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('/admin/cap-nhat-hoc-sinh')}}" class="nav-link">Cập nhật học sinh</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic1">
                            <i class="menu-icon typcn typcn-coffee"></i>
                            <span class="menu-title">Cập nhật nhân sự</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic3">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a href="{{ URL::to('/admin/them-giao-vien')}}" class="nav-link" href="">Thêm nhân sự</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('/admin/cap-nhat-giao-vien')}}" class="nav-link">Cập nhật nhân sự</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin-lanhdao') }}">
                            <i class="menu-icon typcn typcn-th-large-outline"></i>
                            <span class="menu-title">Cập nhật lãnh đạo</span>
                        </a>
                    </li>
                </ul>
            </nav>
            @yield('admin_content')
        </div>
        
    </div>
    <script src="{{asset('../backend/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    

    <script src="{{('../backend/assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{('../backend/assets/js/shared/misc.js')}}"></script>
</body>
</html>