<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
class ApiController extends Controller
{
    
 function get_api(){
    $client = new Client();
    $response = $client->get('https://covid19.th-stat.com/api/open/today');
    echo $response;
 }
}
