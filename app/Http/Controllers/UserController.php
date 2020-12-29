<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\post;
use Hash;

class Usercontroller extends Controller
{
    public function signup(Request $request)
    {
        $email = $request['email'];
        $password = Hash::make($request['pass']);
        $phonenumber = $request['phonenumber'];
        $sex = $request['sex'];
        $username = $request['username'];
        $name = $request['namee'];

        $isExist = User::select("*")->where("email",$email)->exists();
        if($isExist){
            return redirect()->back()->with(['message' => 'Email already Exists,please use a different one', 'alert' => 'alert-email']);
        }
        else{
            $isExist1 = User::select("*")->where("username",$username)->exists();
            if($isExist1){
                return redirect()->back()->with(['message' => 'username already Exists,please use a different one', 'alert' => 'alert-username']);
            }
            else{
                $user = new User();

                $user ->email=$email;
                $user ->username=$username;
                $user ->sex=$sex;
                $user ->phonenumber=$phonenumber;
                $user ->password=$password;
                $user ->name=$name;

                $user -> save();
                return redirect('/login');
            }
        }

    }
    public function login(Request $request)
    {   
            $uname = $request['username'];
            $password = $request['pass'];
            if (Auth::attempt(array('username' => $uname, 'password' => $password))){
                $request->Session()->put('user',$uname);
                return redirect()->route('home');
            }
            else {        
                return redirect()->back()->with(['message' => 'Wrong credentials', 'alert' => 'alert-invalid']);;
        }
    } 
    public function userupdate(Request $request)
    {
        $phonenumber = $request['phonenumber'];
        $name = $request['name'];
        $bio = $request['bio'];


        $user = AUTH::user();
        
        $user ->phonenumber=$phonenumber;
        $user ->name=$name;
        $user ->bio=$bio;
        
        $user -> update();
        
        return redirect()->route('home');
    }
    public function profupdate(Request $request)
    {
        $ach = $request['Achievements'];
        $role = $request['role'];
        $pow = $request['pow'];
        $user = AUTH::user();
        $user ->role=$role;
        $user ->Achievements=$ach;
        $user ->placeofwork=$pow;
        
        $user -> update();
        
        return redirect()->route('home');
    }
    public function userupdatedp(Request $request)
    {
        $profile_dp=$request("dp");

        $user = AUTH::user();
        $user ->profile_dp =$profile_dp;
        $user -> update();

        return redirect()->route('home');
        
    }
    public function updatepassword(Request $request)
    {
        $user = AUTH::user();
        $username = $user->username;
        $new_pass = Hash::make($request['pass']);
        $password = $request['old_pass'];
        if (Auth::attempt(array('username' => $username, 'password' => $password))){
            $user ->password=$new_pass;
            $user -> update();
            return redirect()->route('home');
        }    
        else{
            return redirect()->back()->with(['message' => 'Wrong credentials', 'alert' => 'alert-invalid']);
        }
    }
    public function logout(Request $request) {
        $request->Session()->put('user','');
        return redirect()->route('log_g');
      }

    public function homepage(Request $request)
    {   
        $posts=post::all()->sortByDesc('id');
        return view('home',['posts'=>$posts]);
    }
    public function profileview(Request $request)
    {   
        $posts=post::all()->where('user_id','=',Auth::user()->id)->sortByDesc('id');
        return view('profile',['user'=>Auth::user()],['posts'=>$posts]);
    }
    public function profileedit(Request $request)
    {   
        return view('edit',['user'=>Auth::user()]);
    }
    public function profileprivacy(Request $request)
    {   
        return view('privacy');
    }
    public function profileactivity(Request $request)
    {   
        return view('activity');
    }
    public function profshow(Request $request)
    {   
        return view('profshow',['user'=>Auth::user()]);
    }
    public function st(Request $request)
    {   
        return view('update_dp');
    }
    public function store(Request $request)
    {   
        if($request->hasFile('avatar')){
            $file_name=$request->avatar->getClientOriginalName();
            $request->avatar->storeAs('avatars',$file_name,'public');
            $user = AUTH::user();
            $user ->profile_dp=$file_name;
            $user -> update();
            return redirect()->route('home');
        }
        
    }
    public function del(Request $request)
    {
        $user = AUTH::user();
        $user->delete();
    }
    public function showuser($id){
        $user =User::find($id);
         if($user->id == Auth::user()->id){
            $posts=post::all()->where('user_id','=',Auth::user()->id)->sortByDesc('id');
            return view('profile',['user'=>Auth::user()],['posts'=>$posts]);
         }
         else{
            $posts=post::all()->where('user_id','=',$user->id)->sortByDesc('id');
            return view('show',['user'=>$user],['posts'=>$posts]);
         } 
    }
}