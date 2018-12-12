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
            <button type="button" onclick="location.href='{{ url('event') }}'" class="btn btn-primary">Vote for Events</button>    
        </div>
    </div>
</div>
<br><br>

    <div>
        <table class="table" style="width:50%">
            <tr>
                <th>Event Name </th>
                <th>Votes </th>
            </tr>

            @foreach($event as $data)
            <tr>
                <td>{{$data->eventName}}</td>
                <td>{{$data->vote}}</td>
            </tr>

            @endforeach
        </table>
    </div>

@endsection