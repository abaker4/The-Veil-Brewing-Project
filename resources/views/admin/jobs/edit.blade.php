@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Job</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/admin/storejob">
                            {{ csrf_field() }}

                            <input type="hidden" value="{{$jobs->id}}" name="id">

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ $jobs->title}}"  autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
                                <label for="summary" class="col-md-4 control-label">Job Summary</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" id="exampleTextarea" value="{{$jobs->summary}}" name="summary" rows="10"></textarea>

                                    @if ($errors->has('summary'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('q_description') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Start Time</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="q_description" value="{{ $jobs->qualifications}}"  autofocus>

                                    @if ($errors->has('q_description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('q_description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('responsibilities') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Finish Time</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="responsibilities" value="{{ $jobs->responsibilities }}"  autofocus>

                                    @if ($errors->has('responsibilities'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('responsibilities') }}</strong>
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
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection