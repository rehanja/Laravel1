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

                            <h5 class="card-title">Meeting with : {{ $data->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Member Email : {{ $data->email }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Date : {{ $data->date }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Start time : {{ $data->startTime }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">End time : {{ $data->endTime }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Description : {{ $data->description }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Invitees : {{ $data->invitees }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Status : {{ $data->status }}</h6><br>
                            <a href="#myModal1" class="btn btn-danger btn-sm" data-toggle="modal">Delete</a>
                            <a href="{{route('meetingUpdate',['id' => $data->id]) }}" class="btn btn-warning btn-sm">Update</a>
                            <a href="{{route('meetingViewMail',['email' => $data->email]) }}" class="btn btn-primary btn-sm">Send an E-mail</a>
                            <p class="card-text">Meeting created by Achini</p>
                        </div>

                        <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--delete confirmation pop-up-->

    <div id="myModal1" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete this meeting? This process cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                    <a href="{{route('meetingDelete',['id' => $data->id]) }}" class="btn btn-danger" >Delete</a>
                </div>
            </div>
        </div>
    </div>
 
                    </div>
                </div>
            </div>




    @endforeach  
    </div>
           
@endsection
   