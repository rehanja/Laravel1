@extends('layouts.app')

@section('content')
<div class="container">
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








@endsection
