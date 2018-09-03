@extends('layout')

@section('title', 'Domov')

@section('content')
    <div id="services" class="section">
    	<div class="container">
    		
    		<h2 class="title">Služby</h2>

    		<div class="row">
    			
    			<div class="col col-md-4">

    				<div class="service-icon-wrapper">

    					<div class="service-icon vykopove">
    					
    					</div>
    					<p class="icon-text">
    						<strong>Zemné</strong><br>
    						práce
    					</p>
    				
    				</div>

    			</div>

    			<div class="col col-md-4">

    				<div class="service-icon-wrapper">

    					<div class="service-icon rucne">
    					
    					</div>
    					<p class="icon-text">
    						<strong>Stavebné</strong><br>
    						práce
    					</p>
    				
    				</div>

    			</div>

    			<div class="col col-md-4">

    				<div class="service-icon-wrapper">

    					<div class="service-icon demolacne">
    					
    					</div>
    					<p class="icon-text">
    						<strong>Demolačné</strong><br>
    						práce
    					</p>
    				
    				</div>

    			</div>

    		</div>

    		<div class="row">

    			<div class="col col-md-6">

    				<div class="service-icon-wrapper">

    					<div class="service-icon dovoz">
    					
    					</div>
    					<p class="icon-text">
    						<strong>Dovoz</strong><br>
    						materiálu
    					</p>
    				
    				</div>

    			</div>

    			<div class="col col-md-6">

    				<div class="service-icon-wrapper">

    					<div class="service-icon odvoz">
    					
    					</div>
    					<p class="icon-text">
    						<strong>Odvoz</strong><br>
    						odpadu
    					</p>
    				
    				</div>

    			</div>

    		</div>

    	</div>
    </div>

    <div id="carousel" class="section yellow-bg">

        <div id="servicesCarousel" class="carousel slide text-carousel" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#servicesCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#servicesCarousel" data-slide-to="1"></li>
                <li data-target="#servicesCarousel" data-slide-to="2"></li>
                <li data-target="#servicesCarousel" data-slide-to="3"></li>
                <li data-target="#servicesCarousel" data-slide-to="4"></li>
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h2 class="title">Zemné práce</h2>
                    <ul>
                        <li>Lyžice : 30, 40, 50, 60, 70, 85cm a svahovacie 100 a 150cm.</li>
                        <li>Základy pre domy, plot, garáž, terasu, altánok a podobne</li>
                        <li>Bazény hranatých alebo okrúhlych tvarov, umelé jazierka alebo fontány</li>
                        <li>Drenážne jamy naplnené kameňom veľkej frakcie alebo špeciálnymi konštrukciami</li>
                        <li>Prípojky – voda, elektrika, plyn, odpadové rúry</li>
                        <li>Príprava jamy pre studne, šachty, kontrolné miesta a podobne</li>
                        <li>Žumpy a čističky odpadových vôd alebo zberné nádoby</li>
                        <li>Vŕtanie dier zemným vrtákom</li>
                    </ul>
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>My Caption Title (1st Image)</h5>
                            <p>The whole caption will only show up if the screen is at least medium size.</p>
                        </div> -->
                </div>

                <div class="carousel-item">
                    <h2 class="title">Odvoz odpadu</h2>
                    <p>Zabezpečujeme odvoz, nákladku a následnú likvidáciu ťažkých odpadov ako sú tehly, hlina, ale aj ľahkých odpadov ako plasty, drevo, atď...</p>
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>My Caption Title (1st Image)</h5>
                            <p>The whole caption will only show up if the screen is at least medium size.</p>
                        </div> -->
                </div>

                <div class="carousel-item">
                    <h2 class="title">Dovoz materiálu</h2>
                    <ul>
                        <li>Štrk, piesok, kamene, suchý betón, zem</li>
                        <li>Dopravu zabezpečujeme sklápačom</li>
                    </ul>
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>My Caption Title (1st Image)</h5>
                            <p>The whole caption will only show up if the screen is at least medium size.</p>
                        </div> -->
                </div>

                <div class="carousel-item">
                    <h2 class="title">Demolačné práce</h2>
                    <ul>
                        <li>Búranie starých domov, garáží, pivníc</li>
                        <li>Rozbíjanie základov, chodníkov a ciest</li>
                        <li>Kúskovanie veľkých betónov a skál</li>
                    </ul>
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>My Caption Title (1st Image)</h5>
                            <p>The whole caption will only show up if the screen is at least medium size.</p>
                        </div> -->
                </div>

                <div class="carousel-item">
                    <h2 class="title">Stavebné práce</h2>
                    <p>Zaoberáme sa kompletnou realizáciou rodinných domov alebo menších stavieb ako ploty, terasy, zámkové dlažby, oporné múry apod...</p>
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>My Caption Title (1st Image)</h5>
                            <p>The whole caption will only show up if the screen is at least medium size.</p>
                        </div> -->
                </div>

            </div>

            <a class="carousel-control-prev" href="#servicesCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#servicesCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

    </div>

    <div id="machinery" class="section">
    	<div class="container">
    		
    		<h2 class="title">Technika</h2>

    	</div>
    </div>

    <div id="references" class="section">
    	<div class="container">
    		
    		<h2 class="title">Referencie</h2>

    	</div>
    </div>

    <div id="pricelist" class="section">
    	<div class="container">
    		
    		<h2 class="title">Cenník</h2>

    	</div>
    </div>
@endsection