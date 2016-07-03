@extends('layout')
@section('content')

<!-- Page Content -->
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

<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Singers</h1>
        </div>

            @foreach ($singers as $singer)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="singers/{{$singer->name}}">{{$singer->name}}<br>
                <img class="img-responsive" src="{{asset($singer->picture)}}" alt="" >
            </a>
            </div>

            @endforeach


    </div>

@stop
