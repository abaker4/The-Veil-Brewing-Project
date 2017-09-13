@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Event</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/admin/events"}>
                            {{ csrf_field() }}

                            <input type="hidden" value="{{$events->id}}" name="id">

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{$events->title}}"  autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                          <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="summary" class="col-md-4 control-label">Event Summary</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" id="exampleTextarea"  name="body" rows="10">{{$events->body}}</textarea>

                                    @if ($errors->has('body'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('body') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
                                <label for="start" class="col-md-4 control-label">Start Time</label>

                                <div class="col-md-6">
                                    <input id="start" type="text" class="form-control" name="start" value="{{$events->start->toDayDateTimeString()}}" autofocus>

                                    @if ($errors->has('start'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('start') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                                <div class="form-group{{ $errors->has('end') ? ' has-error' : '' }}">
                                    <label for="end" class="col-md-4 control-label">End Time</label>

                                    <div class="col-md-6">
                                        <input id="end" type="text" class="form-control" name="end" value="{{$events->end->toDayDateTimeString()}}"  autofocus>

                                        @if ($errors->has('end'))
                                            <span class="help-block">
                                             <strong>{{ $errors->first('end') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <a class="btn btn-link" href="/admin/home">
                                    <button type="button" class="btn btn-secondary">Cancel</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection