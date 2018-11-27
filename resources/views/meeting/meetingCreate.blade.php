@extends('layouts.app')

@section('content')

<form method="post" action="{{ Route('meetingStore') }}">

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
                            <a href="http://127.0.0.1:8000/meeting">View</a>
                        </strong>
                        </div>
                    </div>
                @endif



            <div class="abc">
                
                <h2>Create Meeting</h2><br>



                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="email" class="form-control" name="title" placeholder="enter p-member email here" id="title">

                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" name="date" id="date">
                </div>
                <div class="form-group">
                    <label for="startTime">Start Time:</label>
                    <input type="time" class="form-control" name="startTime" id="startTime">
                </div>
                <div class="form-group">
                    <label for="endTime">End Time:</label>
                    <input type="time" class="form-control" name="endTime" id="endTime">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description" placeholder="enter description here ex:name,place,etc" id="description">
                </div>
                <div class="form-group">
                    <label for="invitees">Invitees:</label>
                    <input type="text" class="form-control" name="invitees" placeholder="enter invitees here" id="invitees">
                </div>
                <div class="form-group">
                    <label for="abc">Status:</label>
                    <select class="form-control" name="status" id="status">
                        <option>Sheduled</option>
                        <option>Resheduled</option>
                        <option>Postponed</option>
                    </select>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-md">Create</button>
                </div>


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

            </div>
        </div>
    </div>
</form>

@endsection

