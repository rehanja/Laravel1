@extends('layouts.polling')
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


<br><br><br><br><br><br>



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


<p style="color:white;font-size:20px;margin-left:50px;">
<i class="fa fa-check-square-o" style="font-size:40px;color:#14F32A;"></i>
<i>Give your vote and get success of the Events...</i>
        <a href='{{ url('event') }}'><i style="font-size:17px;color:#14F32A;">Click Here.<i></a></p>


<!--Search bar-->
<div style="color:grey;">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for events . . ." title="Type in an event" >
</div>


    <center><div>
        <table id="myTable" class="table table-light"  style="width:40%;">
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