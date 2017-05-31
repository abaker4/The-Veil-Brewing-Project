
<div class="container marketing">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"></h2>
            <p class="lead"></p>
        </div>
    </div>

    <hr class="featurette-divider">
    <!-- FOOTER -->


    <footer>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2">
                    @if (Route::has('login'))
                        @if (Auth::check())
                            <a class="nav-link" href="{{ url('/admin/home') }}">Home</a>
                        @else
                            <a class="nav-link" href="{{ url('/login') }}">Login</a>
                            <a class="nav-link" href="{{ url('/register') }}">Register</a>
                        @endif
                    @endif
                </div>
                <div class="col-12 col-md-auto">
                    <a href="https://www.instagram.com/theveilbrewing"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/theveilbrewing"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/theveilbrewing"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>

                </div>
                <div class="col col-lg-2">
                    <em>Find Us:</em>
                    <br/>
                    info@theveilbrewing.com
                </div>

            </div>
        {{--<div class="container">--}}
            {{--<div class="col-lg-4">--}}
        {{--<p class="float-right"><a href="#">Back to top</a></p>--}}
        {{--<p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>--}}
        {{----}}
            {{--</div>--}}
        {{--<div class="col-lg-4">--}}
            {{--<div--}}
            {{--</div>--}}
        {{--</div>--}}
           {{--<div class="col-lg-4">--}}
               {{--<div class="row">--}}
                    {{----}}
               {{--</div>--}}
           {{--</div>--}}
        {{--<div class="col-lg-4">--}}
            {{--<div class="row">--}}
                {{--<em>For More Information:</em>--}}
                {{--<br/>--}}
                {{--<a href="mailto:info@theveilbrewing.com">info@theveilbrewing.com</a>--}}
            {{--</div>--}}
        {{--</div>--}}
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

    <script src="/js/app.js"></script>
    <script src="/js/parallax.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->

    <script>
        $(function(){
            $('.parallax-window').parallax({imageSrc: '/img/veil/taproom.jpeg'});
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

    </script>

    </body>
    </html>









