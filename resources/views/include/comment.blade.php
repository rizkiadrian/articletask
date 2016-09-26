
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
<strong>{{$comments->user->email}}</strong> <span class="text-muted">{{$comments->created_at}}</span>
</div>
<div class="panel-body">
{{$comments->comment}}
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->



</div><!-- /container -->
@endforeach
