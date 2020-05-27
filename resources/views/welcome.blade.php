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
        <div class="flex-center  d-flex justify-content position-ref full-height">

            <div class="content">
            <form method="post" action="{{route('getData')}}">
                @csrf
            <div class="input-group mb-3">
                            <div class="col">
            <label for="from" >from</label>
            <input type="text" name="from" id="from" value="CAI" class="form-control">
            </div>
    <div class="col">
       <label for="to">to</label>
       <input type="text" name="to" id="to" value="JFK" class="form-control">
    </div>

    <div class="col">
          <label for="inputDate">departing</label>        
       <input data-provide="datepicker" name="departing"  id="departing" class="form-control datepicker">
    </div>
      
    <div class="col">
          <label for="inputTravellers">Travellers</label>
          
       <select  name="traveller" id="traveller" class="form-control">
            <option value="1">1 Travellers</option>
        </select>
    </div>
  
    <div class="col">
          <label for="inputType">type</label>
          
       <select  name="class" id="type" class="form-control">
            <option value="Economy">Economy</option>
        </select>
    </div>
    <div class="col">
         <button id="search" class=" form-control btn btn-success" style="margin-top:30px;">search</button>
        </div>
  </div>
        </form>
  </div>

  <script>

      $('#departing').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '7d'});
        
  </script>
                 
      
    </body>
</html>
