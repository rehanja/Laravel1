@extends('layouts.app')

@section('content')

<!--Begin of update form-->
    <form method="post" action="/updateUser">
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
                    <h2>Update User</h2><hr>
                <div>

                <input type="hidden" class="form-control" value="{{$data -> id}}" name="id" placeholder="" id="usr">

                <div class="form-group">
                    <label for="usr">Name With Initials:</label>
                    <input type="text" class="form-control" value="{{$data -> nameWithInitials}}" name="nameWithInitials" placeholder="Enter here" id="usr">
                </div>

                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" class="form-control" value="{{$data -> name}}" name="name" placeholder="Enter here" id="usr">
                </div>

                <div class="form-group">
                    <label for="usr">NIC:</label>
                    <input type="text" class="form-control" value="{{$data -> nic}}" name="nic" placeholder="Enter here" id="usr">
                </div>

                <div class="form-group">
                    <label for="usr">Address:</label>
                    <input type="text" class="form-control" value="{{$data -> address}}" name="address" placeholder="Enter here" id="usr">
                </div>

                <div class="form-group">
                    <label for="usr">Contact Number:</label>
                    <input type="text" class="form-control" value="{{$data -> contactNumber}}" name="contactNumber" placeholder="Enter here" id="usr">
                </div>

<!--Resumission button-->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-md" >Update</button>


                &nbsp; &nbsp;


                    <button type="submit" class="btn btn-primary btn-md" >Close</button>
                </div>
            </div>
        </div>
    </form>


@endsection
