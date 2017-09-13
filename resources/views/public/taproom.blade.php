@extends('layouts.master')

@section('content')
    <style>

        div#line1 button#tap1 {
            display: inline;
        }

        div#line1:hover button#tap1 {
            display: none;
        }

        div#line1 button#hour1 {
            display: none;
        }

        div#line1:hover button#hour1 {
            display: inline;
        }

    </style>


    <div class="row featurette">
        <div class="container">
            <div id="line1" class="col-lg-12">
                <h1 class="featurette-heading text-center">Here's What's Pouring</h1><br/>

                <h4 class="text-center">
                    <span class="text-muted">
                        <a  onclick="$('#tap').animatescroll({scrollSpeed:2000,easing:'easeInQuad'});">
                            <button class="btn btn-inverse-secondary" id="tap1">Taproom Hours</button>
                            <button class="btn btn-outline-secondary" id="hour1">Click to find out!</button>
                        </a>
                    </span>
                </h4>
                <br/>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-lg table-inverse">
            <thead>
            <tr>

                <th>Title</th>
                <th>Type</th>
                <th>ABV%</th>
                <th>$6oz</th>
                <th>$12oz</th>
            </tr>
            </thead>
            <tbody>
            @foreach($taproom as $list)
                <tr>

                    <td>{{$list->title}}</td>
                    <td>{{$list->type}}</td>
                    <td>{{$list->ABV}}%</td>
                    <td>${{$list->small}}</td>
                    <td>${{$list->large}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @if($flash = session('message'))
            <div id="flash-message" class="alert alert-success" role="alert">
                {{ $flash }}
            </div>
        @endif

        <form class="my-2" method="POST" action="/tapsignup">

            {{csrf_field()}}

            <div class="container mx-2">
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="input-group">
                            <h5>Stay Up To Date With The Latest Brews On Tap!</h5>
                        </div>
                    </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="hidden" name="newsletter_id" value="1">
                                <input type="email" class="form-control" name="email" placeholder="EMAIL" required>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="input-group">
                                <input type="submit" placeholder="subscribe" class="btn btn-outline-secondary">
                            </div>
                        </div>
                </div>
            </div>
        </form>

        <hr class="featurette-divider">


        <div class="parallax-extsign" style="height: 100vh;background: transparent;">
        <div class="row featurette">
            <div class="container">
                <div id="line1" class="col-md-10" style="padding:10%;">
                </div>
            </div>
        </div>
    </div>

    </div>

    <hr id="tap" class="featurette-divider">

    <div  class="col-lg-12">
        <h1 class="featurette-heading text-center"><strong class="text-muted"> Open Hours:</strong></h1>
        <p class="lead text-center">
            Tuesday - Thursday 4PM-9PM <br/>
            Friday 4PM-10PM <br/>
            Saturday 12PM-10PM <br/>
            Sunday 12PM-6PM <br/>
        </p>
    </div>

<hr class="featurette-divider">

<div class="parallax-comarea" style="height: 100vh;background: transparent;">

    <div class="container">
    </div>
</div>


@endsection
