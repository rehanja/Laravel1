@extends('layouts.app')

@section('content')

<div class="col-md-12">
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
        @role('p_member')
     <div class="col-md-11"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create an event</button></div>
     @endrole
     </div>

 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
                                
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                
                  <h4 class="modal-title">Create a event</h4>
               
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
    <table class="table table-dark">
        <th>Event Name</th>
        <th>Reason</th>
        <th>Region</th>
        <th>Budget</th>
        <th>Start date</th>
        <th>Start time</th>
        <th>End time</th>
        @role('or_pm|supervising_officer')
        <th>Delete button </th>
        <th>Update button </th>
        @endrole
       
    @foreach($event as $eventData)
        <tr>
            <td>{{$eventData->eventName}}</td>
            <td>{{$eventData->reason}}</td>
            <td>{{$eventData->region}}</td>
            <td>{{$eventData->budget}}</td>
            <td>{{$eventData->startDate}}</td>
            <td>{{$eventData->startTime}}</td>
            <td>{{$eventData->endTime}}</td>
            @role('or_pm|supervising_officer')
            <td><a href="{{route('event.delete',['id' => $eventData->id]) }}" class="btn btn-danger">Delete</a></td>
            <td><a href="{{route('event.update',['id' => $eventData->id]) }}" class="btn btn-warning">Update</a></td>
            @endrole
           
        </tr>
    @endforeach



                                           
    </table>
                
                   

  <!--  <input type="hidden" id="token" value="{{}}">


    user 1
    <select id="dropDown1" name="role">
        <option value="volvo">Volvo</option>
        <option value="a">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>

     
    user 2
    <select id="dropDown1" name="role">
        <option value="volvo">Volvo</option>
        <option value="a">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>
    
    


<script type="text/javascript">
$(document).ready(function(){
    $( "#dropDown1" ).change(function() {

        var role = $("#dropDown1").val();

        $.ajax({
            type: 'POST',
            url: '/assign',
            data: {
                "_token": $('#token').val(),
                "role": role,
                "user_id": role
            },

            success: function (data) {
                console.log(data);
            },
            error: function (reject) {
                console.log(reject);
            }
        });

    });
});

    </script>
-->

    


@endsection