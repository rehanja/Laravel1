@extends('layouts.mcreate')

@section('content')


<div class="content">
    <div class="title m-b-md">
        <div class="col-md-12">               
        </div>
    </div>
</div><br>

<br><br><br><br><br>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card" style="background-image: url(img/mcform.jpg);width:650px;margin-left:110px;height:900px;opacity: 0.9;filter: alpha(opacity=90)">
    
                
            <div class="card-header" style="color:black;text-align:center;font-size:40px;font-weight:bold;width:620px;height:860px;">Update Meeting</div>               
                <div class="card-body">  
            
                    <form method="post" action="{{route('meetingSave',['id'=>$meeting->id])}}">

                    {{csrf_field()}}

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
                                </div>
                            </div>
                        @endif

                    <b>
                        <div class="form-group">
                            <label for="title">Member name :</label>
                            <input type="text" class="form-control" value="{{$meeting -> name}}" name="name" placeholder="enter p-member name here" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Member Email :</label>
                            <input type="email" class="form-control" value="{{$meeting -> email}}" name="email" placeholder="enter p-member email here" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date :</label>
                            <input type="date" class="form-control" value="{{$meeting -> date}}" name="date" id="date" required>
                        </div>
                        <div class="form-group">
                            <label for="abc">Start Time :</label>
                            <input type="startTime" class="form-control" value="{{$meeting -> startTime}}" name="startTime" id="startTime" required>
                        </div>
                        <div class="form-group">
                            <label for="endTime">End Time :</label>
                            <input type="time" class="form-control" value="{{$meeting -> endTime}}" name="endTime" id="endTime" required>
                        </div>
                        <div class="form-group">
                            <label for="venue">Venue :</label>
                            <input type="textarea" class="form-control" value="{{$meeting -> venue}}" name="venue" placeholder="enter venue here" id="venue" required>
                        </div>
                        <div class="form-group">
                            <label for="invitees">Invitees :</label>
                            <input type="text" class="form-control" value="{{$meeting -> invitees}}" name="invitees" placeholder="enter invitees here" id="invitees" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status :</label>
                            <select class="form-control" value="{{$meeting -> status}}" name="status" id="status" required>
                                <option>Created</option>
                                <option>Email Sent</option>
                                <option>Sheduled</option>
                                <option>Postponed</option>
                                <option>Re-sheduled</option>
                                <option>Finished</option>
                            </select>                
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-md">Update</button>
                            
                        </div>                          
                    </div>
                </form>

@endsection
