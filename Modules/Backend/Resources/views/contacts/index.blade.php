@extends('backend::layouts.master')

@section('content')
<div class="card card-gray">
	<div class="card-header">
		<div class="header-block">
			<p class="title"> Contact
				<!-- <a href="{{url('backend/category/create')}}"class="btn btn-info-outline btn-oval btn-sm mx-left">
                    <i class="fa fa-plus-circle"></i> Create
                </a> -->
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
                        <th>Subject</th>
                        <th>Company</th>
                        <th>Message</th>
                        <th>Create Date</th>
					</tr>
				</thead>
				<tbody>			
                    <?php
                        $pagex = @$_GET['page'];
                        if(!$pagex)
                            $pagex = 1;
                        $i = 22 * ($pagex - 1) + 1;
                    ?>
                    @foreach($con as $cat)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$cat->name}}</td>
                            <td>{{$cat->email}}</td>
                            <td>{{$cat->subject}}</td>
                            <td>{{$cat->company}}</td>
                            <td>{{$cat->message}}</td>
                            <td>{{$cat->created_date}}</td>
                        </tr>
                    @endforeach
				</tbody>
			</table>
			{{$con->links()}}
		</div>
		
	</div>
</div>
@endsection

@section('js')
	<script>
        $(document).ready(function () {
            $("#sidebar-menu li ").removeClass("active open");
			$("#sidebar-menu li ul li").removeClass("active");
			
            $("#menu_contact").addClass("active open");
        })
    </script>
@endsection