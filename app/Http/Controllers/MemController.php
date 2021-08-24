<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MemController extends Controller
{
    //
    function addData(Request $req)
    {
        $post= new Post;
        $post->name=$req->name;
        $post->compname=$req->compname;
        $post->address=$req->address;
        return redirect('add');
    }
} 
