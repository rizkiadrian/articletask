<!doctype html>
<html>
<head>
    @include('include.head')
</head>
@if (\Request::is('home') ) or (\Request::is('login') )
<body background = "http://hdwallpaperbackgrounds.net/wp-content/uploads/2015/09/animals-snow-leopard-Full-HD-1920x1080-Wallpapers.jpg">   
@endif
<body>
<div class="container">

    <header class="row">
        @include('include.header')</br></br>
    </header>

    <div id="main" class="row">

            @yield('content')
         @if (count($errors) > 0)
<div class="alert alert-danger">
    There were some problems adding the category.<br />
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
           

    </div>
</div>
    <footer class="row">
       @include('include.js')
    </footer>


</body>
</html>
