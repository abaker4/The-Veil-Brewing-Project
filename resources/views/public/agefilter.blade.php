<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
    /*!
 * Start Bootstrap - Stylish Portfolio (http://startbootstrap.com/)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */

    /* Global Styles */

    html,
    body {
        width: 100%;
        height: 100%;
    }

    body {
        font-family: "Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;
    }

    .text-vertical-center {
        display: table-cell;
        text-align: center;
        vertical-align: middle;
    }

    .text-vertical-center h1 {
        margin: 0;
        padding: 0;
        font-size: 4.5em;
        font-weight: 700;
    }

    /* Custom Button Styles */

    .btn-dark {
        border-radius: 0;
        color: #fff;
        background-color: rgba(0,0,0,0.4);
        margin: 2rem;
    }

    .btn-dark:hover,
    .btn-dark:focus,
    .btn-dark:active {
        color: #fff;
        background-color: rgba(0,0,0,0.7);

    }


    /* Custom Horizontal Rule */

    hr.small {
        max-width: 100px;
    }

    /* Side Menu */



    }

    .sidebar-nav li {
        text-indent: 20px;
        line-height: 40px;
    }

    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #999;
    }

    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #fff;
        background: rgba(255,255,255,0.2);
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }

    .sidebar-nav > .sidebar-brand {
        height: 55px;
        font-size: 18px;
        line-height: 55px;
    }

    .sidebar-nav > .sidebar-brand a {
        color: #999;
    }

    .sidebar-nav > .sidebar-brand a:hover {
        color: #fff;
        background: none;
    }

    /* Header */

    .header {
        display: table;
        position: relative;
        width: 50%;
        height:50%;
        left: 300px;
        top: 100px;
        background: url('/img/veil/veil_logo.jpg') no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }

    .filter{

        display: table;
        position: relative;
        width: 50%;
        height:50%;
        left: 400px;
        top: 100px;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;


    }

    #age-buttons{
        position:absolute;
        left: 500px;
        top: 500px;
    }




    .call-to-action .btn {
        margin: 10px;
    }


    @media(max-width:768px) {
        .map {
            height: 75%;
        }
    }

    .map iframe {
        pointer-events: none;
    }

    /* Footer */

    footer {
        padding: 100px 0;
    }



</style>

</head>

<body>



<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
    </div>
</header>

<div class="filter">
<h2>Are You At Least 21 Years Of Age?</h2>
</div>
<div id="age-buttons">
<a href="/home" class="btn btn-lg btn-dark mx-3">Yes</a>
<a href="https://www.google.com" class="btn btn-lg btn-dark mx-3">No</a>
</div>




</body>

</html>