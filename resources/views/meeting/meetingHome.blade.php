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
<<<<<<< HEAD
        
        <th colspan="3"><center>Actions</center></th>
        
=======
        <th>Delete</th>
        <th>Update</th>
        <th>Sending Emails</th>
    
       
>>>>>>> ffed76acd78f4a7fd1a3aafd1a85a29f33fdeeaf
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
<<<<<<< HEAD
            <td><a href="{{route('meetingViewMail',['title' => $data->title]) }}" class="btn btn-primary btn-sm">Send</a></td>
            
=======
        

            <td>
            <a href="{{route('meetingViewMail',['title' => $data->title]) }}" class="btn btn-primary btn-sm">Send</a>
            </td>

>>>>>>> ffed76acd78f4a7fd1a3aafd1a85a29f33fdeeaf
        </tr>
    @endforeach    
            

        

        @role('or_fol')
        <p> orfol</p>
        @endrole
        @role('or_pm')
        <p> orpm</p>
        @endrole
        @role('p_member')
        <p> pmember</p>
        @endrole
        @role('or_pm|supervising_officer')
        <p>supervising officer</p>
        @endrole
                                             
    </table>


@endsection
   