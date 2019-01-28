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
<center>
<br><br><br><br><br><br>
<div class="col-md-8">
    <div class="card" style="background-image: url(img/loginnew.jpg);width:650px;height:900px;opacity: 0.5;filter: alpha(opacity=70)">
    
        <div class="card-header" style="color:black;text-align:center;font-size:40px;font-weight:bold;width:620px;height:860px;">Create Your Meeting Here...</div>               
            <div class="card-body">  
                
                <form method="post" action="/create">

                {{csrf_field()}}
  
                <div class="form-group col-sm-11">
                    <label for="title">Member Name :</label>
                    <input type="text" class="form-control" name="name" placeholder="enter p-member name here" id="name" required>

                </div>
                <div class="form-group col-sm-11">
                    <label for="email" >Member Email :</label>
                    <input type="email" class="form-control" name="email" placeholder="enter p-member email here" id="email" required>

                </div>
                <div class="form-group col-sm-11">
                    <label for="date" >Date :</label>
                    <input type="date" class="form-control" name="date" id="date" required>
                </div>
                <div class="form-group col-sm-11">
                    <label for="startTime">Start Time :</label>
                    <input type="time" class="form-control" name="startTime" id="startTime" required>
                </div>
                <div class="form-group col-sm-11">
                    <label for="endTime">End Time :</label>
                    <input type="time" class="form-control" name="endTime" id="endTime" required>
                </div>
                <div class="form-group col-sm-11">
                    <label for="venue" >Venue :</label>
                    <input type="text" class="form-control" name="venue" placeholder="enter venue here" id="venue" required>
                </div>
                <div class="form-group col-sm-11">
                    <label for="invitees">Invitees :</label>
                    <input type="text" class="form-control" name="invitees" placeholder="enter invitees here" id="invitees" required>
                </div>
                <div class="form-group col-sm-11">

                    <label for="status">Status :</label>
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
        </form>
    </div>
</div>
</div>
</div>

@endsection

