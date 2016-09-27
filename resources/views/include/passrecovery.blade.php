@extends('layout.default')
@section('content')</br></br>

{!! Form::open(array('route' => 'loginforgot.store', 'class' => 'form', 'files' => true)) !!}
				<div class="form-group col-lg-12">
					<label>Email</label>
					 {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control'])!!}

           <button type="submit" class="btn btn-primary">Access Your Password</button>

@stop