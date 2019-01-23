@extends('layouts.app')

@section('content')

<!--Begin of update form-->
    <form method="post" action="{{route('event.save',['id'=>$event->id])}}">
    {{csrf_field()}}
        <div class = "container">
            <div class="form-group">
                @if ($errors->any())
                    <div class="alert alert-danger">
<!--to show error messages-->
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                            @endif
                                <div class="groove">
                                    <h2>Update Event</h2><hr>
                                        <div>
                                            <label for="usr">Event Name:</label>
                                            <input type="text" class="form-control" value="{{$event -> eventName}}" name="eventName" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Reason:</label>
                                            <input type="text" class="form-control" value="{{$event -> reason}}" name="reason" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Region:</label>
                                            <input type="text" class="form-control" value="{{$event -> region}}" name="region" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Budget:</label>
                                            <input type="text" class="form-control" value="{{$event -> budget}}" name="budget" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Start date:</label>
                                            <input type="text" class="form-control" value="{{$event -> startDate}}" name="startDate" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Start time:</label>
                                            <input type="text" class="form-control" value="{{$event -> startTime}}" name="startTime" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">End time:</label>
                                            <input type="text" class="form-control" value="{{$event -> endTime}}" name="endTime" placeholder="Enter here" id="usr">
                                        </div>
<!--Resumission button-->                                        
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-md" >Update</button>
                                        </div>
                                </div>            
            </div>                            
        </div>
    </form>

    @endsection

