<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Hash;
use DB;

class Searchcontroller extends Controller{
    public function search(Request $request){
        $usrn=$request->search;
        $currentuser=AUTH::user();
        $user = User::where('username','LIKE','%'.$usrn.'%')->where('username','!=',$currentuser->username)->get();
        if(count($user) > 0)
            return view('usersearchlist')->withdetails($user);
        else
            return view('usersearchlist')->withmessage('No user found. Try searching again !');
}}
