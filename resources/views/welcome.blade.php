@extends('layouts.master')

@section('content')

@include('includes.nav')
<div class="container">
    <div class="row">
        <div class="col-md-6">

                @foreach($posts as $post)
                     <h3>{{$post->title}}</h3>
                    <h5>{{$post->post}}</h5>
                    <a href="/post/{{$post->id}}">Read More........</a>
                    <hr>
                @endforeach


        </div>
        <div class="col-md-4 col-md-offset-1">
            <h4> Make your Donation </h4>
            <a href="#"><img src="{{url('images/paypal.png')}}" height="80px" width="200px" alt=""></a>

        </div>
    </div>
</div>


@endsection