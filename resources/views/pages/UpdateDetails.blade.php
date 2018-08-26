@extends('layouts.app')
@section('content')
    <form method="post" action="{{url('updating')}}">
        {{csrf_field()}}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>First Name:</label>
                <input type="text" class="form-control" name="first" placeholder="input first name" value="{{$detail->first}}">
                <input type="text" class="form-control" name="id" placeholder="input first name" value="{{$detail->id}}" hidden>
            </div>

            <div class="form-group col-md-6">
                <label>Second Name:</label>
                <input type="text" class="form-control" name="second" placeholder="Input second name" value="{{$detail->second}}">
            </div>
        </div>
        <div class="form-group" col-md-6>
            <label>Email:</label>
            <input type="email" class="form-control" name="email" placeholder="input email address" value="{{$detail->email}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

@endsection