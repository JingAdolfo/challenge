<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<link href="{{asset('assets/site/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/site/css/jquery.dataTables.css')}}" rel="stylesheet">
	<link href="{{{asset('assets/site/css/select2.css') }}}"  rel="stylesheet" type="text/css" >
	<link href="{{asset('assets/site/css/typeahead.css')}}" rel="stylesheet">
	@yield('styles')
</head>
<body background="adsadasd.jpg">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('product/') }}">Product</a></li>
					<li><a href="{{ url('person/') }}">Person</a></li>
					<li><a href="{{ url('book/') }}">Book</a></li>
					<li><a href="{{ url('course/') }}">Course</a></li>

				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="{{asset('assets/site/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('assets/site/js/socket.io.2.1.0.js')}}"></script>
    <script src="{{asset('assets/site/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('assets/site/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/site/js/jquery-ui.1.11.2.min.js')}}"></script>
    <script src="{{asset('assets/site/js/plugins/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/site/js/sb-admin-2.js')}}"></script>
    <script src="{{asset('assets/site/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/site/js/bootstrap-datepicker.min.js')}}"></script>         
    <script src="{{asset('assets/site/js/moment.min.js')}}"></script> 
    <script src="{{asset('assets/site/js/bootstrap-datetimepicker.min.js')}}"></script> 
    <script src="{{asset('assets/site/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/site/js/bootstrap-dataTables-paging.js')}}"></script>
    <script src="{{asset('assets/site/js/datatables.fnReloadAjax.js')}}"></script>
    <script src="{{asset('assets/site/js/jquery.colorbox.js')}}"></script>
    <script src="{{asset('assets/site/js/jquery.numeric.js')}}"></script> 
    <script src="{{asset('assets/site/js/modal.js')}}"></script>
    <script src="{{asset('assets/site/js/SelectListChange.js')}}"></script> 
    <script src="{{asset('assets/site/js/typeahead.bundle.js')}}"></script>
    <script src="{{asset('assets/site/js/select2.js')}}"></script>
	@yield('scripts')
</body>
</html>
