@extends('backend::layouts.master')

@section('content')
<div class="card card-gray">
	<div class="card-header">
		<div class="header-block">
			<p class="title"> Create Job
				<a href="{{url('backend/job')}}"class="btn btn-info-outline btn-oval btn-sm mx-left">
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
                <form action="{{url('backend/job/save')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="name" class="col-sm-3">Name<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" 
                                value="{{old('name')}}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="company" class="col-sm-3">Company<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="company" name="company" 
                                value="{{old('company')}}" required >
                        </div>
                    </div>
                    <div class="form-group row form-control-label">
                        <label for="location" class="col-sm-3">Location<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select name="location" id="location" class="form-control chosen-select" required>
                                <option value="">--Select--</option>
                                @foreach($dd as $location)
                                <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-sm-3">Category<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="category" name="category" 
                                value="{{old('category')}}" required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="shift" class="col-sm-3">Shift<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select name="shift" id="shift" class="form-control chosen-select" required>
                                <option value="">--Select--</option>
                                @foreach($cc as $shift)
                                <option value="{{$shift->id}}">{{$shift->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feature" class="col-sm-3">Feature<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select name="feature" id="feature" class="form-control" required>
                                <option >--Select--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-3">Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
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
			
            $("#menu_job").addClass("active open");
        })
    </script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
      <script>
          CKEDITOR.replace( 'description');
      </script>

@endsection

