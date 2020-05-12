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

    $request = $client->get('https://covid19.th-stat.com/api/open/today');
    // $request = GuzzleClient::request('GET', 'https://covid19.th-stat.com/api/open/today');
   
    $json = (string) $request->getBody();
    $obj = json_decode($json);
     var_dump($obj);
     
    // return view('home',compact('api'));
 }
}
