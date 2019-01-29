@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIZadz71k-G4BbaQ2wCSpa8mRPVkf3pjk&libraries=places"
async defer></script>

<script src="{{asset('js/script.js')}}"></script>


@section('content')

<br><br><br><br><br><br>
<div class="container text-center">

    <h2>Assign OR-Fol</h2>

    <div id="map">

    </div>
    <br>

    {!! Form::open([]) !!}

    {!! Form::label('district','District') !!}

    {!! Form::select('district',['L' => 'Large', 'S' => 'Small']) !!}

    {!! Form::close() !!}


</div>



@endsection


