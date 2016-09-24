@extends('layout.default')
@section('content')</br></br>

{!! Form::open(array('route' => 'email.sendemail', 'class' => 'form', 'files' => true)) !!}
				<div class="form-group col-lg-12">
					<label>Email</label>
					 {!! Form::text('recipent', null, ['placeholder' => 'Email', 'class' => 'form-control'])!!}

           <button type="submit" class="btn btn-primary">SEND MAIL</button>

@stop