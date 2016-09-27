@extends('layout.default')
@section('content')</br></br>
 @include('flash::message')
<div class = row>
<div class = col-xs-3>
  {!! Form::open(array('route' => 'login.store', 'class' => 'form', 'files' => true)) !!}
@include('include.loginform')
</div>
<div class = col-xs-6>
</div>
</div>

 {!! session('flash_notification.message') !!}


@stop