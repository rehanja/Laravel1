@extends('layouts.app')

@section('content')
you log in as 
    @role('p_member')
     pmember
    @endrole
    @role('or_fol')
     orfol
    @endrole
    @role('or_pm')
     orpm
    @endrole
    @role('or_pm|supervising_officer')
    supervising officer
    @endrole


<div class="content">
    <div class="title m-b-md">

        <div class="col-md-12">
            
            <a class="btn btn-info" href="{{ route('vote') }}"><b> Vote for Events </b></a>
            
        </div>
    </div>
</div>

@endsection