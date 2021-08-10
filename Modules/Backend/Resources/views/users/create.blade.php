@extends('backend::layouts.master')

@section('content')
<div class="card card-gray">
	<div class="card-header">
		<div class="header-block">
			<p class="title"> Create User
				<a href="{{url('backend/user')}}"class="btn btn-info-outline btn-oval btn-sm mx-left">
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
                <form action="{{url('backend/user/save')}}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-7">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="name" class="col-sm-3"> Name <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" 
                                    value="{{old('name')}}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-3">Username <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" name="username" 
                                    value="{{old('username')}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3">Email <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" 
                                    value="{{old('email')}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3">Password <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="password" name="password" 
                                    value="{{old('password')}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="role_id" class="col-sm-3">Role<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <select name="role_id" id="role_id" class="form-control" required>
                                        <option value="">--select--</option>
                                        @foreach($rs as $d)
                                        <option value="{{$d->id}}">{{$d->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>                           
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group row">
                                <label for="photo" class="col-sm-3">Photo</label>
                                <div class="col-sm-9">
                                    <input type="file" name="photo" id="photo" value="{{old('photo')}}" class="form-control" >
                            
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
        $(document).ready(function () {
            $("#sidebar-menu li ").removeClass("active open");
			$("#sidebar-menu li ul li").removeClass("active");
			
            $("#menu_security").addClass("active open");
			$("#security_collapse").addClass("collapse in");
            $("#menu_user").addClass("active");
			
        });
    </script>
@endsection