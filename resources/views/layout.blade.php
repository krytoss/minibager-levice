<html>
    <head>
        <title>Mini-bager levice - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body>

        <header id="main-header">

            <div class="phone">
                <i class="fa fa-mobile-alt" aria-hidden="true"></i><a href="tel:+421903222333">0912 345 678</a>
            </div>
            
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

                    <li>
                        <a href="#">
                            <span class="menu-text">
                                CENNÍK
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="menu-text">
                                KONTAKT
                            </span>
                        </a>
                    </li>

                </ul>

            </div>

        </header>

        <main id="main-content">

            @yield('content')

        </main>

        <footer id="main-footer">
            
            <div class="container">
                
                <h2 class="title">
                    Kontakt
                </h2>

            </div>

        </footer>

    </body>
</html>