@extends('backend::layouts.master')

@section('content')
<div class="card card-gray">
	<div class="card-header">
		<div class="header-block">
			<p class="title"> User
				<a href="{{url('backend/user/create')}}"class="btn btn-info-outline btn-oval btn-sm mx-left">
                    <i class="fa fa-plus-circle"></i> Create
                </a>
			</p>
		</div>
	</div>
    <hr>
	<div class="card-block">
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
		<div class="table-flip-scroll">
			
			<table class="table table-sm table-bordered table-hover flip-content">
				<thead class="flip-header">
					<tr>
						<th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Photo</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>			
                    <?php
                        $pagex = @$_GET['page'];
                        if(!$pagex)
                            $pagex = 1;
                        $i = 22 * ($pagex - 1) + 1;
                    ?>
                    @foreach($us as $cat)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$cat->name}}</td>
                            <td>{{$cat->email}}</td>
                            <td>{{$cat->username}}</td>
                            <td>{{$cat->rname}}</td>
                            <td><img src="{{asset($cat->photo)}}" width="27"></td>
                            <td>
                                <a href="{{url('backend/user/edit/'.$cat->id)}}" class="text-success" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{url('backend/user/delete?id='.$cat->id)}}" title="Delete" class='text-danger'
                                 onclick="return confirm('You want to delete?')">
                                    <i class="fa fa-trash"></i>
                                </a>&nbsp;
                            </td>
                        </tr>
                    @endforeach
				</tbody>
			</table>
			{{$us->links()}}
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
			
        })
    </script>
@endsection