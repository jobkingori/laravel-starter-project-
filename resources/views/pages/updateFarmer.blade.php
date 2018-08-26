@extends('layouts.app')
@section('content')
    <form method="post" action="{{url('updateFarmer')}}">
        {{csrf_field()}}
        <div class="card-body">
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control" name="first" value="{{$farmer->first}}" >
                <input type="text" class="form-control" name="id" value="{{$farmer->id}}" hidden >
            </div>
            <div class="form-group">
                <label>Second Name:</label>
                <input type="text" class="form-control" name="second" value="{{$farmer->second}}">
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" value="{{$farmer->email}}">
            </div>
            <div class="form-group">
                <label>Phone Number:</label>
                <input type="text" class="form-control" name="number" value="{{$farmer->number}}">
            </div>

            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
@endsection