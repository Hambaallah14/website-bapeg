<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.dashboards.css')
    </head>

    <body id="page-top">
        <div id="wrapper">
            @include('layouts.dashboards.sidebar')

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('layouts.dashboards.navbar')
                    <div class="container-fluid">
                        @yield('dashboard-content')
                    </div>
                </div>
                @include('layouts.dashboards.footer')
            </div>
            
        </div>

        
        
        @include('layouts.dashboards.js')   
    </body>
</html>