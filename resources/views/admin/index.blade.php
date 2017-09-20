
@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid pt-5">
        <div class="container">
            <h1 class="display-1">Tap List</h1>
        </div>
    </div>

    @if($flash = session('message'))
        <div id="flash-message" class="alert alert-success" role="alert">
            {{ $flash }}
        </div>
    @endif
    {{--Add Taproom Section--}}
    <div class="container">
        <table id="fonts" class="table table-hover table-inverse">
            <thead>
                <tr>
                    <th></th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>ABV</th>
                    <th>6oz</th>
                    <th>12oz</th>
                </tr>
            </thead>
            @foreach($taps as $tap)
                <tbody>
                    <tr class="taps-{{$tap->id}}">
                        <th scope="row"></th>
                        <td>{{$tap->title}}</td>
                        <td>{{$tap->type}}</td>
                        <td>{{$tap->ABV}}</td>
                        <td>{{$tap->small}}</td>
                        <td>{{$tap->large}}</td>
                        <td><a class="btn btn-link" href="/admin/taproom/{{$tap->id}}/edit">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </a>
                                <button type="button" data-id="{{$tap->id}}" class="btn btn-danger deleteTap">X</button>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <a class="btn btn-link " href="/admin/taproom/create">
            <button type="button" class="btn btn-success">Add Tap</button>
        </a>
        <button class="btn btn-primary pull-right" id="sendTapNewsletter">
            Send Taproom Newsletter
        </button>
    </div>
    <hr>

{{--End Taproom Section--}}

    <div class="jumbotron jumbotron-fluid pt-5">
        <div class="container">
            <h1 class="display-1">Jobs Posting</h1>
        </div>
    </div>
{{--Job Posting Section--}}

    <div class="container">
        <table id="fonts" class="table table-hover table-inverse">
            <thead>
                <tr>
                    <th></th>
                    <th>Title</th>
                    <th>Summary</th>
                    <th>Qualifications</th>
                    <th>Responsibilities</th>
                </tr>
            </thead>
            @foreach($jobs as $job)
                <tbody>
                    <tr id="jobs-{{$job->id}}">
                    <th scope="row"></th>
                    <td>{{$job->title}}</td>
                    <td>{{$job->summary}}</td>
                    <td>{{$job->q_description}}</td>
                    <td>{{$job->responsibilities}}</td>
                    <td><a class="btn btn-link" href="/admin/jobs/{{$job->id}}/edit">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                    </td>
                    <td>
                        <button type="button" data-id="{{$job->id}}" class="btn btn-danger deleteJob">X</button>
                    </td>
                </tbody>
            @endforeach
        </table>
        <a class="btn btn-link " href="/admin/jobs/create">
            <button type="button" class="btn btn-success">Post Job</button>
        </a>
    </div>
    <hr>
{{--End Job Posting Section--}}
    <div class="jumbotron jumbotron-fluid pt-5">
        <div class="container">
            <h1 class="display-1">Events</h1>
        </div>
    </div>

    {{--Events Section--}}


    <div class="container">
        <table id="fonts" class="table table-hover table-inverse">
            <thead>
            <tr>
                <th></th>
                <th>Title</th>
                <th>Body</th>
                <th>Start</th>
                <th>End</th>
            </tr>
            </thead>
            @foreach($events as $event)
                <tbody>
                    <tr class="events-{{$event->id}}">
                        <th scope="row"></th>
                        <td>{{$event->title}}</td>
                        <td>{{$event->body}}</td>
                        <td>{{$event->start->toDayDateTimeString()}}</td>
                        <td>{{$event->end->toDayDateTimeString()}}</td>
                        <td><a class="btn btn-link" href="/admin/events/{{$event->id}}/edit">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                        <td>
                            <button type="button" data-id="{{$event->id}}" class="btn btn-danger deleteEvent">X</button>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <a class="btn btn-link" href="/admin/events/create">
            <button type="button" class="btn btn-success">Create Event</button>
        </a>
        <button class="btn btn-primary justify-content-right" id="sendEventsNewsletter">
            Send Events Newsletter
        </button>
    </div>
    <hr>
    {{--End Events Section--}}

    {{--Customer Messages--}}
    <div class="jumbotron jumbotron-fluid pt-5">
        <div class="container">
            <h1 class="display-1">Customer Messages</h1>
            <p class="lead">Power of the People</p>
        </div>
    </div>
    <div class="container">
        <table id="fonts" class="table table-hover table-inverse">
            <thead>
                <tr>
                    <th></th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Created_At</th>
                </tr>
            </thead>
            @foreach($contacts as $contact)
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td>{{$contact->first}}</td>
                        <td>{{$contact->last}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->message}}</td>
                        <td>{{$contact->created_at}}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <button class="btn btn-primary justify-content-right" id="sendGeneralNewsletter">
            Send General Newsletter
        </button>
    </div>
    <hr>
    {{--End Customer Messages--}}

<script>
    $(function () {

        // For deleting taps
        $('.deleteTap').on('click', function () {

            var id = $(this).data('id');

            $.ajax({
                url: '/admin/taproom/'+ id,
                type: 'DELETE',
                data:{},
                success: function(response) {
                    $(".taps-" + id).remove();
                },
                error: function(error){
                    alert('there is an error deleting tap posting');
                }
            });
        });

        // For deleting jobs
        $('.deleteJob').on('click', function () {

            var id = $(this).data('id');

            $.ajax({
                url: '/admin/jobs/'+ id,
                type: 'DELETE',
                data: {},
                success: function(response) {
                    $("#jobs-" + id).remove();
                },
                error: function(error){
                    alert('there is an error deleting job posting');
                }
            });
        });

        // For deleting events
        $('.deleteEvent').on('click', function () {

            var id = $(this).data('id');

            $.ajax({
                url: '/admin/events/'+ id,
                type: 'DELETE',
                data: {},
                success: function(response) {
                    $(".events-" + id).remove();
                },
                error: function(error){
                    alert('there is an error deleting event posting');
                }
            });
        });
        // sending tap newsletter
        $('#sendTapNewsletter').on('click', function () {

            var self = this;
            $(self).attr('disabled', true);
            $(self).html('Sending...');

            $.ajax({
                url: '/admin/tapnewsletter',
                type: 'POST',
                data: {},
                success: function(response) {
                    $(self).attr('disabled', false);
                    $(self).html('Send Taproom Newsletter');
                    alert(response)
                },
                error: function(error){
                    $(self).attr('disabled', false);
                    $(self).html('Send');
                    alert('there is an error sending newsletter');
                }
            });
        });

        //sending events newsletter
        $('#sendEventsNewsletter').on('click', function () {

            var self = this;
            $(self).attr('disabled', true);
            $(self).html('Sending...');

            $.ajax({
                url: '/admin/eventsnewsletter',
                type: 'POST',
                data: {},
                success: function(response) {
                    $(self).attr('disabled', false);
                    $(self).html('Send Events Newsletter');
                    alert(response)
                },
                error: function(error){
                    $(self).attr('disabled', false);
                    $(self).html('Send');
                    alert('there is an error sending newsletter');
                }
            });
        });

        //send general newsletter
        $('#sendGeneralNewsletter').on('click', function () {

            var self = this;
            $(self).attr('disabled', true);
            $(self).html('Sending...');

            $.ajax({
                url: '/admin/generalnewsletter',
                type: 'POST',
                data: {},
                success: function(response) {
                    $(self).attr('disabled', false);
                    $(self).html('Send General Newsletter');
                    alert(response);
                },
                error: function(error){
                    $(self).attr('disabled', false);
                    $(self).html('Send');
                    alert('there is an error sending newsletter');
                }
            });
        });

        // flash message transition
        $('#flash-message').fadeOut(10000);

    });
    </script>





@endsection







