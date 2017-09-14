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

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{$jobs->title}}"  autofocus>

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
                                    <textarea class="form-control" id="exampleTextarea" name="summary" rows="10">{{$jobs->summary}}</textarea>

                                    @if ($errors->has('summary'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('summary') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('q_description') ? ' has-error' : '' }}">
                                <label for="q_description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" id="exampleTextarea" name="q_description" rows="10">{{$jobs->q_description}}</textarea>

                                    @if ($errors->has('q_description'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('q_description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('responsibilities') ? ' has-error' : '' }}">
                                <label for="responsibilities" class="col-md-4 control-label">Responsibilities</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" id="exampleTextarea" name="responsibilities" rows="10">{{$jobs->responsibilities}}</textarea>

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