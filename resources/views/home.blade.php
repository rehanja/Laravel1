@extends('layouts.app')
<style>
    .col-xs-6 {
        background-color: lightgrey;
        width: 500px;
        border: 25px solid green;
        padding: 25px;
        margin: 25px;
    }
    </style>
@section('content')

<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:20%">
    <a href="http://localhost:8000/assign" class="w3-bar-item w3-button">assign</a>
    <a href="http://localhost:8000/meeting" class="w3-bar-item w3-button">meeting</a>
    {{-- <div class="w3-dropdown-hover">
      <button class="w3-button">Dropdown
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="w3-dropdown-content w3-bar-block">
        <a href="#" class="w3-bar-item w3-button">Link</a>
        <a href="#" class="w3-bar-item w3-button">Link</a>
      </div>
    </div> --}}
    <a href="http://localhost:8000/createUser" class="w3-bar-item w3-button">create user</a>
    <a href="http://localhost:8000/event" class="w3-bar-item w3-button">event</a>
  </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in...!!<br><br>



                   @role('or_fol')
                   <p> orfol</p>
                   @endrole
                   @role('or_pm')
                   <p> orpm</p>
                   @endrole
                   @role('p_member')
                   <p> pmember</p>
                   @endrole
                   @role('or_pm|supervising_officer')
                   <p>supervising officer</p>
                   @endrole


                    <h2>Welcome</h2>
                    <h3>Upcoming Events</h3>

                    <div class="col-sm-12">
                        <div class="raw">
                            <div class="col-xs-6">
                                <h3>Event : donate the play ground<h3><hr>
                                <ul>
                                    <li>Region : Godagama, Panadura</li>
                                    <li>Start date : 2016/01/07</li>
                                    <li>Start time : 08:30 AM </li>
                                    <li>Budget : Rs.200,000 </li>
                                    <li>Reason :No any other ground of this region and it has lot of good players, but they cannot practice well without ground</li>
                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <h3>Event : repair the bridge<h3><hr>
                                <ul>
                                    <li>Region : yatiyana, ampara</li>
                                    <li>Start date : 2017/02/17</li>
                                    <li>Start time : 10:30 AM </li>
                                    <li>Budget : Rs.350,000 </li>
                                    <li>Reason :No any bridge connect to the five villages through river. Existing bridge had very dangerous situation.because it not repair since 10 years.</li>
                                </ul>
                            </div>
                         </div>
                    </div>

                    <h3>Upcoming Meetings</h3>


                </div>
            </div>
        </div>
    </div>
</div>





@endsection
