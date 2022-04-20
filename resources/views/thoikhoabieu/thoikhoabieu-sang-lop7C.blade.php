@extends('thoikhoabieu')
@section('thoikhoabieu_content')

<div class="col-md-10">
		            	<div class="row justify-content-center about-tkb alert alert-success">
		            		<div class="text-title-tkb">
								
								@foreach($lophoc as $lop)
								<h2>Thời khóa biểu học sinh - Lớp {{ $lop->lop }}</h2>
								@endforeach
								<h5 class="tuan-tkb"><b>Tuần {{ $thoigian->weekOfYear }}</b></h5>
		            		</div>
		            	</div>
					
		            	<div class="row justify-content-around alert alert-success">
		            		<div class="col-4">
								@foreach($tkb_ngay_sang as $ngay)
									<h5>Áp dụng từ ngày: {{ date('d-m-Y', strtotime($ngay->ngayapdung)) }}</h5>
								@endforeach
		            			<div class="form-inline">
		            				<a href="{{ URL::to('/thongbao/thoikhoabieu/hocsinh/lop7C/sang') }}" class="form-control button-tkb">Buổi sáng</a>
		            				<a href="{{ URL::to('/thongbao/thoikhoabieu/hocsinh/lop7C') }}" class="form-control button-tkb">Buổi chiều</a>
		            			</div>
		            		</div>
							<div class="text-title-tkb">
								<h5>Buổi sáng</h5>
								<b id="time"></b><br>
								<b>{{ date('d/m/20y', strtotime($thoigian->toDateString())) }}</b><br>
									
									
		            		</div>
		            		<div class="col-4" align="center">
								<p><b>Giáo viên chủ nhiệm:</b></p>
								@foreach($chunhiem as $chunhiem)
								<h5>{{ $chunhiem->chunhiem }}</h5>
								@endforeach
		            		</div>		            	
		            	</div>
		            	<div class="row" style="padding: 20px">
		            		<table class="table">
		            			<tr align="center">
		            				<th>Tiết</th>
		            				<th>Thứ 2</th>
		            				<th>Thứ 3</th>
		            				<th>Thứ 4</th>
		            				<th>Thứ 5</th>
		            				<th>Thứ 6</th>
		            				<th>Thứ 7</th>
		            			</tr>
		            			<tr align="center">
									<th>Tiết 1</th>
									@foreach($tkb_t1 as $key => $tkb_t1)
										<td>
											<p>{{ $tkb_t1->mon }}</p>
											<p>GV: {{$tkb_t1->giaovien}}</p>
										</td>
									@endforeach
									
		            			</tr>
		            			<tr align="center">
									<th>Tiết 2</th>
									@foreach($tkb_t2 as $key => $tkb_t2)
										<td>
											<p>{{ $tkb_t2->mon }}</p>
											<p>GV: {{$tkb_t2->giaovien}}</p>
										</td>
									@endforeach
		            			</tr>
		            			<tr align="center">
									<th>Tiết 3</th>
									@foreach($tkb_t3 as $key => $tkb_t3)
										<td>
											<p>{{ $tkb_t3->mon }}</p>
											<p>GV:{{$tkb_t3->giaovien}}</p>
										</td>
									@endforeach
		            			</tr>
		            			<tr align="center">
									<th>Tiết 4</th>
									@foreach($tkb_t4 as $key => $tkb_t4)
										<td>
											<p>{{ $tkb_t4->mon }}</p>
											<p>GV: {{$tkb_t4->giaovien}}</p>
										</td>
									@endforeach
		            			</tr>
		            			<tr align="center">
									<th>Tiết 5</th>
									@foreach($tkb_t5 as $key => $tkb_t5)
										<td>
											<p>{{ $tkb_t5->mon }}</p>
											<p>GV: {{$tkb_t5->giaovien}}</p>
										</td>
									@endforeach
		            			</tr>
		            		</table>
		            	</div>
		            </div>

	<script>
		var myVar = setInterval(myTimer, 1000);
		function myTimer() {
		var d = new Date();
		document.getElementById("time").innerHTML = d.toLocaleTimeString();
		}
	</script>
@endsection

