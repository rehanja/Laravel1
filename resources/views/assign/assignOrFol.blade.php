@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIZadz71k-G4BbaQ2wCSpa8mRPVkf3pjk&libraries=places"
async defer></script>

<script src="{{asset('js/script.js')}}"></script>


@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/location.jpg);width:100%;height:700px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                        <div class="container">

                                <br><br><br><br><br><br><br>
                                <div class="row justify-content-center">


<div class="container text-center">

    <h4>Assign OR-Fol</h4>
<br>
    <div id="map">

    </div>
    <br>

    {!! Form::open([]) !!}

    {!! Form::label('district','District') !!}

    {!! Form::select('district',['L' => 'Large', 'S' => 'Small']) !!}

    {!! Form::close() !!}


</div>

</div>
</div>
</div>
</div>
</div>
</div>
</section>


@endsection


