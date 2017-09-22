<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>The Veil Brewing</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link href="css/stylish-portfolio.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    </head>
    <style>
        .header {
            display: table;
            position: relative;
            width: 50%;
            height:50%;
            left: 300px;
            top: 100px;
            background: url('/img/veil/veil_logo.jpg')
            no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
    <body>
        <!-- Header -->
        <header id="top" class="header">
            <div class="text-vertical-center">
            </div>
        </header>
        {{--Age Filter--}}
        <div class="filter">
        <h2>Are You At Least 21 Years Of Age?</h2>
        </div>
        <div id="age-buttons">
        <a href="/home" class="btn btn-lg btn-dark mx-3">Yes</a>
        <a href="https://www.google.com" class="btn btn-lg btn-dark mx-3">No</a>
        </div>
    </body>

</html>