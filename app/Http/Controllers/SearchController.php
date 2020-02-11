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
//        print_r($request->all());
//        return;
        $url = "/US/USD/en-US/SFO-sky/JFK-sky/2020-02-12?inboundpartialdate=2020-02-15";
        $country = $request->get('loc_from_code');
        $airport_from = $request->get('airport_from_code') . '-sky';
        $airport_to = $request->get('airport_to_code') . '-sky';
        $location_from = $request->get('location_from');
        $location_to = $request->get('location_to');
//        $date = $request->get('departure_date');
        $date = date('Y-m-d');
        $currency = "USD";
        $lang_code = 'en-US';
        $url = $country . "/" . $currency . "/" . $lang_code . "/" . $airport_from . "/" . $airport_to . "/" . $date . "?inboundpartialdate=" . $date;
        // we're going to search for flights here & return to user if flights are found...
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/browseroutes/v1.0/US/USD/en-US/SFO-sky/ORD-sky/2020-02-15",
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
            $flights = [];
            $response = json_decode($response, true);
            $carriers = ($response['Carriers']);
            $quotes = $response['Quotes'];
            foreach ($quotes as $quote) {
                // get the carrier offering this quote...
                $carriersQuotes = $quote['OutboundLeg']['CarrierIds'];
                $price = $quote['MinPrice'];
                $is_direct_flight = $quote['Direct'];
                $date_time = $quote['OutboundLeg']['DepartureDate'];
                $carrier_name = '';
                // get the carrier Id
                foreach ($carriers as $carrier) {
                    foreach ($carriersQuotes as $carrierQuoteId) {
                        if ($carrierQuoteId == $carrier['CarrierId']) {
                            // match, so let's get the carrier name
                            $carrier_name = $carrier['Name'];
                        }
                    }
                }
                $data = [
                    'price' => $price,
                    'is_direct_flight' => $is_direct_flight,
                    'date' => $date_time,
                    'carrier_name' => $carrier_name,
                    'currency' => $response['Currencies'][0]['Code']
                ];
                array_push($flights, $data);
            }
            return view('flights', compact('flights', 'location_from', 'location_to'));
//            return redirect('/flights')->with(compact('flights'));
        }
    }


//    public function search_flight(Request $request)
//    {
//        $curl = curl_init();
//
//        curl_setopt_array($curl, array(
//            CURLOPT_URL => "https://tripadvisor1.p.rapidapi.com/flights/create-session?currency=USD&ta=1&tc=11%252C5&c=0&d1=CNX&o1=DMK&dd1=2020-02-15",
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_FOLLOWLOCATION => true,
//            CURLOPT_ENCODING => "",
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 30,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => "GET",
//            CURLOPT_HTTPHEADER => array(
//                "x-rapidapi-host: tripadvisor1.p.rapidapi.com",
//                "x-rapidapi-key: 7e489d54afmshcd9876ed494cf32p12f9a8jsnc51523e62c49"
//            ),
//        ));
//
//        $response = curl_exec($curl);
//        $err = curl_error($curl);
//
//        curl_close($curl);
//
//        if ($err) {
//            echo "cURL Error #:" . $err;
//        } else {
//            $response = json_decode($response, true);
//            $session_id = ($response['search_params']['sid']);
//            // now do curl to get information...
//        }
//    }

    function get_headers_from_curl_response($response)
    {
        $headers = array();

        $header_text = substr($response, 0, strpos($response, "\r\n\r\n"));

        foreach (explode("\r\n", $header_text) as $i => $line)
            if ($i === 0)
                $headers['http_code'] = $line;
            else {
                list ($key, $value) = explode(': ', $line);

                $headers[$key] = $value;
            }

        return $headers;
    }
}

