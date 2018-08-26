@extends('layouts.app')
@section('content')
    <form method="post" action="{{url('detail')}}">
        {{csrf_field()}}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>First Name:</label>
                <input type="text" class="form-control" name="first" placeholder="input first name" required>
            </div>

            <div class="form-group col-md-6">
                <label>Second Name:</label>
                <input type="text" class="form-control" name="second" placeholder="Input second name" required>
            </div>
        </div>
        <div class="form-group" col-md-6>
            <label>Email:</label>
            <input type="email" class="form-control" name="email" placeholder="input email address">
        </div>
        <div class="form-group" col-md-6>
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="password" required>
        </div>

        <div class="form-row">
       <div class="form-group col-md-3">
           <label>Gender:</label>
           <div class="form-check">
               <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
               <label class="form-check-label" for="male">Male</label>
           </div>
               <div class="form-check">
                   <input class="form-check-input" type="radio" name="gender" id="female" value="female"checked>
                   <label class="form-checked-label" for="female">Female</label>
               </div>
       </div>

            <div class="form-group col-md-3">
                <label>Favourite colors:</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="colors" id="yellow" value="yellow" checked/>
                    <label class="form-check-label" for="yellow">Yellow</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="colors" id="blue" value="blue" checked/>
                    <label class="form-checked-label" for="blue">Blue</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        <button type="reset" class="btn btn-primary">RESET</button>
    @endsection