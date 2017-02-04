@extends('layouts.master')


@section('title','|POST')

@section('content')
@include('includes.nav')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well">

                <h3 class="text-center"> {{$posts->title}}</h3>
                <h5 class="text-center"> {{$posts->post}}</h5>

                <div class="row">
                    <div class="col-lg-2">
                        <h1><a href="/"><<</a></h1>
                    </div>
                    @if(Sentinel::check())
                    <div class="col-sm-4 col-md-offset-2">
                        <a href=""><button class="btn btn-info">EDIT</button></a>
                    </div>
                    <div class="col-sm-4">
                        <a href=""><button class="btn btn-danger">DELETE</button></a>
                    </div>
                    @endif
                    <div class="col-lg-2">
                        <h4><a href="/">comment</a></h4>
                    </div>
                </div>

            </div>
        </div>

    </div>



@endsection
