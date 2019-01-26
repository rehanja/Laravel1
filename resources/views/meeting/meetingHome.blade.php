@extends('layouts.app')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
<link href="{{ asset('css/popup.css') }}" rel="stylesheet">

@section('content')
you log in as 
    @role('p_member')
     pmember
    @endrole
    @role('or_fol')
     orfol
    @endrole
    @role('or_pm')
     orpm
    @endrole
    @role('or_pm|supervising_officer')
    supervising officer
    @endrole

<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!--for email sending & meeting deleting-->
        @if (session('message'))
            <div class="flash-message">
                <div class="alert alert-success">
                    <strong>
                        {{ session('message') }}
                    </strong>
                </div>
            </div>
        @endif
 
    


<div class="content">
    <div class="title m-b-md">
        <div class="col-md-12">    
            <a class="btn btn-primary" href="{{ route('meetingCreate') }}"> Create a Meeting</a>    
        </div>
    </div>
</div><br>

    <div class="col-md-12">
        @foreach($meeting as $data)
            <div class="row">
                <div class="column">
                    <div class="card" >
                        <div class="card-body" >       
                        
                            <h5 class="card-title"> Meeting with : {{ $data->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Member Email : {{ $data->email }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Date : {{ $data->date }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Start time : {{ $data->startTime }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">End time : {{ $data->endTime }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Venue : {{ $data->venue }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Invitees : {{ $data->invitees }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Status : {{ $data->status }}</h6><br>
                            <a onclick="return confirm('Are you sure to delete this meeting?')" href="{{route('meetingDelete',['id' => $data->id]) }}" class="btn btn-danger btn-sm">Delete</a>                        
                            <a onclick="return confirm('Are you sure to update this meeting details?')" href="{{route('meetingUpdate',['id' => $data->id]) }}" class="btn btn-warning btn-sm">Update</a>
                            <a onclick="return confirm('Are you sure to send this E-mail?')"  href="{{route('meetingViewMail',['email' => $data->email]) }}" class="btn btn-primary btn-sm">Send an E-mail</a>
                         
                        </div>
                    </div>
                </div>
            </div>

    @endforeach  
    </div>
           
@endsection
   