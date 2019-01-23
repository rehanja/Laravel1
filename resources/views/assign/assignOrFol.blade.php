@extends('layouts.app')


@section('content')

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


