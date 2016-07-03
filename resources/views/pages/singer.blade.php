@extends('layout')
@section('content')
<style>
.singer {
    position: relative;
    float: left;

    height: 300px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;
    float:left;
	list-style-type:none;
	width:400px;
}
</style>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<img class="singer" src="{{asset($singer->picture)}}" alt="" ><br>
<b>Name:</b> {{$singer->name}} <br>
<b>Biography:</b> {{$singer->bio}}<br>
<b>Albums:</b>
@foreach ($albums as $album)
<a href="/albums/{{$album->albumname}}">{{$album->albumname}}</a>

@endforeach
</div>
@stop
