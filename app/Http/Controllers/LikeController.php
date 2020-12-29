<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index(Request $request){
        $likes=Like::all()->where('user_id','=',Auth::user()->id)->where('post_id','=',$request->post_id)->first();
        if($likes == null){
            $like= new Like;
            $like->user_id=Auth::user()->id;
            $like->post_id=$request->post_id;
            $like->like=$request->islike;
            $like->save();
        }
        else{
            $likes->like=$request->islike;
            $likes->save();
        }
        return[
            'like'=>$request->islike,
            'post_id'=>$request->post_id,
        ];
    }

    public function likereload(Request $request){
        return view('reload');
    }
}
