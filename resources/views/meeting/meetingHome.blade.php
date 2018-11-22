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
    <table class="table table-light">
        <th>Title</th>
        <th>Date</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Description</th>
        <th>Invitees</th>
        <th>Status</th>
        <th colspan="3"><center>Actions</center></th>
    
       
    @foreach($meeting as $data)
        <tr>
            <td>{{ $data->title }}</td>
            <td>{{ $data->date }}</td>
            <td>{{ $data->startTime }}</td>
            <td>{{ $data->endTime }}</td>
            <td>{{ $data->description }}</td>
            <td>{{ $data->invitees }}</td>
            <td>{{ $data->status }}</td>
            <td><a href="{{route('meetingDelete',['id' => $data->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
            <td><a href="{{route('meetingUpdate',['id' => $data->id]) }}" class="btn btn-warning btn-sm">Update</a></td>
        
            <td><a href="{{route('meetingViewMail',['title' => $data->title]) }}" class="btn btn-primary btn-sm">Send</a></td>

        </tr>
    @endforeach
                                           
    </table>


@endsection