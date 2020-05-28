<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class FlightPlanController extends Controller
{
    //
    public function getData(Request $request){
        $response = Http::post('https://api.flyallover.com/api/search', [
            "adult"=>1,
            "child"=>0,
            "class"=>$request->class,
            "departure_date"=>$request->departing,
            "destination"=>$request->destination,
            "lap"=>0,
            "origin"=>$request->origin,
            "seat"=>0,
            "senior"=>0,
            "travellers"=>$request->traveller,
            "trip_type"=>"OneWay",
            "youth"=>0
    

           ]);
            $data =$response->json()['data']["Itineraries"];
            if($response->clientError())
            {
            return back()->withError(['message'=> 'something wrong']);
            
        }
            return view('flights',compact('data'));
    }
}


