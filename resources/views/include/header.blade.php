
<!-- <navigation bar> -->
<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/home">LITTLE FORUM</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				</li>
				@if ($user = Sentinel::check())
				<li class="active"><a href="#">{{$user -> username}} <span class="sr-only">(current)</span></a></li>
				<li class="active"><a href="/logout">LOGOUT <span class="sr-only">(current)</span></a></li>
				<li class="active"><a href="{{ route('article.index')}}">SEE ARTICLE <span class="sr-only">(current)</span></a></li>
				@else
				<li class="active"><a href="#">Username<span class="sr-only">(current)</span></a></li>
				<li class="active"><a href="/home">LOGIN <span class="sr-only">(current)</span></a></li>
				<li class="active"><a href="{{ route('article.index')}}">SEE ARTICLE <span class="sr-only">(current)</span></a></li>
				@endif
			</ul>
		</div>
	</div>
</nav>
<!-- <end navbar> -->