<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    
</head>
<body>        
    @include('layouts.nav')
        <div class="op">
            @yield('content')
        </div>
    <footer class="footer fixed-bottom">
        @include('layouts.footer')
    </footer>
</body>
</html>