@extends('layouts.app')

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

 
<div class="content">
    <div class="title m-b-md">
<p> *Noted : You cannot change your votes, after adding.</p>
    </div>
</div>
    <div class="col-md-12">
   
       

    @foreach($event as $data)
    <div class="card" style="width:25%">
        <div class="card-body" >
            
                <h5 class="card-title">Event name: {{$data->eventName}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Reason : {{$data->reason}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Region : {{$data->region}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Budget : {{$data->budget}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Start date : {{$data->startDate}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Start time : {{$data->startTime}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">End time : {{$data->endTime}}</h6>
                <p class="card-text">Event created by rehan</p>
         
        </div>
      </div>
      @endforeach

      

@endsection