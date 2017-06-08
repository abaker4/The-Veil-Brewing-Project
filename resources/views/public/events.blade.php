@extends('layouts.master')


@section('content')



    <div class="jumbotron mx-auto" style="background:#4c4c4c; font-family: 'Shadows Into Light', cursive;">
        <h1 class="display-4 text-center mt-4 "><em>Special Events</em></h1>
        <p class="lead text-center"><small>For Special Events, Please Email <u>events@theveilbrewing.com</u></small></p>
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
<hr>
    @endforeach


    @endsection
