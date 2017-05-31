

@extends('layouts.master')

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

@section('content')
<div class="parallax-pour pt-2" style="height: 100vh;background: transparent;">

    <div class="container">

        <h1 class="display-1"></h1>
        <p class="lead"></p>
    </div>
</div>


<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
    <div class="container">
        <div class="col-md-10">
            <h2 class="featurette-heading">Welcome to <span class="text-muted">The Veil Brewing Co</span></h2>
            <p class="lead"> We are a craft brewery located in the Scott's Addition neighborhood of Richmond, Virginia. We focus on hop forward beers, high gravity and barrel aging, lagers, wild ales, and spontaneous fermentation. We are dedicated to quality and strive to provide a unique experience through our beers and our tasting room.

                We look forward to seeing you soon. Cheers!</p>
        </div>
    </div>
</div>


<hr class="featurette-divider">





<div class="parallax-window" style="height: 100vh;background: transparent;">

    <div class="container">

        <h1 class="display-1"></h1>
        <p class="lead"></p>
    </div>
</div>




<div class="container marketing">

    <div class="row featurette">
        <div class="col-md-7 push-md-5">
            {{--<h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>--}}
            {{--<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>--}}
        </div><!-- /.container -->
        <hr class="featurette-divider">




        <div class="parallax-interior" style="height: 100vh;background: transparent;">

            <div class="container">

                <h1 class="display-1"></h1>
                <p class="lead"></p>
            </div>
        </div>



            <hr class="featurette-divider">

        <div class="container marketing">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one.</h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
            </div>

            <hr class="featurette-divider">

        </div> <!--End Container Marketing-->

        <!-- /END THE FEATURETTES -->

        <div class="parallax-fermenter" style="height: 100vh;background: transparent;">

            <div class="container">

                <h1 class="display-1"></h1>
                <p class="lead"></p>
            </div>
        </div>



        <div class="container marketing">
            <hr class="featurette-divider">


            <div class="row featurette">
                <div class="col-md-12 text-center">
                    <h4 class="featurette-heading text-center"><span class="text-muted"> The Veil Brewing Co.</span></h4>
                    <p class="lead text-center"> was founded by Dustin Durrance and Matt Tarpey in 2016. We brew craft beers for draft consumption and cans in limited release. We believe local breweries play an important role in their communities which is why, the neighborhood of Scott's Addition was such a good fit for The Veil. Our tap room is open to the public and we also offer tours of our brewery (by appointment).

                        .Find The Veil on <a href="https://www.beeradvocate.com/search/?q=the+veil&qt=beer">Beer Advocate</a> and <a href="https://www.ratebeer.com/brewers/the-veil-brewing-company/26864/">Rate Beer</a></p>
                </div>
            </div>


            <hr class="featurette-divider">

        </div> <!--End Container Marketing-->



        <div class="parallax-sign" data-parallax="scroll" data-image-src="/public/img/veil/sign.jpeg" style="height: 100vh;background: transparent;">

            <div class="container">

                <h1 class="display-1"></h1>
                <p class="lead"></p>
            </div>
        </div>


        <div class="container marketing">
            <hr class="featurette-divider">


            <div class="row featurette">
                <div class="col-md-7">
                </div>
            </div>

            <hr class="featurette-divider">

        </div> <!--End Container Marketing-->

        <div class="row featurette">
            <div class="col-md-7">
                {{--<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>--}}
                {{--<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>--}}
            </div>
        </div>

        <hr class="featurette-divider">






        <iframe data-parallax="scroll" src="https://player.vimeo.com/video/203839498" width="1280" height="720" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



    </div> <!--End Container Marketing-->


@endsection





















