@extends('layouts.app')
@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/assign.jpg);width:100%;height:250%;">


    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                        <div class="container">
                           
                            


                                    <div class="col-md-10">
                                        <div class="card" style="background-image: url(img/assignhome.png);width:150%;height:88%;opacity: 0.9;filter: alpha(opacity=90);padding:20px;margin-top:20%;margin-left:10px">

                                            <div class="container" style="text-align:center;font-size:20px;font-weight:bold">


<br><br>


                                    <form method="post" action="/assign/role">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="usr">Member Id:</label>
                                            <input type="number" class="form-control" name="memberId" placeholder="Enter here" id="usr">
                                        </div>
                                    
                                    
                                      
  {{-- <input type="hidden" id="token" value="{{}}"> --}}


    Choose user type
    <select id="dropDown1" name="roleId">
        @foreach ($assign as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach

    </select>
<br><br>
    <input type="submit" value="submit" style="background-color:aqua;width: 150px;height: 50px;">
</div>
</form>

<br><br>

<table class="table table-bordered">
<th>User ID</th>
<th>Name with Initials</th>
<th>NIC</th>
<th>Contact Number</th>
<th>Email</th>
<th>Role Type</th>

@foreach($d as $info)
<tr>
    <td> {{$info->id}}</td>
    <td> {{$info->nameWithInitials}}</td>
    <td> {{$info->nic}}</td>
    <td> {{$info->contactNumber}}</td>
    <td> {{$info->email}}</td>
    <td> {{$info->name}}</td>
</tr>
@endforeach

      
</table>    






</div>


                                   
                                </div>
                            </div>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection


@section('content')



@endsection

