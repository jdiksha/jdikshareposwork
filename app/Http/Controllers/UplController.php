<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UplController extends Controller
{
    //
    function index(Request $req)
    {
        return $req->file('file')->store('img');
    }
}
