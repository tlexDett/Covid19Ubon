<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    
 function get_api(){
    $response = Http::get('https://covid19.th-stat.com/api/open/today');
    console.log($response);
 }
}
