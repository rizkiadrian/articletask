@extends('layout.default')
@section('content')</br></br>

{!! Form::open(array('route' => 'users.store', 'class' => 'form', 'files' => true)) !!}
				<div class="form-group col-lg-12">
					<label>Username</label>
					 {!! Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control'])!!}



@stop