@extends('articles.master')

@section('title', 'About Articles Index Page')
@section('content')
<p>learning by prabhat about articles</p>

<h1>Articles</h1>
<hr>
@foreach($articles as $article)
<article>
    <h2><a href='/articles/{{$article->id}}'>{{$article->title}}</a></h2>
    <div class="body">{{$article->body}}</div>
    
</article>

@endforeach
@stop