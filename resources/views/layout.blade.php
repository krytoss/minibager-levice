<html>
    <head>
        <title>Mini-bager levice - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body>

        <header id="main-header">
            
        </header>

        <main>

            <div class="container">

                @yield('content')

            </div>

        </main>

        <footer id="main-footer">
            
            

        </footer>

    </body>
</html>