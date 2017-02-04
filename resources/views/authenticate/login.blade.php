@extends('layouts.master')

@section('title','|LOGIN')

@section('content')
@include('includes.nav')

<div class="row">
	<div class="col-md-5 col-md-offset-3">
		@include('includes.error')
		<div class="panel panel-info">
			<div class="panel-heading text-center ">LOGIN IN HERE</div>
			<div class="panel-body">
				<form action="/login" method="POST" class="form-horizontal">
					{{csrf_field()}}
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
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info btn-block">Sign in</button>
						</div>
					</div>
				</form>
			</div>
			<div class="panel-footer text-center">***all fields required</div>
		</div>
	</div>
</div>

@endsection