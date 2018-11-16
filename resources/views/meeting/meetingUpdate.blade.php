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
                            <a href="http://127.0.0.1:8000/meeting">View</a>
                        </strong>
                        </div>
                    </div>
                @endif



            <div class="groove">
                <h2>Update Meeting</h2><br>


                <div>
                    <label for="title">Title:</label>
                    <input type="email" class="form-control" value="{{$meeting -> title}}" name="title" placeholder="enter p-member email here" id="title">
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" value="{{$meeting -> date}}" name="date" id="date">
                </div>
                <div class="form-group">
                    <label for="abc">Start Time:</label>
                    <input type="startTime" class="form-control" value="{{$meeting -> startTime}}" name="startTime" id="startTime">
                </div>
                <div class="form-group">
                    <label for="endTime">End Time:</label>
                    <input type="time" class="form-control" value="{{$meeting -> endTime}}" name="endTime" id="endTime">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="textarea" class="form-control" value="{{$meeting -> description}}" name="description" placeholder="enter description here ex:name,place,etc" id="description">
                </div>
                <div class="form-group">
                    <label for="invitees">Invitees:</label>
                    <input type="text" class="form-control" value="{{$meeting -> invitees}}" name="invitees" placeholder="enter invitees here" id="invitees">
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
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