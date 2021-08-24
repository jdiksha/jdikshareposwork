<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class UsersContr extends Controller
{
    //
    function index()
        {
            $data= Http::get("https://reqres.in/api/users");
            return view('users',['collection'=>$data['data']]);
        }
    
}
