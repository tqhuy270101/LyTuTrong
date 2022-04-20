@extends('admin.layoutAdmin')
@section('admin_content')

<div class="container admin-dashboard" align="center">
    <div class="row">
        <div class="col align-items-center alert alert-success">
            <div class="dashboard-time" role="alert">
                <h4>Bây giờ là <b id="time"></b></h4>
                <p>Ngày: {{ date('d/m/20y', strtotime($thoigian->toDateString())) }}</p>
                <p><b> Tuần học thứ {{ $thoigian->week }}</b></p>
            </div>
        </div>
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

