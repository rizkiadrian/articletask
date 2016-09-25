<!-- <article box> -->
@extends('layout.default')
@section('content')
<div class="container">
	 <div id="blog" class="row"> 
     @foreach($article as $articles)
                 <div class="col-md-10 blogShort">
                     <h1>{{$articles->article_title}}</h1>
                     <img src="http://www.kaczmarek-photo.com/wp-content/uploads/2012/06/guinnes-150x150.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                     
                         <em>{{$articles->user_email}} <a href="http://bootsnipp.com/snippets/featured/sexy-sidebar-navigation" target="_blank">Sexy Sidebar Navigation</a></em>
                     <article><p>
                         {{$articles->article}}
                         </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="http://bootsnipp.com/user/snippets/2RoQ">READ MORE</a> 
                 </div>
                 @endforeach
                 
                 
               <div class="col-md-12 gap10"></div>
             </div>
</div>
<!-- <article box> -->
@stop