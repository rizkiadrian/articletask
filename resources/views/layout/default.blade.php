<!doctype html>
<html>
<head>
    @include('include.head')
</head>
@if (\Request::is('home'))
<body background = "http://hdwallpaperbackgrounds.net/wp-content/uploads/2015/09/animals-snow-leopard-Full-HD-1920x1080-Wallpapers.jpg">   
@endif
<body>
<div class="container">

    <header class="row">
        @include('include.header')</br></br>
    </header>

    <div id="main" class="row">

            @yield('content')
           

    </div>
</div>
    <footer class="row">
       @include('include.js')
    </footer>


</body>
</html>
