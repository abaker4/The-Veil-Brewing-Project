
<div class="container marketing">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"></h2>
            <p class="lead"></p>
        </div>
    </div>
</div>
    <hr class="featurette-divider">
    <!-- FOOTER -->


    <footer>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-3">
                    <span class="text-muted">Admin</span>
                    @if (Route::has('login'))
                        @if (Auth::check())
                            <a class="nav-link" href="{{ url('/admin/home') }}">Home</a>
                        @else
                            <a class="nav-link" href="{{ url('/login') }}">Login</a>
                            <a class="nav-link" href="{{ url('/register') }}">Register</a>
                        @endif
                    @endif
                </div>
                <div class="col-12 col-lg-3 mx-auto">
                    <a href="https://www.instagram.com/theveilbrewing"><i class="fa fa-instagram fa-2x" aria-hidden="true" target="_blank"></i></a>
                    <a href="https://twitter.com/theveilbrewing"><i class="fa fa-twitter-square fa-2x" aria-hidden="true" target="_blank"   ></i></a>
                    <a href="https://www.facebook.com/theveilbrewing"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>

                </div>
                <div class="col col-lg-3">
                    <em class="text-muted">Resources</em>

                  <div><a href="/jobs">Jobs</a></div>
                    <div><a href="https://www.beeradvocate.com/search/?q=the+veil&qt=beer" target="_blank">Beer Advocate</a></div>
                    <div><a href="https://www.ratebeer.com/brewers/the-veil-brewing-company/26864/" target="_blank">Rate Beer</a></div>
                    <div><a href="http://goodbeerhunting.com/blog/2016/8/13/a-return-to-the-old-dominion-the-veil-brewing-in-richmond-virginia?rq=the%20veil%20brewing%20co." target="_blank">Good Beer Hunting</a></div>
                </div>


                <div class="col col-lg-3">
                    <em class="text-muted">Info</em>
                    <br/>
                    <a href="mailto:info@theveilbrewing.com">info@theveilbrewing.com</a>
                    <br/>
                    <em class="text-muted">Events</em>
                    <br/>
                    <a href="mailto:events@theveilbrewing.com">events@theveilbrewing.com</a>
                    <br/>
                    <div class="pt-2">
                        <em class="text-muted">Contact</em>
                        <br/>
                        <p> 1301 Roseneath Rd. Richmond, VA, 23230 </p>
                    </div>
                </div>
             </div>
        </div>
      </footer>


    <!-- Bootstrap core JavaScript
       ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script
            src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->

    {{--<script src="/js/app.js"></script>--}}
    <script src="/js/parallax.js"></script>
    <script src="/js/main.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->

    <script>
        $(function(){
            $('.parallax-taproom').parallax({imageSrc: '/img/veil/taproom.jpeg'});
        });


        $(function(){
            $('.parallax-fermenter').parallax({imageSrc: '/img/veil/fermenters1.jpeg'});
        });

        $(function(){
            $('.parallax-interior').parallax({imageSrc: '/img/veil/interior.jpeg'});
        });

        $(function(){
            $('.parallax-sign').parallax({imageSrc: '/img/veil/sign.jpeg'});
        });


        $(function(){
            $('.parallax-video').parallax({imageSrc: "https://player.vimeo.com/video/203839498"});
        });
        $(function(){
            $('.parallax-logo').parallax({imageSrc: '/img/veil/logo.png'});
        });
        $(function(){
            $('.parallax-pour').parallax({imageSrc: '/img/veil/pour.jpeg'});
        });
        $(function(){
            $('.parallax-comarea').parallax({imageSrc: '/img/veil/comarea.jpeg'});
        });
        $(function(){
            $('.parallax-exterior').parallax({imageSrc: '/img/veil/exterior1.jpeg'});
        });
        $(function(){
            $('.parallax-extsign').parallax({imageSrc: '/img/veil/extsign.jpeg'});
        });

        $(function(){
            $('.parallax-cans').parallax({imageSrc: '/img/veil/cans.jpeg'});
        });

        $('#flash-message').fadeOut(10000);


</script>

    </body>
    </html>









