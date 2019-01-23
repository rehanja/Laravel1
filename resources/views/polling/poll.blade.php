@extends('layouts.app')
<link href="{{ asset('css/search.css') }}" rel="stylesheet">

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
            <button type="button" onclick="location.href='{{ url('event') }}'" class="btn btn-primary">Vote Events</button>    
        </div>
    </div>
</div>
<br><br>



    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;

            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }       
            }
        }
    </script>

<!--Search bar-->
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for event id.." title="Type in a name" >



    <center><div>
        <table id="myTable" class="table"  style="width:60%;">
            <tr class="header">
                <th>Event Name </th>
                <th>No.of Votes </th>
                <th>Voting Rate</th>
            </tr>

            @foreach($event as $data)
            <tr>
                <td>{{ $data->eventName }}</td>
                <td>&nbsp;&nbsp;{{ $data->vote }}</td>
                <td>&nbsp;&nbsp;{{ number_format($data->vote/$sum*100, 1) }}%</td>
            </tr>
            @endforeach
        </table>
    </div>
<script>
    @foreach($arr as $data)
    {{$data[0]}}
    @endforeach
</script>
 <br><br>




<h1>Voting Rates for the Events</h1>

<div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        
        function drawChart() {
            var data = google.visualization.arrayToDataTable({!! json_encode($arr) !!});

            var options = {'width':750, 'height':600};

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
        
    </script> 
@endsection 