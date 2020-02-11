<?php

namespace App\Http\Controllers;

use App\Airport;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //


    public function search_airport(Request $request)
    {
        try {
            $location = $request->get('location');
            $airports = Airport::where('countryName', 'LIKE', '%' . $location . '%')->get();
            $field = $request->get('field');
            return view('Elements.airports-dropdown')->with(compact('airports'))->with(compact('field'));
//            return json_encode($airports);
        } catch (\Exception $exception) {
            return json_encode($exception);
        }
    }

    public function search_flight(Request $request)
    {
        print_r($request->all());
//        return;
        $url = "/US/USD/en-US/SFO-sky/JFK-sky/2020-02-12?inboundpartialdate=2020-02-15";
        $country = $request->get('loc_from_code');
        $airport_from = $request->get('airport_from_code') . '-sky';
        $airport_to = $request->get('airport_to_code') . '-sky';
//        $date = $request->get('departure_date');
        $date = date('Y-m-d');
        $currency = "USD";
        $lang_code = 'en-US';
        $url = $country . "/" . $currency . "/" . $lang_code . "/" . $airport_from . "/" . $airport_to . "/" . $date . "?inboundpartialdate=" . $date;
        // we're going to search for flights here & return to user if flights are found...
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/browsequotes/v1.0/" . $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
                "x-rapidapi-key: 7e489d54afmshcd9876ed494cf32p12f9a8jsnc51523e62c49"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }
}

