@extends('layout')
@section('content')

@foreach ($categories as $category)


    <li>
    <a href="categories/{{$category->name}}">{{$category->name}}</a>
</li>



@endforeach

@stop
