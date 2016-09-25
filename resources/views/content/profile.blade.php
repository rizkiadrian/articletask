@extends('layout.default')</br></br>
@section('content')
<!-- <user profile> -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="https://freeiconshop.com/files/edd/person-flat.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                    @if ($user = Sentinel::check())
                        <h4>{{$user->username}}</h4>
                        <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{$user->email}}
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                            <a href="{{ route('article.create') }}" class="btn btn-warning">POST ARTICLE</a> <br/><br/> 
                        <!-- Split button -->
                </div>
            </div>
        </div>
    </div>
</div>
@else
<h3>login first</h3>
@endif
<!-- <profile -->
@stop
