<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.websites.css')
    </head>

    <body>
        @include('layouts.websites.navbar')
        @include('layouts.websites.slide_banner')
        @include('layouts.websites.slide_layanan')
        
        <div class="container mt-5 mb-5 pb-5">
            @yield('container')
        </div>

        @include('layouts.websites.footer')
        @include('layouts.websites.js')   
    </body>
</html>