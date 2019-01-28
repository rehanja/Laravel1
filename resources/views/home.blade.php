@extends('layouts.app')


@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image:url(img/dashboard.jpg);width:1499px;height:950px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="">
                <div class="hero-content">
                        <div class="container">
                                <div class="row justify-content-center">
                                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                                        <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:300px;margin:5px">

                                                <button class="w3-button w3-block w3-left-align" onclick="User()">
                                                User <i class="fa fa-caret-down"></i>
                                                </button>
                                                <div id="demoAcc1" class="w3-hide w3-white w3-card">
                                                  <a href="/createUser" class="w3-bar-item w3-button">Create User</a>
                                                  <a href="/profile" class="w3-bar-item w3-button">Profile</a>
                                                </div>

                                                <a href="/meeting" class="w3-bar-item w3-button">Meetings</a>

                                                <button class="w3-button w3-block w3-left-align" onclick="Events()">
                                                        Events <i class="fa fa-caret-down"></i>
                                                        </button>
                                                        <div id="demoAcc2" class="w3-hide w3-white w3-card">
                                                          <a href="/event" class="w3-bar-item w3-button">Events</a>
                                                          <a href="/poll" class="w3-bar-item w3-button">Polling</a>
                                                        </div>

                                                        <button class="w3-button w3-block w3-left-align" onclick="Assign()">
                                                                Assign <i class="fa fa-caret-down"></i>
                                                                </button>
                                                                <div id="demoAcc3" class="w3-hide w3-white w3-card">
                                                                  <a href="/assign" class="w3-bar-item w3-button">Assign Role</a>
                                                                  <a href="/assignOrFol" class="w3-bar-item w3-button">Assign OR-FOL</a>
                                                        </div>
                                         </div>






<div class="container" style="width:800px">
    <div class="row justify-content-center">
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

</div>

</div>

</div>
</div>
</div>
</div>


<script>
        function User() {
          var x = document.getElementById("demoAcc1");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-green";
          } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-green", "");
          }
        }
        function Events() {
          var x = document.getElementById("demoAcc2");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-green";
          } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-green", "");
          }
        }
        function Assign() {
          var x = document.getElementById("demoAcc3");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-green";
          } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-green", "");
          }
        }


        </script>
</section>
