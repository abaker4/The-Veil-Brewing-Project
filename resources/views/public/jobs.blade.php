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


    <div class="jumbotron mx-auto" style="background: url('/img/veil/cans.jpg'); font-family: 'Shadows Into Light', cursive; height: 50vh;">
        <h1 class="display-4 text-center mt-4 "><em>Job Postings</em></h1>
        <p class="lead text-center"></p>
    </div>

    @foreach ($jobs as $job)

        <div class="card text-center">
            <div class="card-block" style="color:white; background:#4c4c4c;" >
                {{$job->title}}
            </div>
        </div>
        <div class="card">
            <div class="card-block" style="color:black; ">
                <p>Summary:</p>
                {{$job->summary}}
            </div>
            <div class="card-block" style="color:black; ">
                <p>Description:</p>
                {{$job->q_description}}
            </div>
            <div class="card-block" style="color:black; ">
                <p>Responsibilities:</p>
                {{$job->responsibilities}}
            </div>
        </div>
        <hr>
    @endforeach



















    @endsection