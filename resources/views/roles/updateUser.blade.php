@extends('layouts.app')
<style>
h3{
    text-align: center;
}
</style>    

@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(http://127.0.0.1:8000/img/updateuser.jpg);width:100%;height:1000px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
                <div class="col-md-8">
                                <div class="row justify-content-center">

                                    
                                        <div class="card" style="background-image: url(http://127.0.0.1:8000/img/updateusernew.jpg);width:100%;height:750px;opacity: 0.8;filter: alpha(opacity=80);margin-top:5%;padding-top:10px;font-weight:bold;font-size:18px">


                                            <form method="post" action="/updateUser">
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
                                                            
                                                                <h3>Update User</h3><hr>
                                                            
                                            
                                                            <input type="hidden" class="form-control" value="{{$data -> id}}" name="id" placeholder="" id="usr">
                                            
                                                            <div class="form-group">
                                                                <label for="usr">Name With Initials:</label>
                                                                <input type="text" class="form-control" value="{{$data -> nameWithInitials}}" name="nameWithInitials" placeholder="Enter here" id="usr">
                                                            </div>
                                            
                                                            <div class="form-group">
                                                                <label for="usr">Name:</label>
                                                                <input type="text" class="form-control" value="{{$data -> name}}" name="name" placeholder="Enter here" id="usr">
                                                            </div>
                                            
                                                            <div class="form-group">
                                                                <label for="usr">NIC:</label>
                                                                <input type="text" class="form-control" value="{{$data -> nic}}" name="nic" placeholder="Enter here" id="usr">
                                                            </div>
                                            
                                                            <div class="form-group">
                                                                <label for="usr">Address:</label>
                                                                <input type="text" class="form-control" value="{{$data -> address}}" name="address" placeholder="Enter here" id="usr">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="usr">Polling Division:</label>
                                                                <input type="text" class="form-control" value="{{$data -> pollingDivision}}" name="pollingDivision" placeholder="Enter here" id="usr">
                                                            </div>
                                            
                                                            <div class="form-group">
                                                                <label for="usr">Contact Number:</label>
                                                                <input type="text" class="form-control" value="{{$data -> contactNumber}}" name="contactNumber" placeholder="Enter here" id="usr">
                                                            </div>
                                            
                                            <!--Resumission button-->
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary btn-md" >Update</button>
                                            
                                            
                                                            &nbsp; &nbsp;
                                            
                                            
                                                                <button type="submit" class="btn btn-primary btn-md" >Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                        </div>
                                    </div>
                                </div>
                        
            </div>
        </div>
    </div>
</section>








</section>


@endsection

@section('content')



@endsection
