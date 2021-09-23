<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{
    public function index(){
        return view('api_nasa');
    }

    public function consumirApi(){
        
        $apiKey = '1Xg3M8Ec92fsxxf4Nd3sBZrbDRY6KDiTiruFCGOe';
        $response = HTTP::get('https://api.nasa.gov/planetary/apod?api_key='.$apiKey)->json();

        return $response;
    }


}
