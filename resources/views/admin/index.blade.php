
@extends('layouts.app')

@section('content')




    <div class="jumbotron jumbotron-fluid pt-5">
        <div class="container">
            <h1 class="display-1">Beer Central</h1>
            <p class="lead">I'd Tap That! </p>
        </div>
    </div>

    {{--Add Tap Section--}}
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
            @foreach($taps as $list)
                <tbody>
                <tr class="taps-{{$list->id}}">
                    <th scope="row"></th>
                    <td>{{$list->title}}</td>
                    <td>{{$list->type}}</td>
                    <td>{{$list->ABV}}</td>
                    <td>{{$list->small}}</td>
                    <td>{{$list->large}}</td>
                    <td><a class="btn btn-link" href="/admin/taproom/{{$list->id}}/edit">
                        <button type="button" class="btn btn-primary">Edit</button></a></td>
                    {{--<a class="btn btn-link" href="/admin/taproom/{{$list->id}}/delete">--}}
                          <td><button type="button" class="btn btn-danger deleteTap">X</button></td>
                </tr>


                <div id="delTap" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            Are you sure you want to delete this item?
                            <a class="btn btn-link" href="/admin/taproom/{{$list->id}}/delete"><button class="btn btn-danger">Delete Tap</button></a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                        </div>
                    </div>
                </div>


                </tbody>



            @endforeach
        </table>


        <a class="btn btn-link " href="/admin/taproom/create">
            <button type="button" class="btn btn-success">Add Tap Item</button>
        </a>
    </div>

    <hr>

{{--End Taproom Section--}}

    <div class="jumbotron jumbotron-fluid pt-5">
        <div class="container">
            <h1 class="display-1">Jobs Posting</h1>
            <p class="lead">Grow Dat Company! </p>
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
            @foreach($jobs as $list)
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <td>{{$list->title}}</td>
                    <td>{{$list->summary}}</td>
                    <td>{{$list->q_description}}</td>
                    <td>{{$list->responsibilities}}</td>
                    <td><a class="btn btn-link" href="/admin/jobs/{{$list->id}}/edit">
                            <button type="button" class="btn btn-primary">Edit</button></a></td>
                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-sm">X</button></td>
                </tr>


                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            Are you sure you want to delete this item?
                            <a class="btn btn-link" href="/admin/jobs/{{$list->id}}/delete"><button class="btn btn-danger">Delete job posting</button></a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                        </div>
                    </div>
                </div>

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
            <p class="lead">Shake it like a salt shaker! </p>
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
                <th></th>
                <th></th>
            </tr>
            </thead>
            @foreach($events as $list)
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <td>{{$list->title}}</td>
                    <td>{{$list->body}}</td>
                    <td><a class="btn btn-link" href="/admin/events/{{$list->id}}/edit">
                            <button type="button" class="btn btn-primary">Edit</button></a></td>
                    <td><a class="btn btn-link" href="/admin/events/{{$list->id}}/delete">
                            <button type="button" class="btn btn-danger">X</button></a></td>
                </tr>
                </tbody>

            @endforeach
        </table>


        <a class="btn btn-link " href="/admin/events/create">
            <button type="button" class="btn btn-success">Create Event</button>
        </a>
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
            @foreach($contacts as $list)
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <td>{{$list->first}}</td>
                    <td>{{$list->last}}</td>
                    <td>{{$list->email}}</td>
                    <td>{{$list->subject}}</td>
                    <td>{{$list->message}}</td>
                    <td>{{$list->created_at}}</td>

                </tr>
                </tbody>

            @endforeach
        </table>



    </div>

    <hr>



{{--/End Customer Messages--}}

<script>

    $(function (){
        $('.deleteTap').on('click', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: '/admin/taproom/'+ id,
                type: 'DELETE',
                data: {
                    id: id
                },
                success: function(response) {
                    $('.taps-'+ id).remove();
                },
                error: function(error){
                    alert('there is an error deleting tap');
                }
            });
        });

    });
</script>
@endsection







