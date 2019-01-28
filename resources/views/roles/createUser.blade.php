@extends('layouts.app')


@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image:url(img/createuser.jpg);width:1499px;height:950px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-6 col-md-12">
                <div class="hero-content">
                        <div class="container">
                                <div class="row justify-content-center">

                                    div class="content">
                                    <div class="title m-b-md">
                                        <div class="col-md-12">
                                            <a class="btn btn-primary" href="{{ route('') }}"> Register</a>
                                        </div>
                                    </div>
                                </div><br>

                                    <div class="col-md-12">

                                        @foreach($data as $details)

                                                <div class="column" >
                                                    <div class="card" >
                                                        <div class="card-body" >

                                                            <h5 class="card-title"><b> User ID : {{$details->id}} <b></h5>
                                                            <h6 class="card-subtitle mb-2 "> Name with Initials : {{$details->nameWithInitials}}</h6>
                                                            <h6 class="card-subtitle mb-2 "> Name : {{$details->name}} </h6>
                                                            <h6 class="card-subtitle mb-2 "> NIC : {{$details->nic}}</h6>
                                                            <h6 class="card-subtitle mb-2 "> Address : {{$details->address}}</h6>
                                                            <h6 class="card-subtitle mb-2 "> Polling Division : {{$details->pollingDivision}}</h6>
                                                            <h6 class="card-subtitle mb-2 "> Contact Number : {{$details->contactNumber}}h6>
                                                            <h6 class="card-subtitle mb-2 "> Email : {{$details->email}}</h6><br>

                                                        @if($details->isActive)
                                        <button class="btn btn-success">Active Member</button>
                                        @else
                                        <button class="btn btn-basic">Temporary Member</button>
                                        @endif


                                @if(!$details->isActive)
                                            <a href="#myModal1" class="btn btn-primary" data-toggle="modal">Issue Membership</a>
                                        @else
                                            <a href="#myModal2" class="btn btn-info" data-toggle="modal" >Remove Membership</a>
                                        @endif


                                <a href="#myModal3" class="btn btn-warning" data-toggle="modal">Update</a>
                                 <a href="#myModal4" class="btn btn-danger" data-toggle="modal">Delete</a>


                                                            <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
                                      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

                                      <!--issue membership confirmation pop-up-->

                                      <div id="myModal1" class="modal fade">
                                            <div class="modal-dialog modal-confirm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="icon-box" style="color: #fff;
                                                            position: absolute;
                                                            margin: 0 auto;
                                                            left: 0;
                                                            right: 0;
                                                            top: -70px;
                                                            width: 95px;
                                                            height: 95px;
                                                            border-radius: 50%;
                                                            z-index: 9;
                                                            background: #82ce34;
                                                            padding: 15px;
                                                            text-align: center;
                                                            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                                                                <i class="material-icons" style="font-size: 58px;
                                                                position: relative;
                                                                top: 3px;">&#xE876;</i>
                                                        </div>
                                                        <h4 class="modal-title" style="margin: 30px 70px -10px;">Are you sure?</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Do you really want to issue membership? Then temporary member will become an active member.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                                        <a href="/markAsCompleted/{{$details->id}}" class="btn btn-primary">OK</a>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                      <!--remove membership confirmation pop-up-->

                                      <div id="myModal2" class="modal fade">
                                            <div class="modal-dialog modal-confirm">
                                                <div class="modal-content" >
                                                    <div class="modal-header">
                                                        <div class="icon-box" style="color: #fff;
                                                            position: absolute;
                                                            margin: 0 auto;
                                                            left: 0;
                                                            right: 0;
                                                            top: -70px;
                                                            width: 95px;
                                                            height: 95px;
                                                            border-radius: 50%;
                                                            z-index: 9;
                                                            background: red;
                                                            padding: 15px;
                                                            text-align: center;
                                                            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                                                                <i class="material-icons" style="font-size: 58px;
                                                                position: relative;
                                                                top: 3px;">&#xE5CD;</i>
                                                        </div>
                                                        <h4 class="modal-title" style="margin: 30px 70px -10px;">Are you sure?</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <p>Do you really want to remove membership? Then active member will become a temporary member.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                                        <a href="/markAsNotCompleted/{{$details->id}}" class="btn btn-primary">OK</a>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                      <!--update confirmation pop-up-->

                                      <div id="myModal3" class="modal fade">
                                            <div class="modal-dialog modal-confirm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="icon-box" style="width: 80px;
                                                            height: 80px;
                                                            margin: 0 auto;
                                                            border-radius: 50%;
                                                            z-index: 9;
                                                            text-align: center;
                                                            border: 3px solid green;">
                                                                <i class="material-icons" style="color: green;
                                                                font-size: 46px;
                                                                display: inline-block;
                                                                margin-top: 13px;">&#xE876;</i>
                                                        </div>
                                                        <h4 class="modal-title">Are you sure?</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Do you really want to update these records? </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                                        <a href="/updateMember/{{$details->id}}" class="btn btn-warning" >Update</a>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

                                      <!--delete confirmation pop-up-->

                                      <div id="myModal4" class="modal fade">
                                        <div class="modal-dialog modal-confirm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="icon-box" style="width: 80px;
                                                        height: 80px;
                                                        margin: 0 auto;
                                                        border-radius: 50%;
                                                        z-index: 9;
                                                        text-align: center;
                                                        border: 3px solid red;">
                                                            <i class="material-icons" style="color: red;
                                                            font-size: 46px;
                                                            display: inline-block;
                                                            margin-top: 13px;">&#xE5CD;</i>
                                                    </div>
                                                    <h4 class="modal-title">Are you sure?</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>

                                                <div class="modal-body">
                                                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Delete</button>
                                                </div>

                                                        </div>
                                                    </div>
                                                </div>


                                    @endforeach

                                    <div class="text-center" style="margin:10px 30%" >
                                    {{ $data->links() }}
                                  </div>

                                    </div>  




@endsection


