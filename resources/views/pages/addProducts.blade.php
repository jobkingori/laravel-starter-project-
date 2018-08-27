@extends('layouts.app')
@section('content')
    <form method="post" action="{{url('addItems')}}">
        <div class="form-group" >
            {{csrf_field()}}
        <label>Product name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label>Description:</label>
            <input type="text" class="form-control" name="description" required>
        </div>

        <div class="form-group">
            <label>Amount:</label>
            <input type="text" class="form-control" name="amount" required>
        </div>

        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
    @endsection