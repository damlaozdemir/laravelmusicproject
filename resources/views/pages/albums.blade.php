@extends('layout')
@section('content')
<style>
.img-responsive {
    position: relative;
    float: left;

    height: 150px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;
    float:left;
	list-style-type:none;
	width:200px;
}


</style>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Latest Albums</h1>
        </div>
        @foreach ($latestalbums as $latestalbum)
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="albums/{{$latestalbum->albumname}}">{{$latestalbum->albumname}} - {{$latestalbum->singer}}<br>
            <img class="img-responsive" src="{{asset($latestalbum->url)}}" alt="" >
        </a>
        </div>

        @endforeach
 </div>

    <hr>
    <div class="col-lg-12">
        <h1 class="page-header">All Albums</h1>
    </div>
    @foreach ($albums as $album)
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a href="albums/{{$album->albumname}}">{{$album->albumname}} - {{$album->singer}}<br>
        <img class="img-responsive" src="{{asset($album->url)}}" alt="" >
    </a>
    </div>

    @endforeach


@stop
