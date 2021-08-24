<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContr1 extends Controller
{
    //
    function getRequest(Request $req)
        {
            return $req->input(); 
        }
    
}
