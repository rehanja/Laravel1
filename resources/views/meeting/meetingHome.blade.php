@extends('layouts.app')

@section('content')


<div class="content">
    <div class="title m-b-md">

        <div class="col-md-12">
            <a class="btn btn-info" href="{{ route('meetingCreate') }}"> Create Meeting</a>
        </div>
    </div>
</div><br>
    <div class="col-md-12">
    <table class="table table-dark">
        <th>Title</th>
        <th>Date</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Description</th>
        <th>Invitees</th>
        <th>Status</th>
        <th scope="col">Action</th>
    
       
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
        </tr>
    @endforeach
                                           
    </table>


@endsection