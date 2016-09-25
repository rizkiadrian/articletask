@extends('layout.default')
@section('content')
</br></br>
<!-- <registration form> -->
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Create Your Article</h3>
				{!! Form::open(array('route' => 'article.store', 'class' => 'form', 'files' => true)) !!}
				<div class="form-group col-lg-12">
					<label>Create article</label>
					 {!! Form::text('title', null, ['placeholder' => 'Your Title Here', 'class' => 'form-control'])!!}
				</div>	
			<div class ="form-group col-lg-12">
			<label>Import File</label>
			 {!! Form::file('article', null, array('required', 'class'=>'form-control')) !!}
			</div>
            </div>
            </div>
              <div class="form-group">
                                {!! Form::submit('Create Account', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
</div>
	</section>
</div>
@stop
<!-- <registration form> -->