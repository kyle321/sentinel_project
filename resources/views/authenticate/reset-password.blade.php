@extends('layouts.master')

@section('content')
    @include('layouts.nav')
    <div class="container">

        <div class="col-md-6 col-md-offset-2">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <ul>
                            <li>{{$error}}</li>
                        </ul>
                    @endforeach
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading text-center"><h3>Forgot password</h3></div>
                <div class="panel-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">@</span>
                                <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">@</span>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group">
                            {{csrf_field()}}
                            <input type="submit" class="btn btn-success btn-block" value="update password">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@stop