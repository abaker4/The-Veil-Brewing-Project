
@extends('layouts.app')

@section('content')
    <div class="container">
        <table id="fonts"class="table table-hover table-inverse">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Type</th>
                <th>ABV</th>
                <th>6oz</th>
                <th>12oz</th>
            </tr>
            </thead>
            @foreach($taps as $list)
                <tbody>
                <tr>
                    <th scope="row">{{$list->id}}</th>
                    <td>{{$list->title}}</td>
                    <td>{{$list->type}}</td>
                    <td>{{$list->ABV}}</td>
                    <td>{{$list->small}}</td>
                    <td>{{$list->large}}</td>
                    <td><button type="button" class="btn btn-primary">Edit</button></td>
                </tr>
                </tbody>

            @endforeach
        </table>

        <button type="button" class="btn btn-success">Add Tap Item</button>

    </div>
    @endsection