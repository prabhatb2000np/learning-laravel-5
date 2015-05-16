@extends('articles.master')

@section('title', 'About Articles Create Page')
@section('content')
<h1>Write a new article</h1>
<hr>

{!!Form::open(['url'=>'articles'])!!}
@include('articles.form',['submitButtonText'=>'Add Article']);


{!!Form::close()!!}
@include('articles.list');
@stop
