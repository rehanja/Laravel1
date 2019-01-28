@extends('layouts.mcreate')
<link href="{{ asset('css/meetingform.css') }}" rel="stylesheet">

@section('content')


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



                <div class="content">
                    <div class="title m-b-md">
                        <div class="col-md-12">    
                                   
                        </div>
                    </div>
                </div><br>

        
    <form method="post" action="/create">

            {{csrf_field()}}
        <center>
        <div class = "abc">
            
            <h2 style="color:black;">Create Your Meeting Here...</h2><br> 
               
                
                <div class="form-group col-sm-9">
                    <label for="title" style="color:white;margin-left:-396px;">Member Name :</label>
                    <input type="text" class="form-control" name="name" placeholder="enter p-member name here" id="name" required>

                </div>
                <div class="form-group col-sm-9">
                    <label for="email" style="color:white;margin-left:-400px;">Member Email :</label>
                    <input type="email" class="form-control" name="email" placeholder="enter p-member email here" id="email" required>

                </div>
                <div class="form-group col-sm-9">
                    <label for="date" style="color:white;margin-left:-473px;">Date :</label>
                    <input type="date" class="form-control" name="date" id="date" required>
                </div>
                <div class="form-group col-sm-9">
                    <label for="startTime" style="color:white;margin-left:-431px;">Start Time :</label>
                    <input type="time" class="form-control" name="startTime" id="startTime" required>
                </div>
                <div class="form-group col-sm-9">
                    <label for="endTime" style="color:white;margin-left:-437px;">End Time :</label>
                    <input type="time" class="form-control" name="endTime" id="endTime" required>
                </div>
                <div class="form-group col-sm-9">
                    <label for="venue" style="color:white;margin-left:-457px;">Venue :</label>
                    <input type="text" class="form-control" name="venue" placeholder="enter venue here" id="venue" required>
                </div>
                <div class="form-group col-sm-9">
                    <label for="invitees" style="color:white;margin-left:-448px;">Invitees :</label>
                    <input type="text" class="form-control" name="invitees" placeholder="enter invitees here" id="invitees" required>
                </div>
                <div class="form-group col-sm-9">

                    <label for="status" style="color:white;margin-left:-460px;">Status :</label>
                    <select class="form-control" name="status" id="status" required>
                        <option>Created</option>
                        <option>Email Sent</option>
                        <option>Sheduled</option>
                        <option>Postponed</option>
                        <option>Re-sheduled</option>
                        <option>Finished</option>

                    </select>
                </div>


<br>
                <div class="create">
                    <button type="submit" class="btn btn-primary btn-md">Create</button>
                </div>
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

               
        </center>
    </form>


@endsection

