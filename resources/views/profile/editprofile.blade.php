@extends('layouts.app')

@section('content')

<!--Begin of update form-->
    <form method="post" action="{{route('userUpdate',['id'=>$user->id])}}">

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
                                    <h2>Profile Settings</h2><hr>
                                        <div>
                                            <label for="usr">Name With Initials:</label>
                                            <input type="text" class="form-control" value="{{$user -> nameWithInitials}}" name="nameWithInitials" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Name:</label>
                                            <input type="text" class="form-control" value="{{$user -> name}}" name="name" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">NIC Number:</label>
                                            <input type="text" class="form-control" value="{{$user -> nic}}" name="nic" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Address:</label>
                                            <input type="text" class="form-control" value="{{$user -> address}}" name="address" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Contact Number:</label>
                                            <input type="text" class="form-control" value="{{$user -> contactNumber}}" name="contactNumber" placeholder="Enter here" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">Email Address:</label>
                                            <input type="text" class="form-control" value="{{$user -> email}}" name="email" placeholder="Enter here" id="usr">
                                        </div>
                                       
<!--Resumission button-->                                        
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-md" >Update</button>
                                        </div>
                                </div>            
            </div>                            
        </div>
    </form>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('change/password')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('passwordold') ? ' has-error' : '' }}">
                            <label for="password" class="col-mdd-4 control-label">Old Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="passwordold" required>

                                @if ($errors->has('passwordold'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('passwordold') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-panel">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajaxs/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/alertifyjs/1.9.0/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/default.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/semantic.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/bootstrap.min.css"/>

@if (session('success'))
<script type="text/javascript">
$ (document).ready(function(){
    alertify.success('{{session('success')}}');
});
</script>
@endif

@if (session('error'))
<script type="text/javascript">
$ (document).ready(function(){
    alertify.error('{{session('error')}}');
});
</script>
@endif
    @endsection

