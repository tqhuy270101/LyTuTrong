@extends('thoikhoabieu')
@section('thoikhoabieu_content')

<div class="container" style="margin-top:50px; margin-bottom:150px">
    <div class="row alert alert-success" align="center">
        <div class="col">
            <h2>Thời khóa biểu giáo viên</h2>
        </div>
    </div>
    <div class="row alert alert-success" style="margin-top:30px" align="center"  role="alert">
        <div class="col">
            <form action="{{ route('tkb-giaovien-submit') }}" method="post">
				{{ csrf_field() }}
                <label for="">Chọn giáo viên: </label>
                <select class="form-control" style=" width:250px; font-size: 16px; border-radius: 10px" name="id">
                    @foreach($giaovien as $giaovien)
                    	<option value="{{ $giaovien->id }}" style=";">{{$giaovien->hoten}}</option>
                    @endforeach
				</select><br>
                <label for="">Chọn buổi: </label>
                <input type="radio" name="buoi" value="sang"> Buổi sáng &nbsp;&nbsp;&nbsp; 
                <input type="radio" name="buoi" value="chieu" checked> Buổi chiều<br>
				<button class="btn btn-primary" style="width: 200px">Tìm</button>
            </form>
        </div>  
    </div>
   
</div>


@endsection

