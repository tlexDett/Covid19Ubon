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
   
    $res = $client->request('GET','https://covid19.th-stat.com/api/open/today');
    // $request = GuzzleClient::request('GET', 'https://covid19.th-stat.com/api/open/today');
   
    $json= json_decode($res->getBody());
    foreach ($json as $item) {
        echo($item->id);
   }
    // print_r($json);
    // dd($json);
    // $obj = json_decode($json);
    //  var_dump($obj);
    //  var_dump($json);
    // return view('home',compact('api'));
 }
}