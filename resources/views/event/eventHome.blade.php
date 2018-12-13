@extends('layouts.app')

@section('content')
you log in as 
    @role('p_member')
     pmember
    @endrole
    @role('or_fol')
     orfol
    @endrole
    @role('or_pm')
     orpm
    @endrole
    @role('or_pm|supervising_officer')
    supervising officer
    @endrole

<div class="col-md-12">
        
    @role('or_pm|supervising_officer')
        <div class="col-md-11"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Create an Event</button></div>
    @endrole

    <br>
        <div class="col-md-11"><button type="button" onclick="location.href='{{ url('poll') }}'" class="btn btn-primary">View Vote Results</button></div>
 
</div>

 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
                                
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
               
                  <h4 class="modal-title">Create an event</h4>
                
                </div>
                    <form method="post" action="/eventSave">
                        {{csrf_field()}}
                                    
                        <div class="modal-body">
                            <div class="col-md-12 ">

                                @if ($errors->any())
                                <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                                </div>
                                @endif

                                <div class="form-group">
                                    <label for="usr">Event Name:</label>
                                    <input type="text" class="form-control" name="eventName" placeholder="Enter here" id="usr">
                                </div>

                                <div class="form-group">
                                    <label for="usr">Reason:</label>
                                    <input type="text" class="form-control" name="reason" placeholder="Enter here" id="usr">
                                 </div>

                                 <div class="form-group">
                                    <label for="usr">Region:</label>
                                    <input type="text" class="form-control" name="region" placeholder="Enter here" id="usr">
                                </div>
                                            
                                <div class="form-group">
                                    <label for="usr">Budget:</label>
                                    <input type="number" class="form-control" name="budget" placeholder="Enter here" id="usr">
                                </div>

                                <div class="form-group">
                                    <label for="usr">Start date:</label>
                                    <input type="date" class="form-control" name="startDate" placeholder="Enter here" id="usr">
                                </div>

                                <div class="form-group">
                                    <label for="usr">Start time:</label>
                                    <input type="time" class="form-control" name="startTime" placeholder="Enter here" id="usr">
                                </div>

                                <div class="form-group">
                                    <label for="usr">End time:</label>
                                    <input type="time" class="form-control" name="endTime" placeholder="Enter here" id="usr">
                                </div>

                                <div>
                                    <input type="submit" class="btn btn-primary" value="save">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                </div>
                                            
                            </div>
                                    
                        </div>
                        
                    </form>
                        <div class="modal-footer">
                       If you want you can update event later
                        </div>
            </div>
                                
        </div>
    </div>
                            
</div>

        
<a href="{{ route('register') }}"></a>

<div class="content">
    <div class="title m-b-md">

    </div>
</div>
    <div class="col-md-12">
   
       
    <p> * Noted : Give your votes for Event(s). After voted, You cannot change.</p>

    @foreach($event as $eventData)
    <div class="card" style="width:25%">
        <div class="card-body" >
            
                <h5 class="card-title">Event name : {{$eventData->eventName}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Reason : {{$eventData->reason}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Region : {{$eventData->region}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Budget : {{$eventData->budget}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Start date : {{$eventData->startDate}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Start time : {{$eventData->startTime}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">End time : {{$eventData->endTime}}</h6>
                <a href="{{route('event.delete',['id' => $eventData->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                <a href="{{route('event.update',['id' => $eventData->id]) }}" class="btn btn-warning btn-sm">Update</a>
                <p class="card-text">Event created by rehan</p>

            <div>
                <button type="button" onclick="location.href='{{ route('voteAdd',['eventid' => $eventData->id] ) }}'" class="btn btn-success btn-sm">Vote</button>
            </div>

        </div>
      </div>
      @endforeach



                                           

                
                   


    


@endsection