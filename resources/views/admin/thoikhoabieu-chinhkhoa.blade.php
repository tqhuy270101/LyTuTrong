@extends('admin.layoutAdmin')
@section('admin_content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form-group row form-find-tkb">
                    <label class="col-sm-1 col-form-label text-right tbk-font-form">Lớp</label>
                    <div class="col-sm-4">
                        <div class="row g-3">
                            <form action="" method="post" id='myformlop'>
                                {{ csrf_field() }}
                                <div class="col-auto">
                                    <select class="form-control tbk-form-tkb" id='lop' name="lop">
                                        @foreach($lop as $lop)
                                            <option value="{{$lop->id}}">Lớp {{($lop->lop)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <input type="submit" class="btn btn-primary" value="Tìm">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
        var x = document.createElement("SELECT");
        x.setAttribute("id", "mySelect");
        document.body.appendChild(x);

        var z = document.createElement("option");
        z.setAttribute("value", "volvocar");
        var t = document.createTextNode("Volvo");
        
        }
    </script>


@endsection