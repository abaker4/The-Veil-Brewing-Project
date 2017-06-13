@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Job Listing</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/admin/jobs"}>
                            {{ csrf_field() }}
                            <input type="hidden" value="{{$jobs->id}}" name="id">

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{$jobs->title}}" required autofocus>

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
                                    {{--<input id="summary" type="text" class="form-control" name="summary" value="{{ old('summary') }}" required>--}}
                                    <textarea class="form-control" id="exampleTextarea" name="summary" rows="4">{{$jobs->summary}}</textarea>

                                    @if ($errors->has('summary'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('q_description') ? ' has-error' : '' }}">
                                <label for="q_description" class="col-md-4 control-label">Qualifications</label>


                                <div class="col-md-6">
                                    {{--<input id="q_description" type="text" class="form-control" name="q_description" value="{{ old('q_description') }}" required>--}}
                                    <textarea class="form-control" id="q_description" name="q_description" rows="4">{{$jobs->q_description}}</textarea>

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
                                    {{--<input id="responsibilities" type="text" class="form-control" name="responsibilities" value="{{ old('responsibilities') }}" required>--}}
                                    <textarea class="form-control" id="responsibilities" name="responsibilities" rows="4">{{$jobs->responsibilities}}</textarea>

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
                                        <button type="button" class="btn btn-secondary">Cancel</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>









    {{--<div class="col-sm-8 blog-main">--}}

    {{--<h1> Create A Post</h1>--}}

    {{--<hr>--}}

    {{--<form method="POST" action="/posts">--}}

    {{--{{csrf_field()}}--}}

    {{--<div class="form-group">--}}
    {{--<label for="title">Title</label>--}}
    {{--<input type="text" class="form-control" id="title" name="title">--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<label for="body">Body</label>--}}
    {{--<textarea id="body" name="body" class="form-control"></textarea>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<button type="submit" class="btn btn-primary">Publish</button>--}}
    {{--</div>--}}
    {{--</form>--}}

    {{--@include('layouts.errors')--}}
    {{--</div>--}}








@endsection