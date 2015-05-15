@extends('articles.master')

@section('title', 'About Articles')
@section('content')
<h1>{{$article->title}}</h1>
<hr>

<article>
    {{$article->body}} 

</article>


@stop