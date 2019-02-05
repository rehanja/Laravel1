@extends('layouts.app')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
<link href="{{ asset('css/confirmationModel.css') }}" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/createuser.jpg);width:100%;height:1200px; margin:0px 0px 0px 0px;">
    <div class="row h-100 align-items-center justify-content-center">
        <div class="content" style="display: block; margin-top:0%;margin-left:78%">
                <br><br><br><br><br><br><br><br>
                <a class="btn btn-primary"  href="{{ route('register') }}"> Create User</a>
                <a class="btn btn-primary" href="{{ route('assign') }}"> Assign Role</a>
            </div>
       
        <br><br>

        <div class="col-md-10">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('message'))
                    <div class="flash-message">
                        <div class="alert alert-success">
                        <strong>
                            {{ session('message') }}
                        </strong>
                        </div>
                    </div>
                @endif
        </div>    


        <div class="col-md-12">
                
            @foreach($data as $details)

                <div class="column" >
                    <div class="w3-white w3-hover-shadow w3-center" >
                        <div class="card-body" >

                            <h5 class="card-title"><b> User ID : {{$details->id}} <b>&nbsp;&nbsp;<img src={{$details->profilePic}} style="width:50px;height:50px"></h5>

                            <h6 class="card-subtitle mb-2 "> Name with Initials : {{$details->nameWithInitials}}</h6>
                            <h6 class="card-subtitle mb-2 "> Name : {{$details->name}} </h6>
                            <h6 class="card-subtitle mb-2 "> NIC : {{$details->nic}}</h6>
                            <h6 class="card-subtitle mb-2 "> Address : {{$details->address}}</h6>
                            <h6 class="card-subtitle mb-2 "> Polling Division : {{$details->pollingDivision}}</h6>
                            <h6 class="card-subtitle mb-2 "> Contact Number : {{$details->contactNumber}}</h6>
                            <h6 class="card-subtitle mb-2 "> Email : {{$details->email}}</h6><br>

                            @if($details->isActive)
                            <button class="btn btn-success">Active Member</button>
                            @else
                            <button class="btn btn-basic">Temporary Member</button>
                            @endif


                            @if(!$details->isActive)
                                <a onclick="return confirm('Are you sure to issue membership?')" href="/markAsCompleted/{{$details->id}}" class="btn btn-primary btn-sm">Issue Membership</a>
                            @else
                                <a onclick="return confirm('Are you sure to remove membership?')" href="/markAsNotCompleted/{{$details->id}}" class="btn btn-info btn-sm">Remove Membership</a>
                            @endif

                            <br><br>
                            <a onclick="return confirm('Are you sure to update this user details?')" href="/updateMember/{{$details->id}}" class="btn btn-warning btn-sm">Update</a>
                            <a onclick="return confirm('Are you sure to delete this user?')" href="{{route('userDelete',['id' => $details->id]) }}" class="btn btn-danger btn-sm">Delete</a>

                        </div>
                    </div>
                </div>

            @endforeach
          
            </div>
            <div class="text-center" style="margin-right:120px">
                    {{ $data->links() }}
            </div>
    </div>
   
</section>


@endsection

@section('content')



@endsection


