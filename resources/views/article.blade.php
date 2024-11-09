@if(empty($article))
<p>There is no such article</p>
@else
<h1>{{ $article["title"] }}</h1>
<p>{!! $article["content"] !!}</p>
<hr>
<a href="/">Go back</a>
@endif