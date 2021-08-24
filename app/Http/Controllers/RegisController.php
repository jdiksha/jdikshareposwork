<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisController extends Controller
{
    //
  function getDa()
        {
          return view("registration");
        }
    
    function getData(Request $req)
    {
        
        $user_obj= new User;

        $user_obj->name=$req->name;
        $user_obj->email=$req->email;
        $user_obj->password=$req->password;
        $user_obj->age=$req->age;
        $user_obj->gender=$req->gender;
        $user_obj->gender=$req->gender;
        $user_obj->userno=$req->phone;
        $user_obj->save();
        return redirect('list');
    }
    function show()
    {
        $data= User::all();
        return view('userslist',['userlist'=>$data]);
    }
}
