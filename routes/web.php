<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\postController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FriendController;

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


Route::group(['middleware'=>"web"],function(){

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register',function(){
    return view('register');
})->name("reg_g");
Route::post('/reg',[UserController::class,'signup'])->name("reg_p"); 

Route::get('/login',function(){
    return view('login');
})->name("log_g");
Route::post('/log',[UserController::class,'login'])->name("log_p"); 

Route::get('/home',[UserController::class,'homepage'])->name("home");

Route::get('/profile',[UserController::class,'profileview'])->name("pv");

Route::get('/profile/profileedit',[UserController::class,'profileedit'])->name("pe");
Route::post('/profile/pedit',[UserController::class,'userupdate'])->name("edit_p");

Route::get('/profile/proffesionedit',[UserController::class,'profshow'])->name("ps");
Route::post('/profile/prodit',[UserController::class,'profupdate'])->name("edit_pro");

Route::get('/profile/profileprivacy',[UserController::class,'profileprivacy'])->name("pp");
Route::post('/profile/pprivacy',[UserController::class,'updatepassword'])->name("ppr");

Route::get('/profile/profileactivity',[UserController::class,'profileactivity'])->name("pa");
Route::post('/logout',[UserController::class,'logout'])->name("logout");

Route::get('/profile/update_Dp',[UserController::class,'st'])->name("udp");
Route::post('/update_Dp',[UserController::class,'store'])->name("update_dp");

Route::get('/search',[SearchController::class,'getresults'])->name("search");

Route::post('/delete',[UserController::class,'del'])->name("delete");

Route::get('/post',[postController::class,'index'])->name("indpost");
Route::post('/postupload',[postController::class,'store'])->name("postupload");
Route::get('/post/{id}',[postController::class,'show'])->name("showpost");
Route::get('/post/edit/{id}',[postController::class,'edit'])->name("editpost");
Route::post('/post/editt/{id}',[postController::class,'update'])->name("epost");
Route::post('/post/del/{id}',[postController::class,'destroyy'])->name("depost");

Route::post('/like',[LikeController::class,'index'])->name("likee");

Route::post('/comment',[commentController::class,'index'])->name("comment");

Route::post('/search',[SearchController::class,'search'])->name('search');
Route::get('/users/{id}',[UserController::class,'showuser'])->name("showuser");

Route::post('/friend',[FriendController::class,'index'])->name('friend');
Route::get('/friend/{id}',[FriendController::class,'showfriends'])->name("friendshow");
Route::post('/friend/remove',[FriendController::class,'remove'])->name('removefriend');

Route::post('/request',[FriendController::class,'request'])->name('request');

Route::get('/api/like',[LikeController::class,'likereload'])->name("pvee");
});