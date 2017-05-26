@extends('layouts.master')


@section('content')
    <div class="row featurette">
        <div class="container">
            <div class="col-md-10">
                <h2 class="featurette-heading"><strong> Click on an image below to check out our online shop where you can purchase tees, glassware, & more! </strong></h2><br/>
                <h4><span class="text-muted">Please email webstore@theveilbrewing.com with any questions about online orders. </span></h4><br/>
                <p>All orders are generally processed in 1 business day and shipped via 2-3 day Priority Mail by USPS. </p>
            </div>
        </div>
    </div>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href="http://theveilbrewing.bigcartel.com/products"><img class="first-slide" src="/img/veil/tshirt2.png" alt="First slide"></a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <a href="http://theveilbrewing.bigcartel.com/products"><img class="second-slide" src="/img/veil/hoodie1.png" alt="Second slide"></a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
               <a href="http://theveilbrewing.bigcartel.com/products"> <img class="third-slide" src="/img/veil/tshirt1.png" alt="Third slide"></a>
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-right">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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


@endsection


