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

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
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
 <?php 
 if($data){
 ?>    
 
@for($i = 0 ; $i< count($data); $i++)
<tr>

@foreach($data[$i]['flights'] as $item)
<tr>
    <th scope="row">{{$i}}</th>



      <td>{{date("m-d-Y h:i a", strtotime($item[0]['DepartureDateTime']))}}</td>
      <td>{{date("m-d-Y h:i a", strtotime($item[0]['ArrivalDateTime']))}}</td>
      <td>{{$item[0]['FlightNumber']}}</td>
      <td>{{floor($item[0]['ElapsedTime']/60).':' .$item[0]['ElapsedTime']%60}}</td>
      <td>{{$item[0]['DepartureAirport']}}</td>
      <td>{{$item[0]['ArrivalAirport']}}</td>
      <td>{{$item[0]['OperatingAirline']}}</td>
      <td>{{$item[0]['OperatingAirlineName']}}</td>
      <td>{{$item[0]['DepartureAirportName']}}</td>
      <td>{{$item[0]['ArrivalAirportName']}}</td>
      <td>{{floor($item[1]['FlightLayoverTime']/60).':' .$item[1]['FlightLayoverTime']%60}}</td>
    </tr>  
    <tr>
    <th scope="row"></th>



      <td>{{date("m-d-Y h:i a", strtotime($item[1]['DepartureDateTime']))}}</td>
      <td>{{date("m-d-Y h:i a", strtotime($item[1]['ArrivalDateTime']))}}</td>
      <td>{{$item[1]['FlightNumber']}}</td>
      <td>{{floor($item[1]['ElapsedTime']/60).':' .$item[1]['ElapsedTime']%60}}</td>
      <td>{{$item[1]['DepartureAirport']}}</td>
      <td>{{$item[1]['ArrivalAirport']}}</td>
      <td>{{$item[1]['OperatingAirline']}}</td>
      <td>{{$item[1]['OperatingAirlineName']}}</td>
      <td>{{$item[1]['DepartureAirportName']}}</td>
      <td>{{$item[1]['ArrivalAirportName']}}</td>
    </tr>

</tr>
@endforeach 
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
