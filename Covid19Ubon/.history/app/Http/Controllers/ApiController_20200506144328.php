<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
class ApiController extends Controller
{
    
 function get_api(){
    $client = new Client();
   
    // $res = $client->get('https://covid19.th-stat.com/api/open/today');
    // $request = GuzzleClient::request('GET', 'https://covid19.th-stat.com/api/open/today');
   $res = $client->get('https://covid19.th-stat.com/api/open/timeline');
    $json= json_decode($res->getBody());
    print_r($json);
    dd($json);
    // foreach ($json as $key ) {
    //     // $arr[3] will be updated with each value from $arr...
    //     echo $key;
    // }
    // // dd($json);
//     foreach ($json as $item) {
//         echo $item;
//    }
    // echo $json->Confirmed;
    // print_r($json);
    // dd($json);
    // $obj = json_decode($json);
    //  var_dump($obj);
    //  var_dump($json);
    // return view('home',compact('json'));
 }
}
