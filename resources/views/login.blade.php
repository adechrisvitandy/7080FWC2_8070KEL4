<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>@yield('page_title','halaman awal')</title>
     <!-- Bootstrap -->
    <link href="{{ asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('gentelella/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('gentelella/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('gentelella/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('gentelella/build/css/custom.min.css')}}" rel="stylesheet">
 <body class="login">
 <style>
 	body{
 		padding-top: 70px;
 		padding-bottom: 70px;
 	}
 	.starter-template{
 		padding: 40px 15px;
 		text-align: center;
 	}
 	.form-horizontal{
 		padding: 15px 10px;
 	}
 	footer{
 		padding-top: 15px;
 		text-align: right;
 	}
 </style>	
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapse" data-toogle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('/')}}">Home</a>
					</div>
				</div>
			</nav>
			<div class="clearfix"></div>
			<div class="col-md-4 col-md-offset-4">
				@if (count($errors)> 0)
				<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
					@endforeach
					</ul>
				</div>
				@endif
				<div class="panel panel-default">
				<div class="panel-heading"> 
				
				 <h1>Login Form</h1>
				
				  </div>
				  {!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
				    <div class="form-group">
				  <label class="col-sm-4 control-label">Username</label>
				 <div class="col-sm-8">
				{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
				</div>
				</div>

				  <div class="form-group">
				  <label class="col-sm-4 control-label">Password</label>
				 <div class="col-sm-8">
				{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
				</div>
				</div>
				<div style="width: 100%; text-align: right;">
				<button class="btn btn-primary"><i class="fa fa-lock"></i>Masuk</button>
				<button type="reset" class="btn btn-danger"> <i class="fa fa-undo"></i>Ulangi</button>
				</div>
				{!! Form::close() !!}	
				</div>
				</div>
				<nav class="navbar navbar-default navbar-fixed-bottom">
			</nav>
			<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
			<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
			<script type="javascript">
			$(function(){
				$('[data-toggle="tooltip"]').tooltip()
			});
			</script>
</body>
</html>

