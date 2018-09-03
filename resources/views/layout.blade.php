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

            <div id="header-carousel" class="section yellow-bg">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ul>

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="{{ asset('img/img_0012-big.jpg') }}">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('img/img_0015-big.jpg') }}">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('img/img_0017-big.jpg') }}">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('img/img_0001-big.jpg') }}">
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>

            </div>

            @yield('content')

        </main>

        <footer id="main-footer">
            
            <div class="container">
                
                <h2 class="title">
                    Kontakt
                </h2>

            </div>

        </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    </body>
</html>