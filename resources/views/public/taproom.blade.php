@extends('layouts.master')

@section('content')

    <div class="row featurette">
        <div class="container">
            <div class="col-md-10">
                <h2 class="featurette-heading text-center">Here's What's Pouring</h2><br/>
                <h4><span class="text-muted"></span></h4><br/>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-sm table-inverse">
            <thead>
            <tr>

                <th>Title</th>
                <th>Type</th>
                <th>ABV</th>
                <th>$6oz</th>
                <th>$12oz</th>
            </tr>
            </thead>
            <tbody>
            @foreach($taproom as $list)
                <tr>

                    <td>{{$list->title}}</td>
                    <td>{{$list->type}}</td>
                    <td>{{$list->ABV}}</td>
                    <td>{{$list->small}}</td>
                    <td>{{$list->large}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>




        <div class="container mx-2">

            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <h5>Stay up to date with the latest Brews Events and Info</h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="EMAIL">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="input-group">
                        <button type="button" class="btn btn-outline-secondary">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>





                <div class="col-lg-10">
                    <h2 class="featurette-heading"><strong></strong><br/> <span class="text-muted"> Open Hours Are:</span></h2>
                         <p class="lead">
                        Tuesday - Thursday 4PM-9PM <br/>
                        Friday 4PM-10PM <br/>
                        Saturday 12PM-10PM <br/>
                        Sunday 12PM-6PM <br/>
                         </p>
                </div>



    <div class="parallax-extsign" style="height: 100vh;background: transparent;">
        <div class="row featurette">
            <div class="container">
                <div class="col-md-10" style="padding:10%;">
             </div>
            </div>
        </div>
    </div>

    </div>

    <hr class="featurette-divider">


<hr class="featurette-divider">

<div class="parallax-comarea" style="height: 100vh;background: transparent;">

    <div class="container">
    </div>
</div>


@endsection
