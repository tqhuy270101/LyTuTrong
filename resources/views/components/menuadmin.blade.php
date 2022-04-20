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
                        <a class="nav-link" href="{{ route('admin-lanhdao') }}">
                            <i class="menu-icon typcn typcn-th-large-outline"></i>
                            <span class="menu-title">Cập nhật lãnh đạo</span>
                        </a>
                    </li>