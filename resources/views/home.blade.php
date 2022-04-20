@extends('layoutHome')
@section('home_content')
<div class="about-slide" style="background: url('../frontend/images/project-8.jpg');" align="center">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-width: 60%; max-height: 30%;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 slide" src="{{asset('../frontend/images/slide/slide1.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: white">Chào mừng đến với Trường THCS Lý Tự Trọng</h5>
                        <p>TP ĐÀ NẴNG</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100  slide" src="{{asset('../frontend/images/slide/slide2.jpg')}}" alt="Second slide">
                    
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 slide" src="{{asset('../frontend/images/slide/slide3.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="icon-nav">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30 row justify-content-center">
                    <div class="row">
                        <div class="col-xs-4 icon-nav">
                            <img class="img-icon" src="{{asset('../frontend/images/icons/online.png')}}">
                        </div>
                        <div class="col icon-nav">
                            <h3 class="text-icon-nav">Cơ sở vật chất hiện đại</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30 row justify-content-center">
                    <div class="row">
                        <div class="col-xs-4 icon-nav">
                            <img class="img-icon" src="{{asset('../frontend/images/icons/book.png')}}">
                        </div>
                        <div class="col icon-nav">
                            <h3  class="text-icon-nav">Thư viện sách hiện đại</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30 row justify-content-center">
                    <div class="row">
                        <div class="col-xs-4  icon-nav">
                            <img class="img-icon" src="{{asset('../frontend/images/icons/graduate.png')}}">
                        </div>
                        <div class="col icon-nav">
                            <h3  class="text-icon-nav">Cán bộ giáo viên chất lượng</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center about-lytutrong">
                <div class="col-md-4">
                    <img class="img-lytutrong" src="{{asset('../frontend/images/lytutrong.jpg')}}">
                </div>
                <div class="col-md-5" style="text-align: center;">
                    <h3 class="text-font-playfair-dislay">Ngôi trường mang tên vị anh hùng <br>  <span class="name-shool">Lý Tự Trọng</span></h3>
                    <hr> 
                    <p>Lý Tự Trọng (20 tháng 10 năm 1914 – 20 tháng 11 năm 1931) tên thật là Lê Hữu Trọng, còn được gọi là Huy; là một trong những nhà cách mạng trẻ tuổi của Việt Nam.</p>
                    <p>Nhà thờ Lý Tự Trọng được xây trên nền nhà tổ tiên của dòng họ Lê tại xã Việt Tiến, huyện Thạch Hà, tỉnh Hà Tĩnh. Lý Tự Trọng được Ban Bí thư Trung ương Đoàn Thanh niên Cộng sản Hồ Chí Minh công nhận là người Đoàn viên đầu tiên với tấm thẻ Đoàn viên danh dự số 1. Tên của ông đã được đặt cho tên của một giải thưởng của Trung ương Đoàn Thanh niên Cộng sản Hồ Chí Minh dành trao tặng cho thanh niên. Ngoài ra, tên ông cũng được đặt cho nhiều trường học và con đường ở Việt Nam.</p>
                    <h5>Câu nói lưu danh:</h5>
                    <p>"Tôi chưa đến tuổi thành niên thật, nhưng tôi đủ trí khôn để hiểu rằng con đường của thanh niên chỉ có thể là con đường cách mạng và không thể là con đường nào khác. Tôi tin rằng nếu các ông suy nghĩ kỹ thì các ông cũng thấy cần phải giải phóng dân tộc, giải phóng những người cần lao động như tôi."</p>
                </div>
            </div>
            <!-- gioi thieu lanh dao -->
            <div class="row">
                <div class="col-md-12 about-lanhdao" align="center">
                    <div class="title-lanhdao-big"> 
                        <h2><span class="title-lanhdao">LÃNH ĐẠO</span> <span class="text-title-color">NHÀ TRƯỜNG</span></h2>
                        <p>Đội ngũ lãnh đạo đầy kinh nghiệm</p>
                        <hr class="hr-event">
                    </div>
                    <div class="row justify-content-between">
                        @foreach($lanhdao as $item)
                        <div class="col">
                            <img class="img-lanhdao" src="{{ asset($item->lanhdao_hinhanh) }}">
                            <br><br>
                            <h5>{{ $item->lanhdao_hoten }}</h5>
                            <p>-{{ $item->lanhdao_chucvu }}-</p>
                        </div>
                        @endforeach
                    </div>  
                </div>
            </div>
            

            <!-- // -->
            <div class="row form-gopy-big" style="background: url('{{asset('../frontend/images/project-4.jpg')}}');">
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

            <!--event  -->
            <div class="row">
                <div class="col-md-6 event-top">
                    <div class="title-event col-9">
                        <h3 class="title"><i class="far fa-calendar-alt"></i> SỰ KIỆN <span class="text-title-color">SẮP TỚI</span></h3>
                        <hr class="hr-event" style="width: 130px; margin-left: 135px" align="left">
                    </div>
                    @foreach($sukien as $key =>$sk)
                    <div class="row justify-content-around event-big">
                        <div class="col-9 about-event-big">
                            <div class="event-cat">
                                <p class="text-event">{{ date('d', strtotime($sk->ngaytochuc)) }}</p>
                                <hr class="hr-white" align="left">
                                <p class="text-event">Tháng{{ date('m', strtotime($sk->ngaytochuc)) }}</p>
                            </div>
                            <div class="about-event">
                                <h4><a href="#" class="text-font-playfair-dislay">{{ $sk->title }}</a></h4>
                                <h5 class="text-font-playfair-dislay">{{ $sk->tensukien }}</h5>
                                <i class="far fa-clock"> {{ date('H:i', strtotime($sk->thoigian)) }}</i> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-map-marker-alt"> {{ $sk->diachi }}</i><br>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row pagination">{{$sukien->links("pagination::bootstrap-4")}}</div>
                </div>
                <div class="col">
                    <div class="row justify-content-around">
                        <div class="col-9">
                            <div class="about-question">
                                <h3 class="title"><i class="far fa-newspaper"></i> <span>TIN TỨC</span><span class="text-title-color"> MỚI</span></h3>
                                <hr class="hr-event" align="left" style="width: 140px">
                            </div>
                        </div>
                    </div>
                    @foreach($tintuc as $tt)
                    <div class="row justify-content-around about-news">
                        <div class="col-3">
                            <div class="row justify-content-center" align="center">
                                <a href="{{route('xem-tin-tuc',['id'=>$tt->id, 'title' => Str::substr($tt->TieuDe, 0, 20)])}}" class="course-img"><img class="img-news" src="/frontend/nhut/upload/tintuc/{{$tt->Hinh}}">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="course">
                                <div class="desc">
                                    <h5><a class="text-font-playfair-dislay title" href="{{route('xem-tin-tuc',['id'=>$tt->id, 'title' => Str::substr($tt->TieuDe, 0, 20)])}}">{{$tt->TieuDe}}</a></h5>
                                    <p>{!! Str::substr($tt->NoiDung, 0, 160) !!}...</p>
                                    <span><a href="{{route('xem-tin-tuc',['id'=>$tt->id, 'title' => Str::substr($tt->TieuDe, 0, 20)])}}" class="btn btn-warning news">Xem thêm</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!--footer  -->
            <x-footer></x-footer>
        </div>
    </div>
@endsection