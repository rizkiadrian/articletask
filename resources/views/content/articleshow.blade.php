@extends('layout.default')
@section('content')
<h1>Showing {{ $article->article_title }}</h1>
<div class ="container">
    <div class="jumbotron text-center">
        <h2>{{ $article->user_email }}</h2>
        <p>{{$article->article}}</p>
     </div></br></br>
	<a href="{{ route('article.index') }}" class="btn btn-warning">Back To Article</a> <br/><br/>
	
  
	<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">POST COMMENT</h3>
				<form method="POST" action="{{ route('comment.store', $article->id) }}" accept-charset="UTF-8">
				<div class="form-group col-lg-12">
				<input name="_method" type="hidden" value="POST">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
					<label>Your Comment</label>
					 {!! Form::text('comment', null, ['placeholder' => 'Comment', 'class' => 'form-control'])!!}
					 <input onclick="return confirm('u sure ?');" type="submit" value="POST IT" class="btn btn-danger"/>
				</div>
			</div>
		</div>
	</section>
	<div class="form-group">
                                
</div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-12">
<h3>YOUR COMMENT HERE</h3>
</div><!-- /col-sm-12 -->
</div><!-- /row -->
@foreach($comment as $comments)
<div class="row">
<div class="col-sm-1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="col-sm-5">
<div class="panel panel-default">
<div class="panel-heading">
<strong>{{$comments->user->email}}</strong> <span class="text-muted">{{$comments->created_at}}</span>
</div>
<div class="panel-body">
{{$comments->comment}}
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->



</div><!-- /container -->
@endforeach
@stop