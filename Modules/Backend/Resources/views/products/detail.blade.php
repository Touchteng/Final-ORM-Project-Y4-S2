@extends('backend::layouts.master')
@section('content')
<div class="card card-gray">
	<div class="card-header">
		<div class="header-block">
			<p class="title">Detail
				<a href="{{url('backend/product')}}"class="btn btn-info-outline btn-oval btn-sm mx-left">
                    <i class="fa fa-reply"></i> Back
                </a>
                <a href="{{url('backend/product/create')}}"class="btn btn-info-outline btn-oval btn-sm mx-left">
                    <i class="fa fa-plus-circle"></i> Create
                </a>
                <a href="{{url('backend/product/edit/'.$com->id)}}"class="btn btn-info-outline btn-oval btn-sm mx-left">
                    <i class="fa fa-edit"></i> Edit
                </a>
                <a href="{{url('backend/product/delete?id='.$com->id)}}"class="btn btn-danger-outline btn-oval btn-sm mx-left" onclick="return confirm('You want to delete?')">
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
                        <label class="col-sm-3">Name</label>
                        <div class="col-sm-9">
                            : {{$com->name}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Size</label>
                        <div class="col-sm-9">
                            : {{$com->sname}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Category</label>
                        <div class="col-sm-9">
                            : {{$com->cname}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Price</label>
                        <div class="col-sm-9">
                            : {{$com->price}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Tag</label>
                        <div class="col-sm-9">
                            : {{$com->tname}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Avilability</label>
                        <div class="col-sm-9">
                            : {{$com->aviname}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">Detail</label>
                        <div class="col-sm-9">
                           : {!!$com->detail!!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                <div class="form-group row">
                        <label for="photo" class="col-sm-3">Photo</label>
                        <div class="col-sm-9">
                            <img src="{{asset($com->photo)}}" class="img-responsive " width="200" alt="">
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
			
            $("#menu_company").addClass("active open");
        })
    </script>
@endsection