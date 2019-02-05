@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIZadz71k-G4BbaQ2wCSpa8mRPVkf3pjk&libraries=places"
async defer></script>


@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(http://127.0.0.1:8000/img/location.jpg);width:100%;height:700px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                        <div class="container">

                            <div class="col-md-8">
                                <div class="card" style="background-image: url(http://127.0.0.1:8000/img/assignor.png);width:160%;height:50%;opacity: 0.8;filter: alpha(opacity=80);padding:20px;font-weight:bold;margin-left:2%">

                            <div class="row justify-content-center">
                                <div class="container text-center">
                                    <h3>View Assign OR-Fol Information</h3>
                                    <br>

                                    <table class="table table-bordered">
                                            <th>User ID</th>
                                            <th>Name with Initials</th>
                                            <th>Name</th>
                                            <th>NIC</th>
                                            <th>Address</th>
                                            <th>Polling Division</th>
                                            <th>Contact Number</th>
                                            <th>Email</th>
                                            

                                            {{-- @foreach($user as $info => $val) --}}
                                            {{-- {{$user}} --}}
                                            {{-- {{$user->id}} --}}
                                            {{-- {{$info}}, --}}
                                            <tr>
                                                <td> {{$user->id}}</td>
                                                <td> {{$user->nameWithInitials}}</td>
                                                <td> {{$user->name}}</td>
                                                <td> {{$user->nic}}</td>
                                                <td> {{$user->address}}</td>
                                                <td> {{$user->pollingDivision}}</td>
                                                <td> {{$user->contactNumber}}</td>
                                                <td> {{$user->email}}</td>
                                            </tr>
                                            {{-- @endforeach --}}

                                            <h5>Destination to the ORFOL {{$min}} km</h5>   
                                        
                                            </table>  
                                            
                                </div>
                            </div>                                                  
                                                  
                                            

</div>

</div>
</div>
</div>
</div>
</div>
</div>
</section>


@endsection


