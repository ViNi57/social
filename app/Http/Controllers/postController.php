<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use Auth;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add_post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post= new post;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->user_id = Auth::user()->id;
        if($request->hasFile('post')){
            $file_name=$request->post->getClientOriginalName();
            $request->post->storeAs('posts_uploaded',$file_name,'public');
            $post->image=$file_name;
        }
        $post->save();
        $posts=post::all()->where('user_id','=',Auth::user()->id)->sortByDesc('id');
        return view('profile',['user'=>Auth::user()],['posts'=>$posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        $user =User::find($id);
        return view('postshow')->withpost($post)->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        if(Auth::user()->id != $post->user_id){
            dd("boi");   
            abort(404);
        }
        if($post == null){
            dd("boih"); 
            abort(404);
        }
        return view('editpost')->withpost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = post::find($id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->update();
        $posts=post::all()->where('user_id','=',Auth::user()->id)->sortByDesc('id');
        return view('profile',['user'=>Auth::user()],['posts'=>$posts]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyy($id)
    {
        $post=post::find($id);
        if(Auth::user()->id != $post->user_id){   
            abort(404);
        }
        if($post == null){  
            abort(404);
        }
        if($post->image!=null){
            Storage::delete($post->image);
        }
        $post->delete();
        $posts=post::all()->where('user_id','=',Auth::user()->id)->sortByDesc('id');
        return view('profile',['user'=>Auth::user()],['posts'=>$posts]);
    }

}
