@extends('layout')
@section('content')


<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

<iframe width="420" height="315" src="{{$song->videourl}}" frameborder="0" allowfullscreen></iframe>
        <ul>
        Name:{{$song->name}}<br>
        Album:<a href="/albums/{{$song->album}}">{{$song->album}}</a><br>
        Singer: <a href="/singers/{{$song->singer}}">{{$song->singer}}</a><br>

        </ul>






@stop
