@extends('layouts.app')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
<style>
h1 {
    color: brown;
    font-style: italic;
    text-align: center;
    outline-style: solid;
    outline-color: brown;
    outline-width: 10px;
}
</style>

@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image:url(img/dashboard.jpg);width:100%;height:250%">
    <div class="row h-100 align-items-center justify-content-center">

        <div class="sidenav" style="opacity: 0.7;filter: alpha(opacity=70);margin-top:45px" >
            <h3 >Menu</h3>
                <hr>
                    <a href="/profile">Profile</a>
                    <a href="/createUser">Create User</a>
                    <a href="/assign">Assign Role</a>
                    <a href="/assignOrFol">Assign OR-FOL</a>
                    <a href="/meeting">Meetings</a>
                    <a href="/event">Events</a>
                    <a href="/poll">Votes</a>
        </div>
        <div class="col-md-9">
            <div class="card" style="width:100%;height:90%;opacity: 0.7;filter: alpha(opacity=70); margin-left:0.5%;margin-top:85px">
                <div class="card-header" style="font-size:27px;font-weight:bold">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p style="font-size:25px">You are logged in as a <span style="font-weight:bold">
                            @role('p_member')
                                Primary member
                            @endrole
                            @role('or_fol')
                                Officer responsible for follow up (OR_FOL)
                            @endrole
                            @role('or_pm')
                                Officer responsible for respctive member (OR_PM)
                            @endrole
                            @role('or_pm|supervising_officer')
                               Supervising officer
                            @endrole </span> </p> <br><br>

                        <h1>Welcome</h1><br>
                        <h4>Upcoming Events</h4><hr>

                        @foreach($data as $details)

                            <div class="column" >
                                <div class="w3-green w3-hover-shadow w3-center" >
                                    <div class="card-body" style="background-image: url(img/dashboardnew.jpg);height:20%;font-weight:bold">

                                        <h5 class="card-title"><b> Event Name : {{$details->eventName}} <b></h5>
                                        <br>
                                        <h6 class="card-subtitle mb-2 "> Reason : {{$details->reason}} </h6>
                                        <h6 class="card-subtitle mb-2 "> Region : {{$details->region}}</h6>
                                        <h6 class="card-subtitle mb-2 "> Budget : {{$details->budget}}</h6>
                                        <h6 class="card-subtitle mb-2 "> Start Date : {{$details->startDate}}</h6>
                                        <h6 class="card-subtitle mb-2 "> Start Time : {{$details->startTime}}h6>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        <h4>Upcoming Meetings</h4><hr>

                        
                    </div>





                </div>
            </div>
        </div>
    </div>
</section>

@endsection
