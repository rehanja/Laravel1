@extends('layouts.app')

@section('content')

<form method="post" action="/create">

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



            <div class="abc">
                
                <h2>Create Meeting</h2><br>


                <div class="form-group">
                    <label for="title">Member Name :</label>
                    <input type="text" class="form-control" name="name" placeholder="enter p-member name here" id="name" required>

                </div>
                <div class="form-group">
                    <label for="email">Member Email :</label>
                    <input type="email" class="form-control" name="email" placeholder="enter p-member email here" id="email" required>

                </div>
                <div class="form-group">
                    <label for="date">Date :</label>
                    <input type="date" class="form-control" name="date" id="date" required>
                </div>
                <div class="form-group">
                    <label for="startTime">Start Time :</label>
                    <input type="time" class="form-control" name="startTime" id="startTime" required>
                </div>
                <div class="form-group">
                    <label for="endTime">End Time :</label>
                    <input type="time" class="form-control" name="endTime" id="endTime" required>
                </div>
                <div class="form-group">
                    <label for="venue">Venue :</label>
                    <input type="text" class="form-control" name="venue" placeholder="enter venue here" id="venue" required>
                </div>
                <div class="form-group">
                    <label for="invitees">Invitees :</label>
                    <input type="text" class="form-control" name="invitees" placeholder="enter invitees here" id="invitees" required>
                </div>
                <div class="form-group">
                    <label for="abc">Status :</label>
                    <select class="form-control" name="status" id="status" required>
                        <option>Sheduled</option>
                        <option>Postponed</option>
                        <option>Re-sheduled</option>
                        <option>Finished</option>

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

