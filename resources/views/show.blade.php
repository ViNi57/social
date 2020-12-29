@extends('layouts.layout')
@section('head')
<style>
        .main {
            margin-bottom: 220px;
        }
        
        .st {
            flex-grow: 1;
            margin: 0 auto 30px;
            max-width: 935px;
            width: 100%;
        }
        
        .header {
            margin: 20px;
            margin-top: 100px;
            height: 82px;
            max-width: 100px;
            display: flex;
            flex-direction: row;
        }
        
        .dagv,
        .profile_pic,
        .img {
            height: 150px;
            width: 150px;
            border-radius: 50%;
            max-width: 200px;
            margin-right: 100px;
            display: flex;
            flex-direction: row;
        }
        
        .profile_info {
            display: flex;
            flex-direction: row;
            height: 30px;
        }
        
        .usrn {
            font-size: 20px;
            margin-right: 30px;
            margin-top: 0px;
            max-width: 100px;
        }
        
        .flist {
            display: flex;
            flex-direction: row;
            margin-top: 30px;
            right: 220px;
            position: relative;
            list-style-type: none;
        }
        
        .li1 {
            margin: 20px;
        }

        .pr_part {
            margin-top: 100px;
        }
        
        .selector {
            align-items: center;
            border-top: 1px solid #dbdbdb;
            display: flex;
            flex-direction: row;
            justify-content: center;
            text-align: center;
            margin-top: 190px;
            font-size: 25px;
            font-weight: 600;
            letter-spacing: 1px;
        }
        
        .sda {
            text-decoration: none;
        }
        
        .sdfasda {
            color: gray;
        }
        
        .image {
            height: 275px;
            width: 275px;
        }
        
        .posts_part {
            margin-left: 20px;
            margin-top: 20px;
        }
        
        
        .rows {
            flex-direction: row;
            display: flex;
        }
        .image{
            margin: 20px;
        }
  
        .hghguj{
            text-decoration:none;
            color:black;
            padding:10px;
        }
        .body{
            margin-top:20px;
        }
        .dropbtn {
            color: black;
            font-size: 16px;
            border: none;
            position:relative;
            left:280px;
            bottom:20px;
        }

        .dropdown-content {
            display: none;
            min-width: 160px;
            z-index: 1;
            position: absolute;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            position: relative;
            left:280px;
            bottom:20px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }
       
        .dropdown:hover .dropdown-content {display: block;}
        
        .active-like{
        text-decoration: underline;
        color: rgb(0, 65, 90);
        }
        .already_friend{
            visibility: hidden; 
            position: relative; 
        }
        .ayugduyagd{
            width:50px;
        }
        .badgee{
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 12px;
            font-weight: bold;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            border-radius: 10px;
            background-color:  rgb(0, 65, 90);
            position:relative;
            top:-20px;
            left:30px;
        }
        .badgeeee{;
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 12px;
            font-weight: bold;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            border-radius: 10px;
            background-color: rgb(0, 65, 90);
            position:relative;
            top:-20px;
            left:45px;
        }
        .footer{
            display:flex;
            flex:row;
            padding-right:10px;     
        }
        .profession{
            margin-top:30px;
            border-top:1px solid #dbdbdb;
            width:250px;
            padding:5px;
        }
        .a{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin:2px;
        }
    </style>
    <script>

    </script>
@endsection
@section('main')

<main class="main">
        <div class="st">
            <div class="header">
                <div class="dagv">
                    <div class="profile_pic">
                        <img class="img" src="{{ asset('/storage/avatars/'.$user->profile_dp) }}" onerror="this.onerror=null;this.src='/images/male-avatar.jpg'">
                    </div>
                    <div class="profile_info">
                        <p class="usrn">{{ $user->username }}</p>
                    <div class="settings">
                                @if(Auth::check())
                                    @php
                                        $i=Auth::user()->friends()->count();
                                        $c=1;
                                    @endphp
                                    @foreach(Auth::user()->friends as $user1)
                                        @if($user1->user2->id == $user->id)
                                            <a href="#" class="remove-friend" data-friendid="{{ $user->id }}" >
                                                <img class="ayugduyagd" src="/images/remove.png">
                                            </a>
                                            @break
                                        @elseif($i == $c)
                                        <a href="#" data-friendid="{{ $user->id }}" class="friend" >
                                            <img class="ayugduyagd"  src="/images/add.png">
                                        </a>
                                        @endif
                                        @php
                                            $c++;
                                        @endphp
                                
                                    @endforeach         
                                    @if($i==0)
                                    <a href="#" data-friendid="{{ $user->id }}" class="friend" >
                                        <img class="ayugduyagd"  src="/images/add.png">
                                    </a>
                                    @endif 
                                @endif 
                            
                        </div>
                    </div>
                    <div class="fol">
                        <ul class="flist">
                            <li class="li1"><span class="ffs"></span> {{ $user->posts->count() }} posts </li>
                            <li class="li1"><a style="text-decoration:none;color:black;"class="friendshow" href="{{ route('friendshow',$user->id) }}">{{ $user->friends()->count() }} friends</a></li>
                        </ul>
                    </div>
                </div>
                <div class="pr_part">
                    <div class="bio">
                        <div class="personal">
                            <div class="sdfs">
                                <p clss='sfaf'>
                                {{ $user->name }}
                                </p>
                                <span>
                                {{  $user->bio }}
                                </span>
                                <ul class ="profession"> 
                                    <li class="a">{{ $user->role}}</li>
                                    @if($user->placeofwork != null )
                                    @if( $user->role == "student")
                                    <li class="a"> studies at " {{ $user->placeofwork}} "</li>
                                    @else
                                    <li class="a">works at " {{ $user->placeofwork}} "</li>
                                    @endif
                                    @endif
                                    @if($user->Achievements != null )
                                    <li class="a">{{ $user->Achievements}}</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="selector">
                <a class="sda" href="#">
                    <span class="sdfasda">POSTS</span>
                </a>
            </div>
            <div class="posts_part">
                <article class="posts">
                    
                    <div class="row pt-4">
                    @foreach ($posts->all() as $post)
                        <div class="post_with_pad">   
                                <div class="posts_indu col-md-4 col-xs-6">
                                    <a href="{{ route('showpost',[$post->id]) }}">
                                    @if( $post->image != null )
                                    <img class="image" alt="{{ $post ->title }}" src="/storage/posts_uploaded/{{ $post->image }} ">
                                    </a>
                                    @endif
                                    @if( $post->image == null )
                                    <div class="body" style="height:300px;">
                                        {{ $post->body }}
                                    </div> 
                                    @endif
                                    <div class="foo">
                                        <footer class="footer" data-postid="{{ $post->id }}">
                                            @php
                                                $i=$user->like()->count();
                                                $c=1;
                                                $likecount=$post->like()->where('like','=',true)->count();
                                                $dislikecount=$post->like()->where('like','!=',true)->count();
                                            @endphp   
                                                @foreach( $user->like as $like )
                                                    @if( $like->post_id == $post->id)
                                                        @if($like->like)
                                                            <a class="hghguj like active-like" href="#">Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                                                            <a class="hghguj like" href="#">Dislike <span class="badgeeee">{{ $dislikecount }}</span></a>
                                                        @else
                                                            <a class="hghguj like" href="#" >Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                                                            <a class="hghguj like active-like" href="#">Dislike <span class="badgeeee">{{ $dislikecount }}</span></a>  
                                                        @endif
                                                        @break
                                                    @elseif($i==$c)
                                                    <a class="hghguj like" href="#" >Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                                                    <a class="hghguj like" href="#">Dislike <span class="badgeeee"><div class="ekilsid">{{ $dislikecount }}</div></span></a>
                                                    @endif
                                                    @php
                                                        $c++;
                                                    @endphp
                                                @endforeach
                                                @if($i==0)
                                                    <a class="hghguj like" href="#" >Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                                                    <a class="hghguj like" href="#">Dislike <span class="badgeeee"><div class="ekilsid">{{ $dislikecount }}</div></span></a>
                                                @endif
                                            <a class="hghguj" href="{{ route('showpost',[$post->id]) }}">Comment</a>
                                            {{-- <div class="dropdown">
                                                <button class="dropbtn">^</button>
                                                <div class="dropdown-content">
                                                    <a class="hghguj" href="{{ route('editpost',[$post->id]) }}">editpost</a>
                                                </div>
                                            </div> --}}
                                        </footer>
                                        {{-- <div class="body">
                                            {{
                                            $post->body
                                            }}
                                        </div> --}}
                                    </div> 
                        </div>
                    @endforeach
                    </div>
                </article>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            ( function($) {
            $(document).ready(function(){
                $('.friend').click(function(ee){
                    ee.preventDefault();
                    var friendid = ee.target.parentNode.dataset['friendid'];
                    var data={
                        friendid : friendid,
                    }
                    console.log(data);
                    axios.post('/friend',data).then(response => {
                        ee.currentTarget.innerHTML='<img class="ayugduyagd" src="/images/remove.png">';
                        ee.currentTarget.className="remove-friend";
                    })
                    })
                });
         })( jQuery ) ;	
        </script>
        <script>
            (function($) {
            $(document).ready(function(){
                $('.remove-friend').click(function(e){
                    e.preventDefault();
                    var friendid = e.target.parentNode.dataset['friendid'];
                    var data={
                        friendid : friendid,
                    }
                    axios.post('/friend/remove',data).then(response => {
                        e.currentTarget.className="friend";
                        e.currentTarget.innerHTML='<img class="ayugduyagd" src="/images/add.png">';                  
                    })
                    })
                });
         })( jQuery ) ;	
        </script>
    </main>
@endsection