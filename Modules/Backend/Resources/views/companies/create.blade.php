@extends('backend::layouts.master')

@section('content')
<div class="card card-gray">
	<div class="card-header">
		<div class="header-block">
			<p class="title"> Create Company
				<a href="{{url('backend/company')}}"class="btn btn-info-outline btn-oval btn-sm mx-left">
                    <i class="fa fa-reply"></i> Back
                </a>
			</p>
		</div>
	</div>
    <hr>
	<div class="card-block">
		<div class="row">
            <div class="col-sm-8">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div>
                            {{session('success')}}
                        </div>
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div>
                            {{session('error')}}
                        </div>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{url('backend/company/save')}}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-8">
                                {{csrf_field()}}
                            <div class="form-group row">
                                <label for="name" class="col-sm-4">Name<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" 
                                        value="{{old('name')}}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="location" class="col-sm-4">Location<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <select name="location" id="location" class="form-control chosen-select" required>
                                        <option value="">--Select--</option>
                                        @foreach($ls as $d)
                                        <option value="{{$d->name}}">{{$d->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-4">Description</label>
                                <div class="col-sm-8">
                                <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="photo" class="col-sm-4 form-control-label">Photo</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" id="photo" name="photo" onchange="loadFile(event)" >
                                    <p style='margin-top: 9px;'>
                                        <img src="" alt="" id="img" width="100">
                                    </p>
                                </div>
						    </div>
                            <div class="form-group row">
                                <label class="col-sm-3">&nbsp;</label>
                                <div class="col-sm-9">
                                    <button class="btn btn-info btn-oval">
                                        <i class="fa fa-save"></i> Save
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
	</div>
</div>
@endsection

@section('js')
	<script>
        function loadFile(e){
			var output = document.getElementById('img');
			output.src = URL.createObjectURL(e.target.files[0]);
		}
        $(document).ready(function () {
            $("#sidebar-menu li ").removeClass("active open");
			$("#sidebar-menu li ul li").removeClass("active");
			
            $("#menu_company").addClass("active open");
        })
    </script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection