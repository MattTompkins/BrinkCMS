<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Dashboard</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}" />

        @yield('headerStyles')
        @yield('headerScripts')
        
    </head>
    <body class="sb-nav-fixed">
        @include('backend.components.topnav')
        <div id="layoutSidenav">
           @include('backend.components.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @include('backend.components.title')
                       
                    </div>
                </main>
               @include('backend.components.footer')
            </div>
        </div>

        @yield('footerScripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/js/main.js') }}"></script>
        
    </body>
</html>

