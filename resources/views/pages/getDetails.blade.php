@extends('layouts.app')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>

            <th>ID</th>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Color</th>
            <th>Date</th>
            <th>Action:</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $detail)
            <tr>
                <td>{{$detail->id}}</td>
                <td>{{$detail->first}}</td>
                <td>{{$detail->second}}</td>
                <td>{{$detail->email}}</td>
                <td>{{$detail->gender}}</td>
                <td>{{$detail->colors}}</td>
                <td>{{$detail->created_at}}</td>
                <td> <a class=" btn btn-primary" href="{{url('detail/'.$detail->id)}}" ><b>Update</b></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection