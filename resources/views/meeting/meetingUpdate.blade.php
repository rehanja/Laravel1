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
                        </strong>
                        </div>
                    </div>
                @endif



            <div class="groove">
                <h2>Update Meeting</h2><br>


                <div>
                    <label for="abc">Title:</label>
                    <input type="text" class="form-control" value="{{$meeting -> title}}" name="title" placeholder="Enter here" id="title">
                </div>
                <div class="form-group">
                    <label for="abc">Date:</label>
                    <input type="date" class="form-control" value="{{$meeting -> date}}" name="date" id="date">
                </div>
                <div class="form-group">
                    <label for="abc">Start Time:</label>
                    <input type="time" class="form-control" value="{{$meeting -> startTime}}" name="startTime" id="startTime">
                </div>
                <div class="form-group">
                    <label for="abc">End Time:</label>
                    <input type="time" class="form-control" value="{{$meeting -> endTime}}" name="endTime" id="endTime">
                </div>
                <div class="form-group">
                    <label for="abc">Description:</label>
                    <input type="text" class="form-control" value="{{$meeting -> description}}" name="description" placeholder="Enter here" id="description">
                </div>
                <div class="form-group">
                    <label for="abc">Invitees:</label>
                    <input type="text" class="form-control" value="{{$meeting -> invitees}}" name="invitees" placeholder="Enter here" id="invitees">
                </div>
                <div class="form-group">
                    <label for="abc">Status:</label>
					<select class="form-control" value="{{$meeting -> status}}" name="status" id="status">
                        <option>Sheduled</option>
                        <option>Resheduled</option>
						<option>Postponed</option>
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