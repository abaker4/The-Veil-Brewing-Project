
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
                <div class="col col-lg-4">
                    {{--@if (Route::has('login'))--}}
                        {{--@if (Auth::check())--}}
                            {{--<a class="nav-link" href="{{ url('/admin/home') }}">Home</a>--}}
                        {{--@else--}}
                            {{--<a class="nav-link" href="{{ url('/login') }}">Login</a>--}}
                            {{--<a class="nav-link" href="{{ url('/register') }}"></a>--}}
                        {{--@endif--}}
                    {{--@endif--}}
                    <iframe
                            width="300"
                            height="300"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDzlXeowy8404CGHOqjANkjU5TELKQzMKc&q=The+Veil+Brewing&zoom=15">
                    </iframe>
                </div>

                <div class="col col-lg-4">
                    <em class="text-muted">Resources</em>

                  <div><a href="/jobs">Jobs</a></div>
                    <div><a href="https://www.beeradvocate.com/search/?q=the+veil&qt=beer" target="_blank">Beer Advocate</a></div>
                    <div><a href="https://www.ratebeer.com/brewers/the-veil-brewing-company/26864/" target="_blank">Rate Beer</a></div>
                    <div><a href="http://goodbeerhunting.com/blog/2016/8/13/a-return-to-the-old-dominion-the-veil-brewing-in-richmond-virginia?rq=the%20veil%20brewing%20co." target="_blank">Good Beer Hunting</a></div>
                </div>


                <div class="col col-lg-4">
                    <em class="text-muted">Info</em>
                    <br/>
                    <a href="mailto:info@theveilbrewing.com">info@theveilbrewing.com</a>
                    <br/>
                    <em class="text-muted">Special Events</em>
                    <br/>
                    <a href="mailto:events@theveilbrewing.com">events@theveilbrewing.com</a>
                    <br/>
                    <div class="pt-2">
                        <em class="text-muted">Contact</em>
                        <br/>
                        <p> 1301 Roseneath Rd. Richmond, VA, 23230 </p>
                    </div>
                    <a href="https://www.instagram.com/theveilbrewing"><i class="fa fa-instagram fa-2x" aria-hidden="true" target="_blank"></i></a>
                    <a href="https://twitter.com/theveilbrewing"><i class="fa fa-twitter-square fa-2x" aria-hidden="true" target="_blank"   ></i></a>
                    <a href="https://www.facebook.com/theveilbrewing"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>

                </div>
             </div>
        </div>
      </footer>


    <!-- Bootstrap core JavaScript
       ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->

    {{--<script src="/js/app.js"></script>--}}
    <script src="/js/app.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/parallax.js"></script>
    <script src="/js/main.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->

    <script>
            $(function(){
            $('.parallax-taproom').parallax({imageSrc: '/img/veil/taproom.jpeg'});




            $('.parallax-fermenter').parallax({imageSrc: '/img/veil/fermenters1.jpeg'});



            $('.parallax-interior').parallax({imageSrc: '/img/veil/interior.jpeg'});



            $('.parallax-sign').parallax({imageSrc: '/img/veil/sign.jpeg'});


            $('.parallax-video').parallax({imageSrc: "https://player.vimeo.com/video/203839498"});


            $('.parallax-logo').parallax({imageSrc: '/img/veil/logo.png'});


            $('.parallax-pour').parallax({imageSrc: '/img/veil/pour.jpeg'});

            $('.parallax-comarea').parallax({imageSrc: '/img/veil/comarea.jpeg'});


            $('.parallax-exterior').parallax({imageSrc: '/img/veil/exterior.jpeg'});


            $('.parallax-extsign').parallax({imageSrc: '/img/veil/extsign.jpeg'});



            $('.parallax-contact').parallax({imageSrc: '/img/veil/contact_logo.jpg'});


        $('#flash-message').fadeOut(10000);

            });


        /*
         * @build  : 20-07-2013
         * @author : Ram swaroop
         * @site   : Compzets.com
         */

        /*
         * @build  : 20-07-2013
         * @author : Ram swaroop
         * @site   : Compzets.com
         */
        (function($){

            // defines various easing effects
            $.easing['jswing'] = $.easing['swing'];
            $.extend( $.easing,
                {
                    def: 'easeOutQuad',
                    swing: function (x, t, b, c, d) {
                        return $.easing[$.easing.def](x, t, b, c, d);
                    },
                    easeInQuad: function (x, t, b, c, d) {
                        return c*(t/=d)*t + b;
                    },
                    easeOutQuad: function (x, t, b, c, d) {
                        return -c *(t/=d)*(t-2) + b;
                    },
                    easeInOutQuad: function (x, t, b, c, d) {
                        if ((t/=d/2) < 1) return c/2*t*t + b;
                        return -c/2 * ((--t)*(t-2) - 1) + b;
                    },
                    easeInCubic: function (x, t, b, c, d) {
                        return c*(t/=d)*t*t + b;
                    },
                    easeOutCubic: function (x, t, b, c, d) {
                        return c*((t=t/d-1)*t*t + 1) + b;
                    },
                    easeInOutCubic: function (x, t, b, c, d) {
                        if ((t/=d/2) < 1) return c/2*t*t*t + b;
                        return c/2*((t-=2)*t*t + 2) + b;
                    },
                    easeInQuart: function (x, t, b, c, d) {
                        return c*(t/=d)*t*t*t + b;
                    },
                    easeOutQuart: function (x, t, b, c, d) {
                        return -c * ((t=t/d-1)*t*t*t - 1) + b;
                    },
                    easeInOutQuart: function (x, t, b, c, d) {
                        if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
                        return -c/2 * ((t-=2)*t*t*t - 2) + b;
                    },
                    easeInQuint: function (x, t, b, c, d) {
                        return c*(t/=d)*t*t*t*t + b;
                    },
                    easeOutQuint: function (x, t, b, c, d) {
                        return c*((t=t/d-1)*t*t*t*t + 1) + b;
                    },
                    easeInOutQuint: function (x, t, b, c, d) {
                        if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
                        return c/2*((t-=2)*t*t*t*t + 2) + b;
                    },
                    easeInSine: function (x, t, b, c, d) {
                        return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
                    },
                    easeOutSine: function (x, t, b, c, d) {
                        return c * Math.sin(t/d * (Math.PI/2)) + b;
                    },
                    easeInOutSine: function (x, t, b, c, d) {
                        return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
                    },
                    easeInExpo: function (x, t, b, c, d) {
                        return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
                    },
                    easeOutExpo: function (x, t, b, c, d) {
                        return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
                    },
                    easeInOutExpo: function (x, t, b, c, d) {
                        if (t==0) return b;
                        if (t==d) return b+c;
                        if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
                        return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
                    },
                    easeInCirc: function (x, t, b, c, d) {
                        return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
                    },
                    easeOutCirc: function (x, t, b, c, d) {
                        return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
                    },
                    easeInOutCirc: function (x, t, b, c, d) {
                        if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
                        return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
                    },
                    easeInElastic: function (x, t, b, c, d) {
                        var s=1.70158;var p=0;var a=c;
                        if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
                        if (a < Math.abs(c)) { a=c; var s=p/4; }
                        else var s = p/(2*Math.PI) * Math.asin (c/a);
                        return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
                    },
                    easeOutElastic: function (x, t, b, c, d) {
                        var s=1.70158;var p=0;var a=c;
                        if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
                        if (a < Math.abs(c)) { a=c; var s=p/4; }
                        else var s = p/(2*Math.PI) * Math.asin (c/a);
                        return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
                    },
                    easeInOutElastic: function (x, t, b, c, d) {
                        var s=1.70158;var p=0;var a=c;
                        if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
                        if (a < Math.abs(c)) { a=c; var s=p/4; }
                        else var s = p/(2*Math.PI) * Math.asin (c/a);
                        if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
                        return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
                    },
                    easeInBack: function (x, t, b, c, d, s) {
                        if (s == undefined) s = 1.70158;
                        return c*(t/=d)*t*((s+1)*t - s) + b;
                    },
                    easeOutBack: function (x, t, b, c, d, s) {
                        if (s == undefined) s = 1.70158;
                        return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
                    },
                    easeInOutBack: function (x, t, b, c, d, s) {
                        if (s == undefined) s = 1.70158;
                        if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
                        return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
                    },
                    easeInBounce: function (x, t, b, c, d) {
                        return c - $.easing.easeOutBounce (x, d-t, 0, c, d) + b;
                    },
                    easeOutBounce: function (x, t, b, c, d) {
                        if ((t/=d) < (1/2.75)) {
                            return c*(7.5625*t*t) + b;
                        } else if (t < (2/2.75)) {
                            return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
                        } else if (t < (2.5/2.75)) {
                            return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
                        } else {
                            return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
                        }
                    },
                    easeInOutBounce: function (x, t, b, c, d) {
                        if (t < d/2) return $.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
                        return $.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
                    }
                });

            $.fn.animatescroll = function(options) {

                // fetches options
                var opts = $.extend({},$.fn.animatescroll.defaults,options);

                // make sure the callback is a function
                if (typeof opts.onScrollStart == 'function') {
                    // brings the scope to the callback
                    opts.onScrollStart.call(this);
                }

                if(opts.element == "html,body") {
                    // Get the distance of particular id or class from top
                    var offset = this.offset().top;

                    // Scroll the page to the desired position
                    $(opts.element).stop().animate({ scrollTop: offset - opts.padding}, opts.scrollSpeed, opts.easing);
                }
                else {
                    // Scroll the element to the desired position
                    $(opts.element).stop().animate({ scrollTop: this.offset().top - this.parent().offset().top + this.parent().scrollTop() - opts.padding}, opts.scrollSpeed, opts.easing);
                }

                setTimeout(function() {

                    // make sure the callback is a function
                    if (typeof opts.onScrollEnd == 'function') {
                        // brings the scope to the callback
                        opts.onScrollEnd.call(this);
                    }
                }, opts.scrollSpeed);
            };

            // default options
            $.fn.animatescroll.defaults = {
                easing:"swing",
                scrollSpeed:800,
                padding:0,
                element:"html,body"
            };

        }(jQuery));

</script>

    </body>
    </html>









