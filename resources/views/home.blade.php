@extends('layouts.app')


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


                    <h2>Welcome</h2><br>
                    <h4>Upcoming Events</h4><hr>

                    <br><br>
                    <h4>Upcoming Meetings</h4><hr>


                </div>
            </div>
        </div>
    </div>
</div>





@endsection
