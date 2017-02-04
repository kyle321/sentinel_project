@extends('layouts.master')


@section('title','|POST')

@section('content')
@include('includes.nav')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well">
                <h3 class="text-center"> {{$posts->title}}</h3>
                <h5 class="text-center"> {{$posts->post}}</h5>
            </div>
        </div>
    </div>



@endsection
