@extends('layouts.meeting')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
<link href="{{ asset('css/popup.css') }}" rel="stylesheet">

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

<!--for email sending & meeting deleting-->
        @if (session('message'))
            <div class="flash-message">
                <div class="alert alert-success">
                    <strong>
                        {{ session('message') }}
                    </strong>
                </div>
            </div>
        @endif
 
    


<div class="content">
    <div class="title m-b-md">
        <div class="col-md-12">    
            <a class="btn btn-primary" href="{{ route('meetingCreate') }}"> Create a Meeting</a>    
        </div>
    </div>
</div><br>

    <div class="col-md-12">
    
        @foreach($meeting as $data)
            
                <div class="column" >
                    <div class="card" >
                        <div class="card-body" >       
                        
                            <h5 class="card-title"><b> Meeting with : {{ $data->name }} <b></h5>
                            <h6 class="card-subtitle mb-2 ">Email : {{ $data->email }}</h6>
                            <h6 class="card-subtitle mb-2 ">Date : {{ $data->date }}</h6>
                            <h6 class="card-subtitle mb-2 ">Start time : {{ $data->startTime }}</h6>
                            <h6 class="card-subtitle mb-2 ">End time : {{ $data->endTime }}</h6>
                            <h6 class="card-subtitle mb-2 ">Venue : {{ $data->venue }}</h6>
                            <h6 class="card-subtitle mb-2 ">Invitees : {{ $data->invitees }}</h6>
                            <h6 class="card-subtitle mb-2 ">Status : {{ $data->status }}</h6><br>
                            <a onclick="return confirm('Are you sure to delete this meeting?')" href="{{route('meetingDelete',['id' => $data->id]) }}" class="btn btn-danger btn-sm">Delete</a>                        
                            <a onclick="return confirm('Are you sure to update this meeting details?')" href="{{route('meetingUpdate',['id' => $data->id]) }}" class="btn btn-warning btn-sm">Update</a>
                            <form method="get" onclick="return confirm('Are you sure to send this E-mail?')" action="{{route('meetingViewMail',['email' => $data->email]) }}" onsubmit="return checkForm(this);">
                            <div class="send">
                            <input type="submit" class="btn btn-primary btn-sm" name="myButton" value="Send an Email">
                            </form></div>
                            
                            <script type="text/javascript">

                                function checkForm(form) // Send button clicked
                                {
                                    form.myButton.disabled = true;
                                    form.myButton.value = "Sending...";
                                    return true;
                                }
                            </script>
                        </div>
                    </div>
                </div>
            

    @endforeach
    </div>  
           
@endsection
   