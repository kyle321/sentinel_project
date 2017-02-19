@extends('layouts.master')
@section('title','|edit profile')

@section('content')
	<div class="well well-lg">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-info">
				@include('includes.error')
					<div class="panel-heading text-center ">Update your profile</div>
					<div class="panel-body">
						<form action="/profile/{{Sentinel::getUser()->id}}" method="POST" class="form-inline" enctype="multipart/form-data">
								{{csrf_field()}}
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<img src="/images/avatar/{{Sentinel::getUser()->avatar}}" style="width:150px; height:150px; border-radius: 50%; margin-left: 25px; ">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4 col-sm-offset-1">
									<div class="form-group">
									  <label for="exampleInputName2">First_Name</label>
									  <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe" name="first_name" value="{{Sentinel::getUser()->first_name}}">
									</div>
									<div class="form-group">
									  <label for="exampleInputName2">Last_Name</label>
									  <input type="text" class="form-control" name="last_name" id="exampleInputName2" placeholder="Jane Doe" value="{{Sentinel::getUser()->last_name}}">
									</div>
								</div>
								<div class="col-sm-4">
								<div class="form-group">
								  <label for="exampleInputName2">Email</label>
								  <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe" name="email" value="{{Sentinel::getUser()->email}}">
								</div>
								<div class="form-group">
									  <label for="exampleInputName2">profile pic</label>
									  <input type="file" name="avatar" value="{{Sentinel::getUser()->avatar}}">
								</div>
									
								</div>
								<div class="row">
									<div class="col-sm-4 col-md-offset-3">
										<button class="btn btn-success" style="margin-top:20px;">Update info</button>
									</div>
									<div class="col-sm-4">
										<button class="btn btn-success" style="margin-top:20px;"><a href="">BACK</a></button>
									</div>
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
@endsection