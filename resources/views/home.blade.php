@extends('layouts.app')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image:url(img/dashboard.jpg);width:100%;height:950px">
    <div class="row h-100 align-items-center justify-content-center">

        <div class="sidenav" style="background-image: url(img/createusernew.png);opacity: 0.7;filter: alpha(opacity=70)" >
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
        <div class="col-md-8">
            <div class="card" style="background-image: url(img/createusernew.png);width:900px;height:750px;opacity: 0.7;filter: alpha(opacity=70) margin-left:20px">
                <div class="card-header" style="font-size:27px;font-weight:bold">Dashboard</div>

                                                        <div class="card-body">
                                                            @if (session('status'))
                                                                <div class="alert alert-success" role="alert">
                                                                    {{ session('status') }}
                                                                </div>
                                                            @endif

                                                            You are logged in as a
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
                                                            @endrole<br><br>

                                                            <h2>Welcome</h2><br>
                                                            <h4>Upcoming Events</h4><hr>

                                                            @foreach($data as $details)

                                                            <div class="column" >
                                                                <div class="w3-grey w3-hover-shadow w3-center" >
                                                                    <div class="card-body" >


                                                                        <h6 class="card-subtitle mb-2 "> Event Name : {{$details->eventName}}</h6>
                                                                        <h6 class="card-subtitle mb-2 "> Reason : {{$details->reason}} </h6>
                                                                        <h6 class="card-subtitle mb-2 "> Region : {{$details->region}}</h6>
                                                                        <h6 class="card-subtitle mb-2 "> Budget : {{$details->budget}}</h6>
                                                                        <h6 class="card-subtitle mb-2 "> Start Date : {{$details->startDate}}</h6>
                                                                        <h6 class="card-subtitle mb-2 "> Start Time : {{$details->startTime}}h6>


                                                                            </div>
                                                                        </div>

                                                                    </div>



                                                @endforeach







                                                            <br><br>
                                                            <h4>Upcoming Meetings</h4><hr>


                                                        </div>
                                                    </div>
                                                </div>





    </div>
</section>



@endsection
