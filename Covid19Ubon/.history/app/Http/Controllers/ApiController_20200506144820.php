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
   
    $res = $client->get('https://covid19.th-stat.com/api/open/today');
    $json= json_decode($res->getBody());
    
    return view('home',compact('json'));
 }
}
