<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('home', function () {
  return view('Welcome');
});


Route::get("add-user",[RegisController::class,'getDa']);
Route::view("logins","registration");

Route::post("store-user",[RegisController::class,'getData']);
Route::view("logins","registration");

Route::get('list',[RegisController::class,'show']);











//Route::get('/', function () {
  //return view('laravel8');
 //});
 
 //Route::view("add","addmem");
 //Route::post("add",[MemController::class,'addData']);
 





//Route::post("uploads",[UplController::class,'index']);
//Route::view("uploads","upload");
















//Route::post("sess",[UserAuth::class,'userLogin']);
//Route::view("login","sesslogin");
//Route::view("profile","profile");
//Route::get('/logout', function () {
  //if(session()->has('username'))
  //{
 //   session()->pull('username',null);
 // }
 //   return redirect('login');
//});

//Route::get("/users",[UsersContr::class,'index']);

//Route::put("user1",[UserContr1::class,'getRequest']);
//Route::view("log","users1");











//Route::get('/posts',[PostController::class,'getAllPost']);


























//Route::view("users","user")->middleware('protectedPage');
//Route::view("homi","home");
//Route::view("noacc","noaccess");

//Route::group(['middleware'=>['protectedPage']],function(){
  //  Route::view('users',"user");
//});








//Route::get("users",[AnyController::class,'viewLoad']);

