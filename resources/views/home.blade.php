@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in...!<br><br>

                   <a href="http://localhost:8000/event">event</a><br>
                   <a href="http://localhost:8000/meeting">meeting</a><br>

                   <a href="http://localhost:8000/createUser">create user</a><br>

                   <a href="http://localhost:8000/assign">assign</a><br>

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
        </div>
    </div>
</div>
@endsection
