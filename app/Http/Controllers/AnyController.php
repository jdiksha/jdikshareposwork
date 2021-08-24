<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnyController extends Controller
{
    //
    function viewLoad()
    {
        $data=['diksha','aman','megh','maktub'];
        return view('conditions',['users'=>$data]);
    }
}
