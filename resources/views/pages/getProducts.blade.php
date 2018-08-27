@extends('layouts.app')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID:</th>
            <th>Product Name:</th>
            <th>Description:</th>
            <th>Amount:</th>
            <th>Date:</th>
            <th>Action:</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->amount}}</td>
                <td>{{$product->created_at}}</td>
                <td> <a class="btn-primary" href="{{url('product/'.$product->id)}}" >update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection