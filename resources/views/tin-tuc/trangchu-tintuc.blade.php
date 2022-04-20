@extends('tin-tuc.layoutTintuc')
@section('tintuc_content')
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-9">
                <div class="about-question">
                    <h3 class="title"><i class="far fa-newspaper"></i> <span>TIN TỨC</span><span class="text-title-color"> MỚI</span></h3>
                    <hr class="hr-event" align="left" style="width: 140px">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($tintuc as $tt)
                <div class="col-5 about-news">
                    <div class="row justify-content-around">
                        <div class="col-3">
                            <div class="row justify-content-center" align="center">
                                <a href="{{route('xem-tin-tuc',['id'=>$tt->id, 'title' => Str::substr($tt->TieuDe, 0, 20)])}}" class="course-img"><img class="img-tintuc2" src="../frontend/nhut/upload/tintuc/{{$tt->Hinh}}">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="course">
                                <div class="desc">
                                    <h5 ><a class="text-font-playfair-dislay title" href="#">{{$tt->TieuDe}}</a></h5>
                                    <p>{!!Str::substr($tt->NoiDung, 0, 100)!!}...</p>
                                    <span><a href="{{route('xem-tin-tuc',['id'=>$tt->id, 'title' => Str::substr($tt->TieuDe, 0, 20)])}}" class="btn btn-warning news">Xem thêm</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                {{$tintuc->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
        
@endsection