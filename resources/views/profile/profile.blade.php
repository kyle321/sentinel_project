@extends('layouts.master')
@section('title','|edit profile')

@section('content')
	
	<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading text-center ">Update your profile</div>
				<div class="panel-body">
					<form action="/create" method="POST" class="form-inline" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="row">
					<div class="col-md-12">
						<img src="">
					</div>
				</div>
					<div class="row">
					
						<div class="form-group">
							<label for="first_name" class="col-sm-2 control-label">First_Name</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="title" value="{{Sentinel::getUser()->first_name}}" id="title" placeholder="Title" >
							</div>
						</div>
						<div class="form-group">
							<label for="first_name" class="col-sm-2 control-label">First_Name</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="title" value="{{Sentinel::getUser()->first_name}}" id="title" placeholder="Title" >
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
							<button class="btn btn-info">Update</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>
@endsection