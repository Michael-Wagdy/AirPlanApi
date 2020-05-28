<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha256-rByPlHULObEjJ6XQxW/flG2r+22R5dKiAoef+aXWfik=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.css" integrity="sha256-MFTTStFZmJT7CqZBPyRVaJtI2P9ovNBbwmr0/KErfEc=" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }


            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

            <div class="content">
 <?php 
          
            if($data){
 ?>    
<h1 style='margin:5%;'> Flights </h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Departure Time</th>
      <th scope="col">Arrival Time</th>
      <th scope="col">Flight No. </th>
      <th scope="col">Elapsed Time</th>
      <th scope="col">Departure Airport</th>
      <th scope="col">Arrival Airport</th>
      <th scope="col">Operating Airline</th>
      <th scope="col">Operating AirlineName</th>
      <th scope="col">Departure AirportName</th>
      <th scope="col">Arrival AirportName</th>
      <th scope="col">FlightLayover Time</th>
    </tr>
  </thead>
  <tbody>


@for($i = 0 ; $i< count($data); $i++)
<tr>

@foreach($data[$i]['flights'] as $items)

@for($d=0; $d < count($items);$d++)


<tr>
      <td>{{date("m-d-Y h:i a", strtotime($items[$d]['DepartureDateTime']))}}</td>
      <td>{{date("m-d-Y h:i a", strtotime($items[$d]['ArrivalDateTime']))}}</td>
      <td>{{$items[$d]['FlightNumber']}}</td>
      <td>{{floor($items[$d]['ElapsedTime']/60).':' .$items[$d]['ElapsedTime']%60}}</td>
      <td>{{$items[$d] ['DepartureAirport']}}</td>
      <td>{{$items[$d]['ArrivalAirport']}}</td>
      <td>{{$items[$d]['OperatingAirline']}}</td>
      <td>{{$items[$d]['OperatingAirlineName']}}</td>
      <td>{{$items[$d]['DepartureAirportName']}}</td>
      <td>{{$items[$d]['ArrivalAirportName']}}</td>
      @if($d< count($items)-1)
      <td>{{floor($items[$d+1]['FlightLayoverTime']/60).' Hr : ' .$items[$d+1]['FlightLayoverTime']%60 ." min"}}</td>
              @else
            <td> - </td>
        @endif  
        </tr>  

@endfor 
@endforeach 
</tr>  

@endfor
<?php 
}
else{
  echo '<h1> no data avilable</h1>';
}
?>
</tbody>
</table>
      
</body>
</html>
