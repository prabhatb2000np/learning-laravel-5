
@extends('forum.master')
@section('title', 'About Me')
@section('content')
<p>learning by prabhat</p>
@stop
@section('about_me')
    <h1>About me</h1>    
    <p>i am happy...</p>
@stop
@if(count($friends))
<p>My friends are as belows:</p>

@foreach ($friends as $key=>$value)
{{$key}} {{$value}}<br>
@endforeach
@endif