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

    <center><div>
        <table class="table" style="width:50%">
            <tr>
                <th><center>Event No </center></th>
                <th>Event Name </th>
                <th>No.of Votes </th>
                <th>Voting Rate</th>
            </tr>

            @foreach($event as $data)
            <tr>
                <td><center>{{ $data->id }}</center></td>
                <td>{{ $data->eventName }}</td>
                <td>&nbsp;&nbsp;{{ $data->vote }}</td>
                <td>&nbsp;&nbsp;{{ $data->vote/$sum * 100 }}%</td>
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

        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        
        function drawChart() {
            var data = google.visualization.arrayToDataTable({!! json_encode($arr) !!});

            // Optional; add a title and set the width and height of the chart
            var options = {'width':750, 'height':600};

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script> 
@endsection 