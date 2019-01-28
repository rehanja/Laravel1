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



<div class="mcrbtn">
    <div class="title m-b-md">
        <div class="col-md-12">    
            @role('or_pm|supervising_officer')
            <a class="btn btn-primary" href="{{ route('meetingCreate') }}"> Create a Meeting</a>    
            @endrole
        </div>
    </div>
</div><br>

    <div class="col-md-12">

    <!--for email sending & meeting deleting-->
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
                            @role('or_pm|supervising_officer')
                            <a onclick="return confirm('Are you sure to delete this meeting?')" href="{{route('meetingDelete',['id' => $data->id]) }}" class="btn btn-danger btn-sm">Delete</a>                        
                            <a onclick="return confirm('Are you sure to update this meeting details?')" href="{{route('meetingUpdate',['id' => $data->id]) }}" class="btn btn-warning btn-sm">Update</a>
                            @endrole
                            <form method="get" onclick="return confirm('Are you sure to send this E-mail?')" action="{{route('meetingViewMail',['email' => $data->email]) }}" onsubmit="return checkForm(this);">
                            <div class="send">
                                    @role('or_pm|supervising_officer')   
                            <input type="submit" class="btn btn-primary btn-sm" name="myButton" value="Send an Email">
                            @endrole
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
    <div class="abc" style="margin-top:800px;margin-left:600px">
        {{ $meeting->links() }}
    </div>
           
@endsection
   