@extends('layout')
@section('content')


@foreach ($tables as $table)
    <li>
    <a href="/singers/{{$table->name}}">{{$table->name}}
    </li>
@endforeach



@stop
