@extends('layouts.app')
@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/assign.jpg);width:1380px;height:700px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                        <div class="container">
                                <div class="row justify-content-center">

                                    <form method="post" action="/assign/role">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="usr">Mermber Id:</label>
                                            <input type="number" class="form-control" name="memberId" placeholder="Enter here" id="usr">
                                        </div>
                                    
                                    
                                      {{-- <input type="hidden" id="token" value="{{}}"> --}}
                                    
                                    
                                        Choose user type
                                        <select id="dropDown1" name="roleId">
                                            @foreach ($assign as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                    
                                        </select>
                                    
                                         <input type="submit" value="Submit">
                                    </div>
                                    </form>
                                    
                                    
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

