<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ApiController extends Controller
{
    
    getApi(){
        $response = Http::get('https://covid19.th-stat.com/api/open/today');
        consloe.log($response);
    }
}
