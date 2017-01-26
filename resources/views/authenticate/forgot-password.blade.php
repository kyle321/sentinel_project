@extends('layouts.master')

@section('content')
    @include('layouts.nav')
    <div class="container">

        <div class="col-md-6 col-md-offset-2">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading text-center"><h3>Forgot password</h3></div>
                <div class="panel-body">
                    <form action="/forgot-password" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">@</span>
                                <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group">
                            {{csrf_field()}}
                            <input type="submit" class="btn btn-success btn-block" value="Send Link">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@stop