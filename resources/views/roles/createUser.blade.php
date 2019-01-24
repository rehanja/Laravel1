@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-striped">
    <th>User ID</th>
    <th>Name With Initials</th>
    <th>name</th>
    <th>NIC</th>
    <th>Address</th>
    <th>Contact Number</th>
    <th>Email</th>
    <th>Member</th>
    <th>Action</th>
    <th>Update</th>
    <th>Delete</th>

    @foreach($data as $details)
    <tr>
        <td>{{$details->id}}</td>
        <td>{{$details->nameWithInitials}}</td>
        <td>{{$details->name}}</td>
        <td>{{$details->nic}}</td>
        <td>{{$details->address}}</td>
        <td>{{$details->contactNumber}}</td>
        <td>{{$details->email}}</td>

        <td>
        @if($details->isActive)
        <button class="btn btn-success">Completed</button>
        @else
        <button class="btn btn-basic">Not Completed</button>
        @endif
        </td>

        <td>
        @if(!$details->isActive)
        <a href="/markAsCompleted/{{$details->id}}" class="btn btn-primary">Marked as Member</a>
        @else
        <a href="/markAsNotCompleted/{{$details->id}}" class="btn btn-info">Marked as Not Member</a>
        @endif
        </td>

        <td>
        <a href="/updateMember/{{$details->id}}" class="btn btn-warning">Update</a>
        </td>

        <td>
        <a href="/deleteMember/{{$details->id}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>

    @endforeach
</table>
</div>

@endsection
