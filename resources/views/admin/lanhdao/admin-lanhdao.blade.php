@extends('admin.layoutAdmin')
@section('admin_content')
    <div class="container">
        <div class="row alert alert-success title-insert-event" align="center">
            <div class="col">
                <h2>Cập nhật lãnh đạo</h2>
            </div>
        </div>
        <form action="{{ route('admin-update-lanhdao') }}" method="post">
            {{ csrf_field() }}
            <div class="row justify-content-between" align="center">
                @foreach($lanhdao as $key => $item)
                    <div class="col" style="margin-top:50px;">
                        <div class="alert alert-success" style="width:300px">
                            <input class="form-control text-title-update-lanhdao" type="text" name="chucvu{{$key}}" id="" value="{{ $item->lanhdao_chucvu }}" readonly>
                        </div>
                        <input style="margin-top:10px" class="file-update-lanhdao" type="file" name="img{{$key}}" id="file_upload{{$key}}" required>
                        <img onclick="myFunction{{$key}}();" class="img-lanhdao" src="{{ ($item->lanhdao_hinhanh) }}">
                        <br><br>
                        <div class="form-group col-md-8" align="left">
                            <label for="exampleFormControlInput1">Họ tên</label>
                            <input class="form-control text-update-lanhdao" type="text" name="hoten{{$key}}" value="{{ $item->lanhdao_hoten }}" placeholder="Họ tên" required>
                        </div>
                        <div class="form-group col-md-8" align="left">
                            <label for="exampleFormControlInput1">Ngày sinh</label>
                            <input class="form-control text-update-lanhdao" type="date" name="ngaysinh{{$key}}" value="{{ $item->lanhdao_ngaysinh }}" placeholder="Ngày sinh" required>
                        </div>
                        <div class="form-group col-md-8" align="left">
                            <label for="exampleFormControlInput1">Giới tính</label>
                            <input class="form-control text-update-lanhdao" type="text" name="gioitinh{{$key}}" value="{{ $item->lanhdao_gioitinh }}" placeholder="Giới tính" required>
                        </div>
                        <div class="form-group col-md-8" align="left">
                            <label for="exampleFormControlInput1">Nhiệm kỳ</label>
                            <input class="form-control text-update-lanhdao" type="text" name="nhiemky{{$key}}" value="{{ $item->lanhdao_nhiemky }}" placeholder="Nhiệm kỳ" required>
                        </div>
                        <hr style="width:80%; background-color: #d1f7ea">
                    </div>    
                @endforeach
                
            </div> 
            <div class="row" style="margin: 50px 0px 80px 0px;" align="center">
                <div class="col">
                    <button class="btn btn-outline-danger" style="width:300px; height: 50px;font-size: 18px" type="submit">Cập nhật</button>
                </div>
            </div> 
        </form>
    </div>
    <script>
        function myFunction0(){
            document.getElementById('file_upload0').click();
        }
        function myFunction1(){
            document.getElementById('file_upload1').click();
        }
        function myFunction2(){
            document.getElementById('file_upload2').click();
        }
    </script>

@endsection