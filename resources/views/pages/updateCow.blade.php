@extends('layouts.app')
@section('content')
    <form method="post" >
        {{csrf_field()}}
        <div class="form-group">
            <label>Cow name:</label>
            <input type="text" class="form-control" name="name" value="{{$cow->name}}">
            <input type="text" class="form-control" name="id" value="{{$cow->id}}" hidden>

        </div>
        <div class="form-group">
            <label>DOB:</label>
            <input type="text" class="form-control" name="dob" value="{{$cow->dob}}">
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>


@endsection