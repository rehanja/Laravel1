@extends('layouts.app')

@section('content')
 <div class="container">
  <table class="table table-striped">
    <th>User ID</th>
    <th>Name With Initials</th>
    <th>name</th>
    <th>NIC</th>
    <th>Address</th>
    <th>Contact Number</th>
    <th>Email</th>
    <th>Member</th>
    <th>Action</th>
    <th>Update</th>
    <th>Delete</th>

    @foreach($data as $details)
      <tr>
        <td>{{$details->id}}</td>
        <td>{{$details->nameWithInitials}}</td>
        <td>{{$details->name}}</td>
        <td>{{$details->nic}}</td>
        <td>{{$details->address}}</td>
        <td>{{$details->contactNumber}}</td>
        <td>{{$details->email}}</td>

        <td>
        @if($details->isActive)
        <button class="btn btn-success">Active Member</button>
        @else
        <button class="btn btn-basic">Temporary Member</button>
        @endif
        </td>

        <td>
        @if(!$details->isActive)
            <a href="#myModal1" class="btn btn-primary" data-toggle="modal">Issue Membership</a>
        @else
            <a href="#myModal2" class="btn btn-info" data-toggle="modal" >Remove Membership</a>
        @endif
        </td>

        <td>
            <a href="#myModal3" class="btn btn-warning" data-toggle="modal">Update</a>
        </td>

        <td>
            <a href="#myModal4" class="btn btn-danger" data-toggle="modal">Delete</a>
        </td>
      </tr>


      <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <!--issue membership confirmation pop-up-->

      <div id="myModal1" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box" style="color: #fff;
                            position: absolute;
                            margin: 0 auto;
                            left: 0;
                            right: 0;
                            top: -70px;
                            width: 95px;
                            height: 95px;
                            border-radius: 50%;
                            z-index: 9;
                            background: #82ce34;
                            padding: 15px;
                            text-align: center;
                            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                                <i class="material-icons" style="font-size: 58px;
                                position: relative;
                                top: 3px;">&#xE876;</i>
                        </div>
                        <h4 class="modal-title" style="margin: 30px 70px -10px;">Are you sure?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <a href="/markAsCompleted/{{$details->id}}" class="btn btn-primary">OK</a>
                    </div>
                </div>
            </div>
          </div>

      <!--remove membership confirmation pop-up-->

      <div id="myModal2" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content" >
                    <div class="modal-header">
                        <div class="icon-box" style="color: #fff;
                            position: absolute;
                            margin: 0 auto;
                            left: 0;
                            right: 0;
                            top: -70px;
                            width: 95px;
                            height: 95px;
                            border-radius: 50%;
                            z-index: 9;
                            background: red;
                            padding: 15px;
                            text-align: center;
                            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);">
                                <i class="material-icons" style="font-size: 58px;
                                position: relative;
                                top: 3px;">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title" style="margin: 30px 70px -10px;">Are you sure?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <a href="/markAsNotCompleted/{{$details->id}}" class="btn btn-primary">OK</a>
                    </div>
                </div>
            </div>
          </div>

      <!--update confirmation pop-up-->

      <div id="myModal3" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box" style="width: 80px;
                            height: 80px;
                            margin: 0 auto;
                            border-radius: 50%;
                            z-index: 9;
                            text-align: center;
                            border: 3px solid green;">
                                <i class="material-icons" style="color: green;
                                font-size: 46px;
                                display: inline-block;
                                margin-top: 13px;">&#xE876;</i>
                        </div>
                        <h4 class="modal-title">Are you sure?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to update these records? </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <a href="/updateMember/{{$details->id}}" class="btn btn-warning" >Update</a>
                    </div>
                </div>
            </div>
          </div>

      <!--delete confirmation pop-up-->

      <div id="myModal4" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box" style="width: 80px;
                        height: 80px;
                        margin: 0 auto;
                        border-radius: 50%;
                        z-index: 9;
                        text-align: center;
                        border: 3px solid red;">
                            <i class="material-icons" style="color: red;
                            font-size: 46px;
                            display: inline-block;
                            margin-top: 13px;">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                    <a href="/deleteMember/{{$details->id}}" class="btn btn-danger" >Delete</a>
                </div>
            </div>
        </div>
      </div>

    @endforeach
  </table>
 </div>

@endsection


