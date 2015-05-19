@extends('articles.master')

@section('title', 'About Articles Show Page')
@section('content')
<h1>{{$article->title}}</h1>


<article>
    {{$article->body}} 

</article>


@stop