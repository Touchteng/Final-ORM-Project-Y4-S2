@extends('backend::layouts.master')
@section('content')
<div class="card card-gray">
	<div class="card-header">
		<div class="header-block">
			<p class="title">Detail
				<a href="{{url('backend/job')}}"class="btn btn-info-outline btn-oval btn-sm mx-left">
                    <i class="fa fa-reply"></i> Back
                </a>
                <a href="{{url('backend/job/create')}}"class="btn btn-info-outline btn-oval btn-sm mx-left">
                    <i class="fa fa-plus-circle"></i> Create
                </a>
                <a href="{{url('backend/job/edit/'.$cat->id)}}"class="btn btn-info-outline btn-oval btn-sm mx-left">
                    <i class="fa fa-edit"></i> Edit
                </a>
                <a href="{{url('backend/job/delete?id='.$cat->id)}}"class="btn btn-danger-outline btn-oval btn-sm mx-left" onclick="return confirm('You want to delete?')">
                    <i class="fa fa-trash"></i> Delete
                </a>
			</p>
		</div>
	</div>
    <hr>
    <div class="card-block">
        <form>
		    <div class="row">
            
                <div class="col-sm-7">  
                    <div class="form-group row">
                        <label class="col-sm-3">Title</label>
                        <div class="col-sm-9">
                            : {{$cat->name}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Category</label>
                        <div class="col-sm-9">
                            : {{$cat->category}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Company</label>
                        <div class="col-sm-9">
                            : {{$cat->company}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Location</label>
                        <div class="col-sm-9">
                            : {{$cat->lname}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Shift</label>
                        <div class="col-sm-9">
                            : {{$cat->sname}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Feature</label>
                        <div class="col-sm-9">
                            : {{$cat->feature}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Description</label>
                        <div class="col-sm-9">
                           : {!!$cat->description!!}
                        </div>
                    </div>
                </div>
            </div>                 
        </form>
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
@endsection