

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


    <title>The Veil Brewing</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <script src="https://use.fontawesome.com/a61a906ca3.js"></script>

    <!-- Custom styles for this template -->
    <link href="/css/main.css" rel="stylesheet">

    <style>


        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        #tshirt1{

            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            position: absolute;
        }

        #hoodie1 {

            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            position: absolute;
        }

        .footer{

            color: #fff;
            box-sizing: border-box;
            letter-spacing: 1em;
            line-height: 1.1em;
            text-align: center;
            font-size: .7em;
        }


        .footer-username-lg{

            width: 40%;
            border-bottom:none;
            display:table-cell;
            height: 100%;
            text-align:right;
            vertical-align:middle;

        }

        .footer-iconsocial-lg{
            display: table-cell;
            vertical-align: middle;
            height:100%;
            text-align: center;

        }

        .footer-emailaddress-lg{
            display: table-cell;
            width: 40%;
            border-top: none;
            text-align: left;

        }



        #flash-message{

            position:absolute;
            z-index: 10;
            top: 20px;
            right: 20px;
        }




        /* GLOBAL STYLES
        -------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
            background: black;
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #fff;
        }

        .inner {
            padding: 2rem;
        }


        .cover {
            padding: 0 1.5rem;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        #fonts{

            font-family: 'Shadows Into Light', cursive;
        }

        a {
            text-decoration: none;
            color: #ccc;
        }

        .contact{

            text-decoration:none;
            opacity: .8;


        }

        /*Parallax Scroll
        -------------------------------------------------- */
        .parallax-window {
            min-height: 400px;
            background: transparent;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            z-index: 10;
            bottom: 3rem;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
            background-color: #777;
        }
        .carousel-item > img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .marketing h2 {
            font-weight: normal;
        }
        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }



        /* Featurettes
        ------------------------- */

        .featurette-divider {
            margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -.05rem;
        }


        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }

        @media  (min-width: 750px) {
            .footer {

                height: 25px;
                width: 100%;
                display: table;
            }
        }
    </style>
</head>
<body>
@include('layouts.nav')

@yield('content')


@include('layouts.footer')


