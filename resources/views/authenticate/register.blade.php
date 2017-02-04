@extends('layouts.master')

@section('title','|REGISTER')

@section('content')
	@include('includes.nav')

	<div class="row">
		<div class="col-md-5 col-md-offset-3">
			@include('includes.error')
			<div class="panel panel-info">
				<div class="panel-heading text-center ">REGISTER HERE</div>
				<div class="panel-body">
					<form action="/register" method="POST" class="form-horizontal">
						{{csrf_field()}}
						<div class="form-group">
							<label for="first_name" class="col-sm-2 control-label">First_name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="first_name" id="first_name" placeholder="first_name" >
							</div>
						</div>
						<div class="form-group">
							<label for="last_name" class="col-sm-2 control-label">Last_name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="last_name" id="last_name" placeholder="last_name" >
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" >
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password" >
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Password Confirmation</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="password_confirmation" >
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-info btn-block">Register</button>
							</div>
						</div>
					</form>
				</div>
				<div class="panel-footer text-center">***all fields required</div>
			</div>
		</div>
	</div>

@endsection