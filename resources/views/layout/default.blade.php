<!doctype html>
<html>
<head>
    @include('include.head')
</head>
<body background = "http://hdwallpaperbackgrounds.net/wp-content/uploads/2015/09/animals-snow-leopard-Full-HD-1920x1080-Wallpapers.jpg">
<div class="container">

    <header class="row">
        @include('include.header')
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
