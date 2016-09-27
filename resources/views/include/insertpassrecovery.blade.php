@extends('layout.default')
@section('content')</br></br>

{!! Form::model($id, ['route'=>['loginforgot.update', $id], 'method'=> 'PATCH'])  !!}
				<div class="form-group col-lg-12">
					<label>new password</label>
					 {!! Form::password('password', null, ['placeholder' => 'newPAss', 'class' => 'form-control'])!!}

           <button type="submit" class="btn btn-primary">Change your password</button>

@stop