@extends('layouts.master')

@section('title','|Create post')

@section('content')
	@include('includes.nav')

	<div class="row">
		<div class="col-md-5 col-md-offset-3">
			@include('includes.error')
			<div class="panel panel-info">
				<div class="panel-heading text-center ">Create a post</div>
				<div class="panel-body">
					<form action="/create" method="POST" class="form-horizontal">
						{{csrf_field()}}
						<div class="form-group">
							<label for="first_name" class="col-sm-2 control-label">Title</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="title" id="title" placeholder="Title" >
							</div>
						</div>
						<div class="form-group">
							<label for="last_name" class="col-sm-2 control-label">Post</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="post" id="post" placeholder="post"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Slug</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="slug" id="slug" placeholder="slug" >
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-info btn-block">Create</button>
							</div>
						</div>
					</form>
				</div>
				<div class="panel-footer text-center text-danger">***all fields required</div>
			</div>
		</div>
	</div>

@endsection