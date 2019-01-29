@extends('layouts.app')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image:url(img/dashboard.jpg);width:100%;height:950px">
    <div class="row h-100 align-items-center justify-content-center">

                            <div class="sidenav">
                                    <a href="/profile">Profile</a>
                                    <a href="/createUser">Create User</a>
                                    <a href="/assign">Assign Role</a>
                                    <a href="/assignOrFol">Assign OR-FOL</a>
                                    <a href="/meeting">Meetings</a>
                                    <a href="/event">Events</a>
                                    <a href="/poll">Votes</a>


                            </div>

                            <div class="main">
                                    <div class="container" style="width:1000px;height:400px;">

                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">Dashboard</div>

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







                                                            
                                                            <br><br>
                                                            <h4>Upcoming Meetings</h4><hr>


                                                        </div>
                                                    </div>
                                                </div>

                                        </div>


                                        </div>

    </div>
</section>



@endsection
