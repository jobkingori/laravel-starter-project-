@extends('layouts.app')
@section('content')
    <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name:</th>
                <th>Second Name:</th>
                <th>Email:</th>
                <th>Phone No:</th>
                <th>Date:</th>
                <th>Action</th>
            </tr>
            </thead>
    <tbody>
        @foreach($farmers as $farmer)
        <tr>
            <td>{{$farmer->id}}</td>
            <td>{{$farmer->first}}</td>
            <td>{{$farmer->second}}</td>
            <td>{{$farmer->email}}</td>
            <td>{{$farmer->number}}</td>
            <td>{{$farmer->created_at}}</td>
            <td> <a class="btn-primary" href="{{url('farmer/'.$farmer->id)}}" >update</a></td>
        </tr>
@endforeach
    </tbody>
    </table>
    @endsection