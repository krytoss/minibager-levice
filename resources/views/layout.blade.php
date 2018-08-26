<html>
    <head>
        <title>Mini-bager levice - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body>

        <header id="main-header">
            
            <div id="main-menu" class="menu horizontal">
                
                <ul>
                    
                    <li>
                        <a href="#">
                            <span class="menu-text">
                                SLUŽBY
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="menu-text">
                                TECHNIKA
                            </span>
                        </a>
                    </li>

                </ul>

            </div>

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