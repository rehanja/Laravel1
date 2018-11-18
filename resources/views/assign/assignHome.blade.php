@extends('layouts.app')

@section('content')

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


  <input type="hidden" id="token" value="{{}}">


    user 1
    <select id="dropDown1" name="role">
        <option value="volvo">Volvo</option>
        <option value="a">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>

     
    user 2
    <select id="dropDown1" name="role">
        <option value="volvo">Volvo</option>
        <option value="a">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>
    
    


<script type="text/javascript">
$(document).ready(function(){
    $( "#dropDown1" ).change(function() {

        var role = $("#dropDown1").val();

        $.ajax({
            type: 'POST',
            url: '/assign',
            data: {
                "_token": $('#token').val(),
                "role": role,
                "user_id": role
            },

            success: function (data) {
                console.log(data);
            },
            error: function (reject) {
                console.log(reject);
            }
        });

    });
});

    </script>

