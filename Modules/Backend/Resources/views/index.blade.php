@extends('backend::layouts.master')

@section('content')
    <h1>Welcome to Admin page</h1>
@stop
@section('js')
	<script>
        $(document).ready(function () {
            $("#sidebar-menu li").removeClass('active');
		    $("#menu_dashboard").addClass('active');
			
        })
    </script>
@endsection
