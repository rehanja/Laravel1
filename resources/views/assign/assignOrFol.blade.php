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
                                <div class="card" style="background-image: url(http://127.0.0.1:8000/img/assignor.png);width:600px;height:50%;opacity: 0.8;filter: alpha(opacity=80);padding:20px;font-weight:bold;margin-left:30%">

                            <div class="row justify-content-center">
                                <div class="container text-center">
                                    <h3>Assign OR-Fol</h3>
                                    <br>
                                    <form method="post" action="/assignOrFol/save">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="usr">Member Id:</label>
                                            <input type="number" class="form-control" name="memberId" placeholder="Enter here P-member Id" id="usr">
                                        </div>

                                        <input type="submit" value="submit" style="background-color:orange;width: 150px;height: 50px;">                                    
                                    </form>
                                                    
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


