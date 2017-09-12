<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div id="wrapper">
    <header></header>
    <!-- Start Hero Section-->
    <div id="fullscreen-hero" class="home-hero" style="background-image: url('img/example.jpeg');">
        <div class="hero-container">
            <div class="hero-content"><a href="#" class="home-logo"></a>
                <h1 class="cd-headline letters type"><span>Hi, I'm Austin. I design & build</span><br><span class="cd-words-wrapper"><b class="is-visible">Landing Pages.</b><b>Corporate Websites.</b><b>Web Apps.</b></span></h1>
                <div><a onclick="$('#sub-footer').animatescroll({scrollSpeed:2000,easing:'easeInQuad'});" class="button button-ghost">Yes, I'm Available For Hire</a></div>
                <div class="learn-more"><a onclick="$('#me').animatescroll({scrollSpeed:1000,easing:'easeInQuint'});" >Learn more about what I do<br><i class="fa fa-chevron-down"></i></a></div>
            </div>
        </div>
    </div>

    <!-- Start Experience Section-->
    <section id="me">
        <div class="container">
            <div class="row">
                <div class="eight columns offset-by-two columns">
                    <p class="intro slate">My Interests</p>
                    <p class="statement gunmetal">Design to Implementation to Deployment</p>
                </div>
            </div>
            <div class="row">
                <div class="one-third column">
                    <div class="expertise-block"><i class="fa fa-lightbulb-o yellow"></i>
                        <h4 class="title slate">Ideas</h4>
                        <p class="summary">My goal is to create and transform ideas into well thought out products. Creating amazing user experiences in tandem with a robust backend starts with great ideas.</p>
                    </div>
                </div>
                <div class="one-third column">
                    <div class="expertise-block"><i class="fa fa-code yellow"></i>
                        <h4 class="title slate">Front-End</h4>
                        <p class="summary">I design in the browser with HTML(5), CSS(3), JavaScript, JQuery and frameworks such as Bootstrap.</p>
                    </div>
                </div>
                <div class="one-third column">
                    <div class="expertise-block"><i class="fa fa-server yellow"></i>
                        <h4 class="title slate">Back-End</h4>
                        <p class="summary">Experience primarily with PHP, Laravel and MySQL.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Work Section-->
    <div id="work">
        <div class="container">
            <div class="row">
                <div class="twleve columns">
                    <p class="intro slate">My Work</p>
                    <p class="statement gunmetal">Want to see more examples? <a href="mailto:baker.austin.c@gmail.com">Email me</a>.</p>
                </div>
            </div>
            <section class="project-showcase">
                <div class="row">
                    <div class="six columns u-pull-right"><img src="img/logo.png" class="project-image"></div>
                    <div class="six columns u-pull-left">
                        <div class="project-content text-left">
                            <h3 class="project-title">The Veil Brewing Co.</h3>
                            <ul class="project-tags">
                                <li>Company Website Remastered</li>
                                <li>Laravel, HTML(5), CSS(3), JQuery, MySQL</li>
                            </ul>
                            <p class="project-description">The Veil Brewing Co. is a brewery located in the Scotts Addition neighborhood in Richmond, Va. They specialize in high gravity beers, spontaneous fermentation, wild ales, and lagers.</p><a href="www.theveilbrewing.com" target="_blank" class="button button-primary">Visit Website</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="project-testimonial">
                <blockquote class="slate">“Austin helped refresh our brand with a unique, modern responsive website. He does great work.”</blockquote>
                <div class="project-testimonial-avatar"><img src="img/veil_quote.png"></div>
                <div class="project-testimonial-name">Matt Tarpey, Co-Owner, Head Brewer The Veil Brewing Co.</div>
            </section>
            <section class="project-showcase">
                <div class="row">
                    <div class="six columns u-pull-left"><img src="img/iam247.png" class="project-image"></div>
                    <div class="six columns u-pull-right">
                        <div class="project-content text-right">
                            <h3 class="project-title">IAM247</h3>
                            <ul class="project-tags">
                                <li>UI/UX</li>
                                <li>Wordpress Theme Customization</li>
                            </ul>
                            <p class="project-description">IAM247 is a non-profit organization based in Charlotte, NC. Their mission is to meet the needs of at-risk youth through physical, mental and spiritual development.  </p><a href="http://iam247.com" target="_blank" class="button button-primary">Visit Website</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="project-testimonial">
                <blockquote class="slate">“Quality work from a quality designer. We couldn't have asked for a better experience.”</blockquote>
                <div class="project-testimonial-avatar"><img src="img/ben_page.jpg"></div>
                <div class="project-testimonial-name">Ben Page, Founder, iam247</div>
            </section>
            <section class="project-showcase">
                <div class="row">
                    <div class="six columns u-pull-right"><img src="img/budget.png" class="project-image"></div>
                    <div class="six columns u-pull-left">
                        <div class="project-content text-left">
                            <h3 class="project-title">Cashout</h3>
                            <ul class="project-tags">
                                <li>Full Development Lifecycle</li>
                                <li>Laravel, HTML(5), CSS(3), JQuery, MySQL</li>
                            </ul>
                            <p class="project-description"> A Web Application that rewards people for good ideas.</p><a href="" target="_blank" class="button button-primary">Visit Website</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    {{--<!-- Start WIP Section-->--}}
    {{--<section id="wip">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="eight columns offset-by-two columns">--}}
                    {{--<p class="intro slate">Personal Projects</p>--}}
                    {{--<p class="statement gunmetal">When I'm not freelancing, I'm working on digital products.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="one-third column">--}}
                    {{--<div class="expertise-block wow"><img src="images/dovetail.jpg">--}}
                        {{--<p class="description">Dovetail is a free, open source member management app for coworking spaces I built with <a href="http://sourdoughlabs.com" target="_blank">Vince Hodges</a>. Over 1,070 coworking spaces worldwide have created accounts.</p><a href="http://dovetail.io" target="_blank" class="button button-primary">Check it out</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="one-third column">--}}
                    {{--<div class="expertise-block"><img src="img/budget.png">--}}
                        {{--<p class="description">Cashout is a A Web Application that rewards people for good ideas. It helps you to effortlessly manage your money in one place. <a href="" target="_blank">Tim Layer</a> and I are currently working on a beta release.</p><a href="" target="_blank" class="button button-primary">Check it out</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="one-third column">--}}
                    {{--<div class="expertise-block"><img src="images/designlab.jpg">--}}
                        {{--<p class="description"><a href="http://trydesignlab.com/" target="_blank">Designlab </a>is an online education platform that features project-based learning and 1-on-1 mentorship from industry experts. I mentor students in their UX Academy program.</p><a href="http://trydesignlab.com/mattfarley/" target="_blank" class="button button-primary">Check it out</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- Start Action Section-->
    <section id="sub-footer" class="cd-section">
        <div class="container">
            <div class="row">
                <div class="eight columns offset-by-two columns">
                    <p class="intro slate">Want to work together?</p>
                    <p class="statement slate">I'm currently accepting new projects and would love to hear about yours. Please take a few minutes to tell me about it.</p>
                    <div class="cd-modal-action"><a href="#modal" data-type="modal-trigger" class="btn">Get Started</a><span style="" class="cd-modal-bg"></span>
                        <div class="cd-modal">
                            <div class="cd-modal-content">
                                {{--<!-- modal content here-->--}}
                                <div class="container">
                                    <div class="row">
                                        <div class="twelve columns">
                                            <div class="contact-header"><a href="" class="logo"></a></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="eight columns offset-by-two columns">
                                            <p class="intro white">Ok, just a few quick questions.</p>
                                            <p class="statement white">After you introduce yourself and your project, I'll get it touch with you to schedule a time to chat. You should expect to hear from me in a day or so.</p>
                                        </div>
                                    </div>
                                    <div class="form-container">

                                        <form method="POST" role="form" action="/storebusiness">

                                            {{csrf_field()}}


                                            <div class="row">
                                                <div class="six columns">
                                                    <input id="first" type="text" name="first" placeholder="First *"  class="u-full-width" required>
                                                </div>
                                                <div class="six columns">
                                                    <input id="last" type="text" name="last" placeholder="Last *" class="u-full-width" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="twelve columns">
                                                    <input id="email" type="email" name="email" placeholder="Email address *" class="u-full-width" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="twelve columns">
                                                    <textarea id="message" name="message" placeholder="Tell me about your project... what is it? Why are you doing it? What do you hope to accomplish? How can I help? Timeline and budget details are also appreciated. *" height="50em"  class="u-full-width" required></textarea>
                                                    <input type="submit" value="Submit Your Project" id="submitForm"  class="button button-ghost-white">
                                                    <p class="required">* Required</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><a href="#modal" class="cd-modal-close">Close</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="twelve columns"><a href="" class="logo" style="background-image: url('');">Austin Baker| Web Developer</a>
                        <p class="made-by-me">Austin Baker &copy; est. 2017.</p>
                        <div class="social-links"><a href="" target="_blank"><i class="fa fa-linkedin" style="margin-top: 7px;"></i></a><a href="https://github.com/abaker4" target="_blank"><i class="fa fa-github" style="margin-top: 7px;"></i></a><a href="https://facebook.com/austin.baker.79462" target="_blank"><i class="fa fa-facebook" style="margin-top: 7px;"></i></a><a href="https://www.instagram.com/acbake_21/" target="_blank"><i class="fa fa-instagram" style="margin-top: 7px;"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

{{--<script src="js/modernizr.min.js"></script>--}}
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/jquery.scrollto.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/velocity.min.js"></script>

<script>
    new WOW().init();

</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-45735732-1', 'auto');
    ga('send', 'pageview');

</script>
<script>
    (function(f,b,g){
        var xo=g.prototype.open,xs=g.prototype.send,c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:1778, hjsv:1};
        if(b.addEventListener){b.addEventListener("DOMContentLoaded",function(){f.hj.documentHtml=b.documentElement.outerHTML;c=b.createElement("script");c.async=1;c.src="//static.hotjar.com/c/hotjar-1778.js?sv=1";b.getElementsByTagName("head")[0].appendChild(c);})}
        if(!f._hjPlayback && b.addEventListener){
            g.prototype.open=function(l,j,m,h,k){this._u=j;xo.call(this,l,j,m,h,k)};
            g.prototype.send=function(e){var j=this;function h(){if(j.readyState===4){f.hj("_xhr",j._u,j.status,j.response)}}this.addEventListener("readystatechange",h,false);xs.call(this,e)};
        }
    })(window,document,window.XMLHttpRequest);
</script>
<script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>


<script>
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