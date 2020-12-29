<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{
    public function index(Request $request){
        $comment = new Comment;
        $comment->comment =$request->comment;
        $comment->user_id =Auth::user()->id;
        $comment->post_id =$request->post_id;
        $comment->save();

        return redirect()->back();
    }
}
