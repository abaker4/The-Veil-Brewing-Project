@extends('layouts.master')

@section('content')

    <div class="jumbotron mx-auto" style="background:#4c4c4c; font-family: 'Shadows Into Light', cursive;">
        <h1 class="display-4 text-center mt-4 "><em>Job Openings</em></h1>
        <p class="lead text-center">For Job Posting Inquiries, Please Email Your Resume to <u>info@theveilbrewing.com</u></p>
    </div>

    @foreach ($jobs as $job)

        <div class="card text-center">
            <div class="card-block" style="color:white; background:#4c4c4c;" >
                {{$job->title}}
                <br>
                <hr>
             <em style="color:#f67b5e">Job Summary:</em> {{$job->summary}}
                <br/>
                <hr>
                <em style="color:#f67b5e" >Job Description:</em> {{$job->q_description}}
                <br/>
                <hr>
                <em style="color:#f67b5e" >Job Responsibilities:</em> {{$job->responsibilities}}

            </div>
        </div>
        <hr>
    @endforeach




    @endsection