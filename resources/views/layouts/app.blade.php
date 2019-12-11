<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    
</head>
<body style="text-align: center;">
    <div class="flex-center position-ref full-height">
        
        @include('layouts.nav')
        <center>
            <div class="op">
                @yield('content')
            </div>
        </center>
    </div>
<footer class="footer fixed-bottom">
    @include('layouts.footer')
</footer>
</body>
</html>