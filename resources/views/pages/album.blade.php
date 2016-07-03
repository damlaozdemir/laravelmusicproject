@extends('layout')
@section('content')


<div class="col-lg-3 col-md-4 col-xs-6 thumb">

    <img class="img-responsive" src="{{asset($album->url)}}" alt="" >
    Name: {{$album->albumname}} <br>
    Singer: <a href="/singers/{{$album->singer}}">{{$album->singer}}</a><br>
    Release: {{$album->releasedate}}<br>
    Songs in this album:
    @foreach ($songs as $s)
    <a href="/songs/{{$s->name}}">{{$s->name}}</a>
    @endforeach
</div>
@if (Auth::guest())

@else


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Comments</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/albums/{{$album->albumname}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            <ul class="list-group">
                                @foreach ($comments as $comment)
                                        {{$comment->comment}}<br>
                                @endforeach
                            </ul>
                            </div>
                        </div>
                        <div class="form-group">
							<label class="col-md-4 control-label">Write your comment:</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="comment">
							</div>
						</div>
                        <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
								        Send
								</button>
							</div>
						</div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endif
