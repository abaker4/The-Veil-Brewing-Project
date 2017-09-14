@extends('layouts.master')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
           <a href="http://theveilbrewing.bigcartel.com/product/veil-logo-baseball-shirt" target=_blank><img class="first-slide" src="/img/veil/longsleeve.png" alt="long sleeve"></a>
            <div class="container">
                <div class="carousel-caption d-none d-md-block text-left">
                    <h1>Check out Men's and Women's clothing available in all sizes</h1>
                    <h2></h2>
                    <p><a class="btn btn-lg btn-primary" href="http://theveilbrewing.bigcartel.com/products" role="button">Check it out</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <a href="http://theveilbrewing.bigcartel.com/product/logo-zip-up-hoodie-unisex" target=_blank><img class="second-slide" src="/img/veil/hoodie.png" alt="hoodie"></a>
            <div class="container">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Glassware, Accessories and Taproom Tasting Gift Cards</h1>
                    <p></p>
                    <p><a class="btn btn-lg btn-primary" href="http://theveilbrewing.bigcartel.com/products" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <a href="http://theveilbrewing.bigcartel.com/product/stacked-text-logo-tee" target=_blank><img class="third-slide" src="/img/veil/shirt.png" alt="Third slide"></a>
            <div class="container">
                <div class="carousel-caption d-none d-md-block text-right">
                    <h1>Check out our latest inventory and Veil merchandise</h1>
                    <p></p>
                    <p><a class="btn btn-lg btn-primary" href="http://theveilbrewing.bigcartel.com/products" role="button">Browse</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<p>Click on an image below to check out our online shop where you can purchase tees, glassware, & more! Please email webstore@theveilbrewing.com with any questions about online orders.  All orders are generally processed in 1 business day and shipped via 2-3 day Priority Mail by USPS.</p>


@endsection