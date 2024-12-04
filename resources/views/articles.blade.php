@extends('layout')

@section('content')
@include('partials._hero')

<div class="container mx-auto px-20">
    <h1 class="text-2xl">{{ $heading }}</h1>

    @if(count($articles) <= 0)
        <p class="text-lg">No articles found</p>
    @endif

    @foreach($articles as $article)
        <h2 title="{{ $article['id'] }}" class="text-lg"><a href="/article/{{ $article['static_url'] }}">{{ $article["title"] }}</a></h2>
        <p>{{ $article["description"] }}</p>
    @endforeach
</div>
@endsection