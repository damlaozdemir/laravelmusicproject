@extends('layout')
@section('content')

<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">All Songs</h1>
        </div>
        @foreach  ($songs as $song)
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="/songs/{{$song->name}}"><img class="img-responsive"src="{{asset('css/images/play_button.png')}}" alt="" width=10% height=10% >
        {{$song->name}}({{$song->singer}})

        </a>
        </div>

        @endforeach
 </div>

{!! $songs->render() !!}


@stop
