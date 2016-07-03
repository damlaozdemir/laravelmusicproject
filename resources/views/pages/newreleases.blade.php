@extends('layout')
<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Latest Songs</h1>
        </div>
        @foreach ($latestsongs as $latestsong)

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="songs/{{$latestsong->name}}"><img class="img-responsive"src="{{asset('css/images/play_button.png')}}" alt="" width=10% height=10% >
        {{$latestsong->name}} - {{$latestsong->singer}}

        </a>
        </div>

        @endforeach
 </div>
{!! $latestsongs->render() !!}
