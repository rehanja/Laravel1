@extends('layouts.app')

@section('content')

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
            
            <a class="btn btn-info" href="{{ route('meetingCreate') }}"><b> Create Meeting</b></a>
            
        </div>
    </div>
</div><br>
    <div class="col-md-12">
            @foreach($meeting as $data)
            <div class="card" style="width:19%">
                <div class="card-body" >
                    
                        <h5 class="card-title">Meeting with: {{ $data->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Title : {{ $data->title }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Date : {{ $data->date }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Start time : {{ $data->startTime }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">End time : {{ $data->endTime }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Description : {{ $data->description }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Status : {{ $data->status }}</h6>
                        <td><a href="{{route('meetingDelete',['id' => $data->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
                        <a href="{{route('meetingUpdate',['id' => $data->id]) }}" class="btn btn-warning btn-sm">Update</a>
                        <a href="{{route('meetingViewMail',['title' => $data->title]) }}" class="btn btn-primary btn-sm">Send</a>
                        <p class="card-text">Event created by achini</p>
                 
                </div>
              </div>
              @endforeach  

           
@endsection
   