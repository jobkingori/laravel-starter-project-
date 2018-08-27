@extends('layouts.app')
@section('content')
    <form method="post" action="{{url('updateProduct')}}">
        <div class="form-group" >
            {{csrf_field()}}
            <label>Product name:</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
            <input type="text" class="form-control" name="id" value="{{$product->id}}" hidden>
        </div>

        <div class="form-group">
            <label>Description:</label>
            <input type="text" class="form-control" name="description" value="{{$product->description}}">
        </div>

        <div class="form-group">
            <label>Amount:</label>
            <input type="text" class="form-control" name="amount" value="{{$product->amount}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection