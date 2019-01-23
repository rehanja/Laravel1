@extends('layouts.app')

@section('content')

<!--Begin of update form-->
    <form method="post" action="{{route('userUpdate',['id'=>$user->id])}}">

    {{csrf_field()}}
        <div class = "container">
            <div class="form-group">
                @if ($errors->any())
                    <div class="alert alert-danger">
<!--to show error messages-->
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                            @endif
                                <div class="groove">
                                    <h2>Profile Settings</h2><hr>
                                        <div>
                                            <label for="usr">Name With Initials:</label>
                                            <input type="text" class="form-control" value="{{$user -> nameWithInitials}}" name="nameWithInitials" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Name:</label>
                                            <input type="text" class="form-control" value="{{$user -> name}}" name="name" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">NIC Number:</label>
                                            <input type="text" class="form-control" value="{{$user -> nic}}" name="nic" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Address:</label>
                                            <input type="text" class="form-control" value="{{$user -> address}}" name="address" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Contact Number:</label>
                                            <input type="text" class="form-control" value="{{$user -> contactNumber}}" name="contactNumber" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Email Address:</label>
                                            <input type="text" class="form-control" value="{{$user -> email}}" name="email" placeholder="Enter here" id="usr">
                                        </div>
                                       
<!--Resumission button-->                                        
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-md" >Update</button>
                                        </div>
                                </div>            
            </div>                            
        </div>
    </form>

    @endsection

