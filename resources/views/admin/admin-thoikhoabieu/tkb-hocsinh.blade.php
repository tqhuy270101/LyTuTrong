@extends('admin.layoutAdmin')
@section('admin_content')

<div class="container">
	<x-tkbhs></x-tkbhs>
    <div class="row alert alert-success" align="center"  role="alert">
        <div class="col">
            <form action="{{ route('tkb-hocsinh-lop') }}" method="post">
				{{ csrf_field() }}
                <label for="">Chọn lớp: </label>
                <select class="form-control" style=" width:200px; font-size: 16px; border-radius: 10px" name="id_lop">
                    @foreach($lop as $lop)
                    	<option value="{{ $lop->id }}" style=";">Lớp {{$lop->lop}}</option>
                    @endforeach
				</select><br><br>
                <label for="">Chọn buổi: </label>
                <input type="radio" name="buoi" value="sang"> Buổi sáng &nbsp;&nbsp;&nbsp; 
                <input checked type="radio" name="buoi" value="chieu"> Buổi chiều<br>
				<button class="btn btn-primary" style="width: 200px">Tìm</button>
            </form>
        </div>  
    </div>
   
</div>


@endsection

