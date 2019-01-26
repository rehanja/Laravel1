@extends('layouts.app')

@section('content')

<form method="post" action="{{route('meetingSave',['id'=>$meeting->id])}}">

    {{csrf_field()}}

    <div class = "container">
        <div class="form-group">


            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('message'))
                    <div class="flash-message">
                        <div class="alert alert-success">
                        <strong>
                            {{ session('message') }}
                        </div>
                    </div>
                @endif



            <div class="abc">
                <h2>Update Meeting</h2><br>

                <div class="form-group">
                    <label for="title">Member name :</label>
                    <input type="text" class="form-control" value="{{$meeting -> name}}" name="name" placeholder="enter p-member name here" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Member Email :</label>
                    <input type="email" class="form-control" value="{{$meeting -> email}}" name="email" placeholder="enter p-member email here" id="email" required>
                </div>
                <div class="form-group">
                    <label for="date">Date :</label>
                    <input type="date" class="form-control" value="{{$meeting -> date}}" name="date" id="date" required>
                </div>
                <div class="form-group">
                    <label for="abc">Start Time :</label>
                    <input type="startTime" class="form-control" value="{{$meeting -> startTime}}" name="startTime" id="startTime" required>
                </div>
                <div class="form-group">
                    <label for="endTime">End Time :</label>
                    <input type="time" class="form-control" value="{{$meeting -> endTime}}" name="endTime" id="endTime" required>
                </div>
                <div class="form-group">
                    <label for="venue">Venue :</label>
                    <input type="textarea" class="form-control" value="{{$meeting -> venue}}" name="description" placeholder="enter venue here" id="venue" required>
                </div>
                <div class="form-group">
                    <label for="invitees">Invitees :</label>
                    <input type="text" class="form-control" value="{{$meeting -> invitees}}" name="invitees" placeholder="enter invitees here" id="invitees" required>
                </div>
                <div class="form-group">
                    <label for="status">Status :</label>
                    <select class="form-control" value="{{$meeting -> status}}" name="status" id="status" required>
                        <option>Sheduled</option>
                        <option>Postponed</option>
                        <option>Re-sheduled</option>
                        <option>Finished</option>
                    </select>                
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-md">Update</button>
                    
                </div>

            </div>            
        </div>                            
    </div>
</form>

@endsection
