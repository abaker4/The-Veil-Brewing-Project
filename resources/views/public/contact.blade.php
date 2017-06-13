@extends('layouts.master')

@section('content')

<style>
    #flash-message{

        position:absolute;
        z-index: 10;
        bottom: 20px;
        right: 20px;
    }
</style>

@if($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{ $flash }}
    </div>
    @endif

    <div class="parallax-cans" style="height: 50vh;background: transparent;">
        <div class="row featurette">
            <div class="container">
                <div class="col-md-12">
               </div>
            </div>
        </div>
    </div>

<div class="col text-center">
    <h2 class="featurette-heading" style="color: #f67b5e">We'd Love To Hear From You! <span class="text-success">Hit us up</span></h2>
</div>


<form method="POST" action="/contact">

    {{csrf_field()}}

    <div class="row justify-content-center ">

        <div class="col-4 pt-1">

            <label for="first"></label>

            <input type="text" class="form-control" id="first" name="first" placeholder="First*" required>

        </div>


        <div class="col-4 pt-1">

            <label for="last"></label>

            <input type="text" class="form-control" id="last" name="last" placeholder="Last*" required>

        </div>


        <div class="col-8 pt-1">

            <label for="email"></label>

            <input type="email" class="form-control" id="email" name="email" placeholder="Email*"required>
        </div>

        <div class="col-8 pt-1">

            <label for="subject"></label>

            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*" required>

        </div>

        <div class="col-8 pt-1">

            <label for="message"></label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message*" required></textarea>
        </div>
    </div>


    <div class="form-group pt-4 text-center">
        <button type="submit" class="btn btn-primary" >Submit</button>
    </div>
    @include('layouts.errors')

    </div>

</form>


    <hr>

    <hr>


@endsection

