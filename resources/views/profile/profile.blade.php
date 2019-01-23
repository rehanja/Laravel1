@extends('layouts.app')


<head>
<style>


.profile-img{
    text-align: center;
    margin-left:-18%;
}
.profile-img img{
    width: 70%;
    height: 40%;
    border-radius:10%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
</head>

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container emp-profile">
            <form action="/photoUpload" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="/uploads/profilePic/{{Auth::user()->profilePic}}">
                            <div class="file btn btn-lg btn-primary">
                                Choose Photo
                                <input type="file" name="profilePic">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Upload Photo">

                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{Auth::user()->name}}
                                    </h5>
                                    <h6>
                                    <p> @role('or_fol')
                                                orfol
                                                @endrole
                                                @role('or_pm')
                                                orpm
                                                @endrole
                                                @role('p_member')
                                                pmember
                                                @endrole
                                                @role('or_pm|supervising_officer')
                                                supervising officer
                                                @endrole</p>
                                    </h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <a href="profile/editprofile" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit Profile</a>
                    </div>
                </div>
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->id}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name with initials</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->nameWithInitials}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>NIC No</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->nic}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->contactNumber}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->address}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Role</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> @role('or_fol')
                                                orfol
                                                @endrole
                                                @role('or_pm')
                                                orpm
                                                @endrole
                                                @role('p_member')
                                                pmember
                                                @endrole
                                                @role('or_pm|supervising_officer')
                                                supervising officer
                                                @endrole</p>
                                            </div>
                                        </div>
                            </div>
            </form>           
        </div>
@endsection
