<!-- <article box> -->
@extends('layout.default')
@section('content')
<div class="container">

	 <div id="blog" class="row"> 
     @foreach($article as $articles)
                 <div class="col-md-10 blogShort">
                     <h1>{{$articles->article_title}}</h1>
                     
                     
                         <em>{{$articles->user_email}} </em>
                     <article><p>
                         {{$articles->article}}
                         </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="{{route('article.show', $articles->id)}}">READ MORE</a>
                     @if ($user = Sentinel::check())
                    @if ( $user->inRole('Admin'))
                    <form method="POST" action="{{ route('article.destroy', $articles->id) }}" accept-charset="UTF-8">
                    <input name="_method" type="hidden" value="DELETE">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <a class="btn btn-blog pull-right marginBottom10" href="{{ route('article.edit', $articles->id) }}">EDIT</a>
                    <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" value="Hapus" class="btn btn-danger"/>
                </form>
                    @endif
                    @endif
                 </div>
                 @endforeach
                 {{ $article->links() }}
                 
                 
                 
               <div class="col-md-12 gap10"></div>
             </div>
</div>
<!-- <article box> -->
@stop