@extends('articles.master')

@section('title', 'About Articles Edit Page')
@section('content')
<h1>Edit {{$article->title}} article</h1>
<hr>
{!!Form::model($article,['method'=>'PATCH','action'=>['ArticleController@update',$article->id]])!!}
@include('articles.form',['submitButtonText'=>'Edit Article']);

{!!Form::close()!!}
@include('articles.list');
@stop