@extends('tin-tuc.layoutTintuc')
@section('tintuc_content')

<div class="container-fluid">
    <div class="row" >
        <div class="col-9">
            @foreach($tintuc_chinh as $tt)
                <div style="margin-top:30px; padding:50px 80px 50px 80px">
                    <h1 class="tieude-tintuc-chinh">{{ $tt->TieuDe }}</h1>
                    <hr style="width:100%">
                   
                    <div class="row">
                        <div class="col"><p><i class="far fa-user"></i> Người đăng: admin</p></div>
                        <div class="col"  align="right"><p>Ngày đăng: {{ date('h:m a | d-m-Y', strtotime( $tt->NgayDang)) }}</p></div>
                    </div>
                    <br>
                    {!!$tt->NoiDung!!}
                </div>
            @endforeach
            
        </div>
        <div class="col" style="background-color: #eeeeee">
            <div class="row" >
                <div class="col">
                    <h4 class="tintuc-noibat"><span style="color:#FC9928"><i class="far fa-newspaper"></i> Tin </span>nổi bật</h4>
                    <hr>
                </div>
            </div>
            @foreach($tintuc as $tintuc)
           <div class="row">
               <div class="col hover-link">
                    <a href="{{route('xem-tin-tuc',['id'=>$tintuc->id, 'title' => Str::substr($tintuc->TieuDe, 0, 20)])}}"><img class="img-tintuc-noibat" src="/frontend/nhut/upload/tintuc/{{$tintuc->Hinh}}" alt=""></a>
                    <div>
                        <a class="tieude-link" href="{{route('xem-tin-tuc',['id'=>$tintuc->id, 'title' => Str::substr($tintuc->TieuDe, 0, 20)])}}"><p><i class="fas fa-arrow-right"></i><b> {{ $tintuc->TieuDe }}</b></p>
                        <p>{!!Str::substr($tintuc->NoiDung, 0, 100)!!}...</p>
                    </a>
                    </div>
               </div>
           </div>
           @endforeach
        </div>
    </div>
</div>
@endsection