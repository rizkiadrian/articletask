@extends('layout.default')
@section('content')</br></br>
<!-- <registration form> -->
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Registration</h3>
				{!! Form::open(array('route' => 'users.store', 'class' => 'form', 'files' => true)) !!}
				<div class="form-group col-lg-12">
					<label>Username</label>
					 {!! Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control'])!!}
				</div>
				
				<div class="form-group col-lg-6">
					<label>Password</label>
					{!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control'])!!}
				</div>
				
				<div class="form-group col-lg-6">
					<label>Repeat Password</label>
					{!! Form::password('password_confirmation', ['placeholder' => 'Repeat Password', 'class' => 'form-control'])!!}
				</div>
								
				<div class="form-group col-lg-12">
					<label>Email Address</label>
					{!! Form::text('email', null, ['placeholder' => 'Email Addres', 'class' => 'form-control'])!!}
				</div>
						
				
			</div>
		
			<div class="col-md-6">
				<h3 class="dark-grey">Terms and Conditions</h3>
				<p>
					By clicking on "Register" you agree to The Company's' Terms and Conditions
				</p>
				<p>
					You may use this forum wisely, dont publish any illegal content, make this media useful for everyone who read this media
				</p>
				<p>
					Every user in this forum can speak freely and make relationship by one article.
				</p>
				<p>
					We Give you best service
				</p>
				
				<button type="submit" class="btn btn-primary">Register</button>
			</div>
		</div>
	</section>
</div>
@stop
<!-- <registration form> -->