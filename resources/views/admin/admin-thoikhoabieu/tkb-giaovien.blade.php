@extends('admin.layoutAdmin')
@section('admin_content')

<div class="container">
	<div class="row tkb-title">
		<div class="col">
			<div class="alert alert-success" role="alert">
				<h3>Thời khóa biểu giáo viên</h3>
			</div>
		</div>
    </div>
    <div class="row alert alert-success" align="center"  role="alert">
        <div class="col">
          <form action="{{ route('tkb-giaovien-name') }}" method="post">
            <label for="">Chọn giáo viên: </label>
            {{ csrf_field() }}
            <select class="form-control" style=" width:200px; font-size: 16px; border-radius:10px" name="giaovien">
                @foreach($giaovien as $gv)
                <option value="{{$gv->id}}" style=";">{{$gv->hoten}}</option>
                @endforeach
            </select><br><br>
            <label for="">Chọn buổi: </label>
            <input type="radio" name="buoi" value="sang"> Buổi sáng &nbsp;&nbsp;&nbsp; 
            <input type="radio" name="buoi" value="chieu" checked> Buổi chiều<br>
            <button class="btn btn-primary" style="width: 200px">Tìm</button>
          </form>
        </div>  
    </div>
</div>



@endsection

