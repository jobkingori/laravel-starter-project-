@extends('layouts.app')
@section('content')
    <form method="post" action="{{url('add')}}">
        {{csrf_field()}}
        <div class="card-body">
            <div class="form-group">
            <label>First Name:</label>
                <input type="text" class="form-control" name="first">
            </div>
            <div class="form-group">
                <label>Second Name:</label>
                <input type="text" class="form-control" name="second">
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Phone Number:</label>
                <input type="text" class="form-control" name="number">
            </div>

            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
    @endsection