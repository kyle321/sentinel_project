@extends('layouts.master')

@section('content')
@include('layouts.nav')


<div class="container">

	<div class="col-md-6 col-md-offset-2">
	
		<div class="panel panel-default">
			 <div class="panel-heading text-center"><h3>register here...</h3></div>
			 <div class="panel-body">
				 <form action="/register" method="POST">
					<div class="form-group">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">@</span>
						  <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"></span>
						  <input type="text" class="form-control" name="first_name" placeholder="first_name" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"></span>
						  <input type="text" class="form-control" name="last_name" placeholder="last_name" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"></span>
						  <input type="password" class="form-control" name="password" placeholder="password" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"></span>
						  <input type="password" class="form-control" name="password_confirmation" placeholder="password_confirmation" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="form-group">
					{{csrf_field()}}
						  <input type="submit" class="btn btn-success btn-block" value="Register">
						</div>
				</form>
				</div>
			</div>
		</div>
</div>


@stop