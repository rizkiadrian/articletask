@extends('layout.default')
@section('content')</br></br>
<!-- <comment form> -->
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">POST COMMENT</h3>
				{!! Form::open(array('route' => 'comment.store', 'class' => 'form', 'files' => true)) !!}
				<div class="form-group col-lg-12">
					<label>Your Comment</label>
					 {!! Form::text('comment', null, ['placeholder' => 'Comment', 'class' => 'form-control'])!!}
				</div>
			</div>
		</div>
	</section>
	<div class="form-group">
                                {!! Form::submit('Create Comment', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
</div>
</div>
@stop
<!-- <comment form> -->