@extends('layouts.app')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Date</th>
            <th>Action:</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cows as $cow)
            <tr>
                <td>{{$cow->id}}</td>
                <td>{{$cow->name}}</td>
                <td>{{$cow->dob}}</td>
                <td>{{$cow->created_at}}</td>
                <td> <a class="btn-primary" href="{{url('cow/'.$cow->id)}}" >update</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection