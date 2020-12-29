<?php

namespace App\Http\Controllers;
use App\Models\Friends;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function index(Request $request){
        
        $friend =new Friends;
        $friend->user_id_1 = Auth::user()->id;
        $friend->user_id_2 = $request->friendid;
        $friends=Friends::all()->where('user_id_1','=',$friend->user_id_1)->where('user_id_2','=',$friend->user_id_2)->first();
        if($friends == null){
            $friend->save();
        }
        return[
            'friend_id'=>$request->friendid
        ];
    }
    public function showfriends($id){
        $user =User::find($id);
        
       return  view('friendshow')->withUser($user);
    } 
    public function remove(Request $request){
        $user_id_1 = Auth::user()->id;
        $user_id_2 = $request->friendid;
        $friends=Friends::all()->where('user_id_1','=',$user_id_1)->where('user_id_2','=',$user_id_2)->first();
        $friends->delete();
        $user_id_1 = $request->friendid;
        $user_id_2 = Auth::user()->id;
        $friends=Friends::all()->where('user_id_1','=',$user_id_1)->where('user_id_2','=',$user_id_2)->first();
        $friends->delete();
        return[
            'friend_id'=>$request->friendid
        ];
    }
    public function request(Request $request){
        $user_id_1 = $request->userid;
        $user_id_2 = Auth::user()->id;
        $friends = Friends::all()->where('user_id_1','=',$user_id_1)->where('user_id_2','=',$user_id_2)->first();
        if($request->isrequest == true){
            $friends->approved=true;
            $friends->save();
            $friend =new Friends;
            $friend->user_id_1 = $user_id_2;
            $friend->user_id_2 = $user_id_1;
            $friend->approved=true;
            $friends=Friends::all()->where('user_id_1','=',$friend->user_id_1)->where('user_id_2','=',$friend->user_id_2)->first();
            if($friends == null){
                $friend->save();
            }
            return[
                'userid'=>$request->userid,
                'true'=>true,
            ];
        }
        $friends->delete();
        return[
            'userid'=>$request->userid,
            'true'=>false,
        ];    
    }
}   

