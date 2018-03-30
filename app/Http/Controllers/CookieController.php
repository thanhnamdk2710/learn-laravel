<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request){
        $minutes = 1;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name', 'NamDeve', $minutes));
        return $response;
    }

    public function getCookie(Request $request){
        $value = $request->cookie('name');
        echo $value;
    }
}
