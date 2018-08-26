@extends('layouts.app')
@section('content')
    <form method="post" action="{{url('cows')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label>Cow name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label>DOB:</label>
            <input type="text" class="form-control" name="dob" required>
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>


    @endsection