@extends('layouts.master')


@section('content')



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href="http://theveilbrewing.bigcartel.com/product/veil-logo-baseball-shirt" target="_blank"><img class="first-slide" src="/img/veil/tshirt2.png" alt="First slide"></a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h1>Click on an image below to check out our online shop where you can purchase tees, glassware, & more! </h1>
                        <p>Please email <a href="mailto:webstore@theveilbrewing.com">webstore@theveilbrewing.com</a> with any questions about online orders.</p>
                        <p><a class="btn btn-lg btn-primary" href="http://theveilbrewing.bigcartel.com/products" target="_blank" role="button">See Inventory</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <a href="http://theveilbrewing.bigcartel.com/product/logo-zip-up-hoodie-unisex" target="_blank"><img class="second-slide" src="/img/veil/hoodie1.png" alt="Second slide"></a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Logo Zip Up Hoodie</h1>
                        <p>Found in both Gray and Charcoal. For a list of men's and women's sizes check our online store</p>
                        <p><a class="btn btn-lg btn-primary" href="http://theveilbrewing.bigcartel.com/products" target="_blank" role="button">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
               <a href="http://theveilbrewing.bigcartel.com/product/triple-logo-grey-black-unisex-tee" target="_blank"> <img class="third-slide" src="/img/veil/tshirt1.png" alt="Third slide"></a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-right">
                        <h1>Triple Logo Grey/Black Unisex Tee</h1>
                        <p>Light grey/black unisex tee with three logos printed on the finest Next Level blended shirts by Triple Stamp Press.</p>
                        <p><a class="btn btn-lg btn-primary" href="http://theveilbrewing.bigcartel.com/products" target="_blank"role="button">Browse gallery</a></p>
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
    </div>
    <div class="container">
        <div class="col-md-10">
             <p>*All orders are generally processed in 1 business day and shipped via 2-3 day Priority Mail by USPS. </p>
        </div>
    </div>



@endsection


