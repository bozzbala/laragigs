@extends('layout')

@section('content')

<h1>{{ $heading }}</h1>

@if(count($articles) <= 0)
<p>No articles found</p>
@endif

@foreach($articles as $article)
<h2 title="{{ $article['id'] }}"><a href="/article/{{ $article['static_url'] }}">{{ $article["title"] }}</a></h2>
<p>{{ $article["description"] }}</p>
@endforeach

@endsection