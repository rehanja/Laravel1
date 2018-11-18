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
                        </strong>
                        </div>
                    </div>
                @endif



            <div class="groove">
                <h2>Create Meeting</h2><br>


                <div>
                    <label for="abc">Title:</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter here" id="title">
                </div>
                <div class="form-group">
                    <label for="abc">Date:</label>
                    <input type="date" class="form-control" name="date" id="date">
                </div>
                <div class="form-group">
                    <label for="abc">Start Time:</label>
                    <input type="time" class="form-control" name="startTime" id="startTime">
                </div>
                <div class="form-group">
                    <label for="abc">End Time:</label>
                    <input type="time" class="form-control" name="endTime" id="endTime">
                </div>
                <div class="form-group">
                    <label for="abc">Description:</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter here" id="description">
                </div>
                <div class="form-group">
                    <label for="abc">Invitees:</label>
                    <input type="text" class="form-control" name="invitees" placeholder="Enter here" id="invitees">
                </div>
                <div class="form-group">
                    <label for="abc">Status:</label>
                    <input type="text" class="form-control" name="status" placeholder="Enter here" id="status">
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
