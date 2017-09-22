@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Brew</div>
                     <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/admin/storetap">

                            {{ csrf_field() }}

                            <input type="hidden" value="{{$tap->id}}" name="id">
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{$tap->title}}" required autofocus>
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                          <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-4 control-label">Type</label>
                                <div class="col-md-6">
                                    <input id="type" type="text" class="form-control" name="type" value="{{ $tap->type }}" required autofocus>
                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('ABV') ? ' has-error' : '' }}">
                                <label for="ABV" class="col-md-4 control-label">ABV</label>
                                <div class="col-md-6">
                                    <input id="ABV" type="number" step="any" class="form-control" name="ABV" value="{{ $tap->ABV }}" required>
                                    @if ($errors->has('ABV'))
                                        <span class="help-block">
                                          <strong>{{ $errors->first('ABV') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('small') ? ' has-error' : '' }}">
                                <label for="small" class="col-md-4 control-label">6oz $</label>
                                <div class="col-md-6">
                                    <input id="small" type="number" step="any" class="form-control" name="small"  value="{{$tap->small}}"required>
                                    @if ($errors->has('small'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('small') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('large') ? ' has-error' : '' }}">
                                <label for="small" class="col-md-4 control-label">12oz $</label>
                                <div class="col-md-6">
                                    <input id="small" type="number" step="any" class="form-control" name="large" value="{{$tap->large}}"required>
                                    @if ($errors->has('large'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('large') }}</strong>
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
