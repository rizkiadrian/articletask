
<div class="container">
<div class="row">
<div class="col-sm-12">
<h3>YOUR COMMENT HERE</h3>
</div><!-- /col-sm-12 -->
</div><!-- /row -->
@foreach($comment as $comments)
<div class="row">
<div class="col-sm-1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="col-sm-5">
<div class="panel panel-default">
<div class="panel-heading">

<strong>@if($comments->user == ''){{$comment = "this acount disbanned"}}@else{{$comments->user->email}}@endif</strong> <span class="text-muted">{{$comments->created_at}}</span>
</div>
<div class="panel-body">
{{$comments->comment}}
                    @if ($user = Sentinel::check())
                    @if ( $user->inRole('Admin'))
                    <form method="POST" action="{{ route('comment.destroy', $comments->id) }}" accept-charset="UTF-8">
                    <input name="_method" type="hidden" value="DELETE">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" value="Hapus" class="btn btn-danger"/>
                    </form>

                    @endif
                    @endif
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->



</div><!-- /container -->
@endforeach

