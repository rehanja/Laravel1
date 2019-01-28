@extends('layouts.app')


@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/assign.jpg);width:100%;height:700px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                        <div class="container">
                                <div class="row justify-content-center">

                                    <div class="col-md-8">
                                        <div class="card" style="background-image: url(img/assignnew.jpg);width:500px;height:350px;opacity: 0.7;filter: alpha(opacity=70)">

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
</div>


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

