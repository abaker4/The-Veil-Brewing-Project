@extends('layouts.master')

@section('content')



    <div class="parallax-extsign" style="height: 100vh;background: transparent;">
        <div class="row featurette">
            <div class="container">
                <div class="col-md-10" style="padding:10%;">
                    <h2 class="display-4">Come Enjoy A Pour In Our Taproom</h2>
                        <p class="lead">Tuesday - Thursday 4PM-9PM <br/>
                        Friday 4PM-10PM <br/>
                        Saturday 12PM-10PM <br/>
                        Sunday 12PM-6PM <br/>
                        </p>
             </div>
            </div>
        </div>
    </div>


    <hr class="featurette-divider">

<div class="row featurette">
    <div class="container">
        <div class="col-md-10">
            {{--<h2 class="featurette-heading"><strong>Come Enjoy A Pour In Our Taproom</strong><br/> <span class="text-muted"> Open Hours Are:</span></h2>--}}
            {{--<p class="lead">--}}
                {{--Tuesday - Thursday 4PM-9PM <br/>--}}
                {{--Friday 4PM-10PM <br/>--}}
                {{--Saturday 12PM-10PM <br/>--}}
                {{--Sunday 12PM-6PM <br/>--}}
                {{--</p>--}}
        </div>
    </div>
</div>


<hr class="featurette-divider">

<div class="parallax-comarea" style="height: 100vh;background: transparent;">

    <div class="container">
    </div>
</div>


<div class="row featurette">
    <div class="container">
        <div class="col-md-10">
            <h2 class="featurette-heading "><strong> Here's What We're Currently Pouring </strong></h2><br/>
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
        <th>6oz</th>
        <th>12oz</th>
    </tr>
    </thead>
    <tbody>
    @foreach($taproom as $list)
    <tr>
        {{--<th scope="row">{{$list->id}}</th>--}}
        <td>{{$list->title}}</td>
        <td>{{$list->type}}</td>
        <td>{{$list->ABV}}</td>
        <td>{{$list->small}}</td>
        <td>{{$list->large}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

    <p class="lead">
       We have a rotating tap list and it changes often. Stop by and find out what's currently pouring.<br/>
        Also, follow us on <a href="https://twitter.com/theveilbrewing">Twitter</a> , <a href="https://www.instagram.com/theveilbrewing">Instagram</a> and <a href="https://www.facebook.com/theveilbrewing/">Facebook</a> for updates regarding bottle and can releases.<br/>
    </p>
</div>

<script>
    $(function () {
        $(".nav li").removeClass("active");//this will remove the active class from
                                           //previously active menu item
        $('#taproom').addClass('active');
    });
</script>
@endsection
