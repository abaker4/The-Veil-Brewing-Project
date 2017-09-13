

@extends('layouts.master')


@section('content')
<style>

    .arrow-wrap{
        margin:50%;
        position: relative;
        right: 60px;
        top: 50px;"
        z-index:1;
        background:transparent;
        width:10em;
        height:10em;
        padding:4em 2em;
        color: #ccc;
        text-decoration: none;
        font-size:0.5em;
        display:block;

    }

    #arrow {
        float:left;
        position:relative;
        width: 0px;
        height: 0px;
        border-style: solid;
        border-width: 3em 3em 0 3em;
        border-color: #ffffff transparent transparent transparent;
        -webkit-transform:rotate(360deg)
    }

    #arrow:after {
        content:'';
        position:absolute;
        top:-3.2em;
        left:-3em;
        width: 0px;
        height: 0px;
        border-style: solid;
        border-width: 3em 3em 0 3em;
        border-color: #333 transparent transparent transparent;
        -webkit-transform:rotate(360deg)
    }


    .hint {
        position:absolute;
        top:0.6em;
        width:100%;
        left:0;
        font-size:2em;
        font-style:italic;
        text-align:center;
        color:#fff;
        opacity:0;
    }


    .arrow-wrap:hover .hint {
        opacity:1;
    }


    @-webkit-keyframes arrows {
        0% { top:0; }
        10% { top:12%; }
        20% { top:0; }
        30% { top:12%; }
        40% { top:-12%; }
        50% { top:12%; }
        60% { top:0; }
        70% { top:12%; }
        80% { top:-12%; }
        90% { top:12%; }
        100% { top:0; }
    }

    .arrow-wrap .arrow {
        -webkit-animation: arrows 2.8s 0.4s;
        -webkit-animation-delay: 3s;
    }


    div#line1 span#arrow {
        display: inline;
    }

    div#line1:hover span#arrow {
        display: none;
    }

    div#line1 span#scroll {
        display: none;
    }

    div#line1:hover span#scroll {
        display: inline;
    }
</style>

    <div class="parallax-logo pt-2" style="height: 100vh; background: transparent;">

        <div id="line1" class="container">
            <h1 class="display-1"></h1>
            <p class="lead"></p>
            <a  onclick="$('#submit').animatescroll({scrollSpeed:2000,easing:'easeInQuad'});" class="arrow-wrap"><span id="arrow"></span><span id="scroll">Scroll Down</span></a>
        </div>
    </div>

<!-- START THE FEATURETTES -->
<div id="submit"></div>
<hr class="featurette-divider">
<div  class="row featurette">
    <div class="container">
        <div class="col-md-10" style="height: 50vh;">
            <h2 class="featurette-heading">Welcome to <span class="text-muted">The Veil Brewing Co.</span></h2>
            <p class="lead"> We are a craft brewery located in the Scott's Addition neighborhood of Richmond, Virginia. We focus on hop forward beers, high gravity and barrel aging, lagers, wild ales, and spontaneous fermentation. We are dedicated to quality and strive to provide a unique experience through our beers and our tasting room.

                We look forward to seeing you soon. Cheers!</p>
        </div>
    </div>
</div>


<hr class="featurette-divider">


<div  class="parallax-pour pt-2" style="height: 100vh;background: transparent;">
    <div  class="container">
        <h1 class="display-1"></h1>
        <p class="lead"></p>
    </div>
</div>



<div class="parallax-taproom" style="height: 100vh;background: transparent;">

    <div class="container">

        <h1 class="display-1"></h1>
        <p class="lead"></p>
    </div>
</div>



<hr class="featurette-divider">
<div class="row featurette">
    <div class="col-md-12 justify-content-center" style="height: 60vh;">
        <div class="container">
            <h4 class="featurette-heading text-center"><span class="text-muted">ABOUT THE VEIL</span></h4>
            <p class="lead text-center"> The Veil Brewing Co. was founded by Dustin Durrance and Matt Tarpey in 2016. We brew craft beers for draft consumption and cans in limited release. We believe local breweries play  an important role in their communities which is why, the neighborhood of Scott's Addition was such a good fit for The Veil. Our tap room is open to the public and we also offer tours of our brewery (by appointment).</p>

            <p class="lead text-center">Find The Veil on <a href="https://www.beeradvocate.com/search/?q=the+veil&qt=beer" target="_blank"><u>Beer Advocate</u></a> and <a href="https://www.ratebeer.com/brewers/the-veil-brewing-company/26864/" target="_blank"><u>Rate Beer</u></a></p>
        </div>
    </div>
</div>
<hr class="featurette-divider">

        <div class="parallax-interior" style="height: 100vh;background: transparent;">

            <div class="container">

                <h1 class="display-1"></h1>
                <p class="lead"></p>
            </div>
        </div>




        <div class="parallax-fermenter" style="height: 100vh;background: transparent;">

            <div class="container">

                <h1 class="display-1"></h1>
                <p class="lead"></p>
            </div>
        </div>



        <div class="container marketing">
            <hr class="featurette-divider">


            <div class="container marketing pt-3">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading pb-3">We Push The Limits</h2>
                            <p class="lead pb-3" style="height: 25vh;">At The Veil no two beers are alike because we aim to re-invent with each and every brew. We constantly are innovating to keep your taste buds guessing, so the only the way to find out is to <a href="/taproom"><u>see whats on tap!</u></a></p>
                        </div>



                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" src="/img/veil/glass.jpeg" alt="Generic placeholder image">
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

        </div> <!--End Container Marketing-->



        <div class="parallax-sign" style="height: 100vh;background: transparent;">

            <div class="container">

                <h1 class="display-1"></h1>
                <p class="lead"></p>
            </div>
        </div>




        </div> <!--End Container Marketing-->


        {{--<hr class="featurette-divider">--}}


        <div class="parallax-exterior" style="height: 100vh;background: transparent;">

            <div class="container">

                <h1 class="display-1"></h1>
                <p class="lead"></p>
            </div>
        </div>






    <iframe data-parallax="scroll" src="https://player.vimeo.com/video/203839498" width="1280" height="720" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>







@endsection



















