@extends('layouts.master')


@section('content')
    <style>

        #flash-message {
            position: absolute;
            right: 10px;
            top: 60px;
        }

    </style>

    @if($flash = session('message'))
        <div id="flash-message" class="alert alert-success" role="alert">
            {{ $flash }}
        </div>
    @endif

    <div class="jumbotron mx-auto" style="background: url('/img/veil/casks.jpeg'); font-family: 'Shadows Into Light', cursive; height: 50vh;">
        <h1 class="display-4 text-center mt-4 "><em>Special Events</em></h1>
        <p class="lead text-center"></p>
        <form method="POST" action="/eventsignup">

            {{csrf_field()}}

            <div class="container mx-2">
                <div class="row">
                    <div class="col-lg-4 mx-3">
                    </div>
                    <div class="col-lg-4 justfy-content-center">
                        <div class="input-group">
                            <input type="hidden" name="newsletter_id" value="2">
                            <input type="email" class="form-control text-center" name="email" placeholder="subscribe here!" required>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="input-group">
                            <input type="submit" placeholder="subscribe" class="btn btn-outline-primary">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @foreach ($events as $event)

    <div class="card text-center">
        <div class="card-block" style="color:white; background:#4c4c4c;" >
            {{$event->title}}
        </div>
    </div>
    <div class="card">
        <div class="card-block" style="color:black; ">
            {{$event->body}}
        </div>
    </div>

    @endforeach
@endsection
