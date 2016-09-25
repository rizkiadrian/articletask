@extends('layout.default')
@section('content')
<h1>Showing {{ $article->article_title }}</h1>
<div class ="container">
    <div class="jumbotron text-center">
        <h2>{{ $article->user_email }}</h2>
        <p>{{$article->article}}</p>
     </div></br></br>
	<a href="{{ route('article.index') }}" class="btn btn-warning">Back To Article</a> <br/><br/>
</div>
@stop