<?php

namespace App\Http\Controllers;


use Illuminate\Http\Response;




class ProfileController extends Controller
{
    //

    public function index($id)
    {
    $name = "Donal Trump";
    $age = "75";

    $data = [
        'id' => $id,
        'name' => $name,
        'age' => $age,
    ];

    $cookieName = 'access_token';
    $cookieValue = '123-XYZ';
    $cookieMinutes = 1;
    $cookiePath = '/';
    $cookieSecure = false;
    $cookieDomain = $_SERVER['SERVER_NAME'];
    $cookieHttpOnly = true;
    $response = response()->json($data,200);
    $response->withCookie(cookie($cookieName, $cookieValue, $cookieMinutes, $cookiePath, $cookieDomain, $cookieSecure, $cookieHttpOnly));
    return $response;

    




        
    }
}



