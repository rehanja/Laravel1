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


        <div class="content" style="display: block; margin: 0">
                <br><br><br><br><br><br><br><br>
                    <a class="btn btn-primary"  href="{{ route('register') }}"> Create User</a>
                    <a class="btn btn-primary" href="{{ route('assign') }}"> Assign Role</a>

        </div>

        <br><br>

        <div class="col-md-12">

        @foreach($data as $details)

                <div class="column" >
                    <div class="w3-grey w3-hover-shadow w3-center" >
                        <div class="card-body" >

                            <h5 class="card-title"><b> User ID : {{$details->id}} <b>&nbsp;&nbsp;<img src={{$details->profilePic}} style="width:50px;height:50px"></h5>

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

<br><br>
                    <a href="#myModal3" class="btn btn-warning" data-toggle="modal">Update</a>
                     <a href="#myModal4" class="btn btn-danger" data-toggle="modal">Delete</a>






                                </div>
                            </div>

                        </div>



    @endforeach

    <div class="content" style="margin-top:800px;margin-left:600px">
        {{ $data->links() }}
      </div>

    </div>




</div>


</section>

<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
                        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

                              <!--issue membership confirmation pop-up-->

                          <div id="myModal1" class="modal fade" style="">
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



@endsection

@section('content')



@endsection


