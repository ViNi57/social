@extends('layouts.layout')
@section('head')
<style>        
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
            display: flex;
            flex-direction: row;
            justify-content: center;
            text-align: center;
            margin-top: 130px;
            font-size: 25px;
            font-weight: 600;
            letter-spacing: 1px;
            width:1010px;
            border-top: 1px solid #dbdbdb;
        }
        
        .sda {
            text-decoration: none;
        }
        
        .sdfasda {
            position: relative;
            left:-50px;
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
        .dropdown{
            position: relative;
            top:15px;
            left:15px;
        }
        .body{
            margin:auto;
            margin-left:20px;
            margin-right:20px;
        }
        .dropbtn {
            color: black;
            font-size: 16px;
            border: none;
            position:relative;
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
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }
       
        .dropdown:hover .dropdown-content {display: block;}
        
        .active-like{
        text-decoration: underline;
        color: rgb(0, 65, 90);
        }
        .friendshow{
            text-decoration: none;
            color: black;
        }
        .badgee{;
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
        .fr{
            position: relative;
            right:350px;
            top:120px;
            background-color:none; 
            border-radius: 100px;
            border: 2px solid#2644ee;
            padding: 5px;
        }
        .sfafafs{
            position: relative;
            right: 340px;
            top:130px;
            list-style: none;
        }
        .imgg{
            width:20px;
        }
        .collapse,.navbar-collapse{
            position: relative;
            left:430px;
            top:-122px;
        }
        .open > ul > li.hz {
		display: inline-flex !important;
	    }
	    .open > .dropdown-menu {
		display: table-caption;
        }
        .fol{
            margin-left:29px;
        }
        .sdfs{
            margin-top:20px;
            width:500px;
        }
        .pr_part{
            margin-bottom: 30px;
        }
        .posts_indu{
            margin-bottom:20px;
        }
        .footer{
            display: flex;
            flex:row;
            padding: 2px;
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
@endsection
@section('main')

<main class="main">
        <div class="st">
            <div class="header">
                <div class="dagv">
                    <div class="profile_pic">
                        <a class="sdsdsds" href="{{ route('udp') }}" >
                        <img class="img" src="{{ asset('/storage/avatars/'.$user->profile_dp) }}" onerror="this.onerror=null;this.src='/images/male-avatar.jpg'">
                        </a>
                    </div>
                    <div class="profile_info">
                        <p class="usrn">{{ $user->username }}</p>
                        <div class="settings">
                            <a href="{{ route('pe') }}">
                                <svg aria-label="settings" class="s" fill="#262626" height="70" viewBox="0 0 48 48" width="70">
                                <path d="M17.498,11.697c-0.453-0.453-0.704-1.055-0.704-1.697c0-0.642,0.251-1.244,0.704-1.697c0.069-0.071,0.15-0.141,0.257-0.22c0.127-0.097,0.181-0.262,0.137-0.417c-0.164-0.558-0.388-1.093-0.662-1.597c-0.075-0.141-0.231-0.22-0.391-0.199c-0.13,0.02-0.238,0.027-0.336,0.027c-1.325,0-2.401-1.076-2.401-2.4c0-0.099,0.008-0.207,0.027-0.336c0.021-0.158-0.059-0.316-0.199-0.391c-0.503-0.274-1.039-0.498-1.597-0.662c-0.154-0.044-0.32,0.01-0.416,0.137c-0.079,0.106-0.148,0.188-0.22,0.257C11.244,2.956,10.643,3.207,10,3.207c-0.642,0-1.244-0.25-1.697-0.704c-0.071-0.069-0.141-0.15-0.22-0.257C7.987,2.119,7.821,2.065,7.667,2.109C7.109,2.275,6.571,2.497,6.07,2.771C5.929,2.846,5.85,3.004,5.871,3.162c0.02,0.129,0.027,0.237,0.027,0.336c0,1.325-1.076,2.4-2.401,2.4c-0.098,0-0.206-0.007-0.335-0.027C3.001,5.851,2.845,5.929,2.77,6.07C2.496,6.572,2.274,7.109,2.108,7.667c-0.044,0.154,0.01,0.32,0.137,0.417c0.106,0.079,0.187,0.148,0.256,0.22c0.938,0.936,0.938,2.458,0,3.394c-0.069,0.072-0.15,0.141-0.256,0.221c-0.127,0.096-0.181,0.262-0.137,0.416c0.166,0.557,0.388,1.096,0.662,1.596c0.075,0.143,0.231,0.221,0.392,0.199c0.129-0.02,0.237-0.027,0.335-0.027c1.325,0,2.401,1.076,2.401,2.402c0,0.098-0.007,0.205-0.027,0.334C5.85,16.996,5.929,17.154,6.07,17.23c0.501,0.273,1.04,0.496,1.597,0.66c0.154,0.047,0.32-0.008,0.417-0.137c0.079-0.105,0.148-0.186,0.22-0.256c0.454-0.453,1.055-0.703,1.697-0.703c0.643,0,1.244,0.25,1.697,0.703c0.071,0.07,0.141,0.15,0.22,0.256c0.073,0.098,0.188,0.152,0.307,0.152c0.036,0,0.073-0.004,0.109-0.016c0.558-0.164,1.096-0.387,1.597-0.66c0.141-0.076,0.22-0.234,0.199-0.393c-0.02-0.129-0.027-0.236-0.027-0.334c0-1.326,1.076-2.402,2.401-2.402c0.098,0,0.206,0.008,0.336,0.027c0.159,0.021,0.315-0.057,0.391-0.199c0.274-0.5,0.496-1.039,0.662-1.596c0.044-0.154-0.01-0.32-0.137-0.416C17.648,11.838,17.567,11.77,17.498,11.697 M16.671,13.334c-0.059-0.002-0.114-0.002-0.168-0.002c-1.749,0-3.173,1.422-3.173,3.172c0,0.053,0.002,0.109,0.004,0.166c-0.312,0.158-0.64,0.295-0.976,0.406c-0.039-0.045-0.077-0.086-0.115-0.123c-0.601-0.6-1.396-0.93-2.243-0.93s-1.643,0.33-2.243,0.93c-0.039,0.037-0.077,0.078-0.116,0.123c-0.336-0.111-0.664-0.248-0.976-0.406c0.002-0.057,0.004-0.113,0.004-0.166c0-1.75-1.423-3.172-3.172-3.172c-0.054,0-0.11,0-0.168,0.002c-0.158-0.312-0.293-0.639-0.405-0.975c0.044-0.039,0.085-0.078,0.124-0.115c1.236-1.236,1.236-3.25,0-4.486C3.009,7.719,2.969,7.68,2.924,7.642c0.112-0.336,0.247-0.664,0.405-0.976C3.387,6.668,3.443,6.67,3.497,6.67c1.75,0,3.172-1.423,3.172-3.172c0-0.054-0.002-0.11-0.004-0.168c0.312-0.158,0.64-0.293,0.976-0.405C7.68,2.969,7.719,3.01,7.757,3.048c0.6,0.6,1.396,0.93,2.243,0.93s1.643-0.33,2.243-0.93c0.038-0.039,0.076-0.079,0.115-0.123c0.336,0.112,0.663,0.247,0.976,0.405c-0.002,0.058-0.004,0.114-0.004,0.168c0,1.749,1.424,3.172,3.173,3.172c0.054,0,0.109-0.002,0.168-0.004c0.158,0.312,0.293,0.64,0.405,0.976c-0.045,0.038-0.086,0.077-0.124,0.116c-0.6,0.6-0.93,1.396-0.93,2.242c0,0.847,0.33,1.645,0.93,2.244c0.038,0.037,0.079,0.076,0.124,0.115C16.964,12.695,16.829,13.021,16.671,13.334 M10,5.417c-2.528,0-4.584,2.056-4.584,4.583c0,2.529,2.056,4.584,4.584,4.584s4.584-2.055,4.584-4.584C14.584,7.472,12.528,5.417,10,5.417 M10,13.812c-2.102,0-3.812-1.709-3.812-3.812c0-2.102,1.71-3.812,3.812-3.812c2.102,0,3.812,1.71,3.812,3.812C13.812,12.104,12.102,13.812,10,13.812"></path>
                            </svg>
                            </a>
                        </div>
                    </div>
                    <div class="fol">
                        <ul class="flist">
                            <li class="li1"> {{ Auth::user()->posts->count() }} posts </li>
                        <li class="li1"><a class="friendshow" href="{{ route('friendshow',Auth::user()->id) }}">{{ Auth::user()->friends()->where('approved','=',true)->count() }} friends</a></li>
                            
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
                                    @if($user->placeofwork != "null" )
                                    @if( $user->role == "student")
                                    <li class="a"> studies at " {{ $user->placeofwork}} "</li>
                                    @else
                                    <li class="a">works at " {{ $user->placeofwork}} "</li>
                                    @endif
                                    @endif
                                    @if($user->Achievements != "null" )
                                    <li class="a">{{ $user->Achievements}}</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="collapse navbar-collapse" id="navbar0">
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img style="width: 30px;" src="/images/fr.png"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    @foreach(Auth::user()->friendss->where('approved','=',false) as $friend)
                      <li class="hz">
                        <img style="width: 30px; border-radius:50%;" src="{{ asset('/storage/avatars/'.$friend->user1->profile_dp) }}" onerror="this.onerror=null;this.src='/images/male-avatar.jpg'">
                        <span style="margin: auto;">{{ $friend->user1->username }}</span>
                        <div style="display:inline-block">
                            <div data-userid="{{ $friend->user1->id }}">
                                <a href="#" class="btn-sm request">Accept</a>
                                <a href="#" class="btn-sm request">Cancel</a>
                            </div>
                        </div>
                      </li>
                    @endforeach
                    @if(Auth::user()->friendss->where('approved','=',false)->count()==0)
                      0 friend requests :(
                    @endif
                    </ul>
                  </li>
                </ul>
              </div>
            <div class="selector">
                <a  style="position:relative;top:1px;left:-300px;font-size:small;text-decoration:none;color:black;flex:row;display:flex;"href="{{ route('indpost')}}" class="addpostsss"><img style="width:30px;height:30px;" src="/images/add_posts_img.png"> ADD POST</a>
                <a class="sda" href="#">
                    <span class="sdfasda"> POSTS  </span>
                </a>
            </div>
            <div class="posts_part">
                <article class="posts">
                    <div class="row pt-4">
                    @foreach ($posts->all() as $post )
                        <div class="post_with_pad">
                                <div class="posts_indu col-md-4 col-xs-6">
                                    <a href="{{ route('showpost',[$post->id]) }}">
                                    @if( $post->image != null )
                                    <img class="image" alt="{{ $post ->title }}" src="/storage/posts_uploaded/{{ $post->image }} ">
                                    @endif
                                    </a>
                                    @if( $post->image == null )
                                    <div class="body" style="height:300px;">
                                        {{ $post->body }}
                                    </div> 
                                    @endif
                                    
                                    <div class="foo" id="asddfsdf">
                                        <footer class="footer" data-postid="{{ $post->id }}">
                                            @php
                                                $i=$user->like()->count();
                                                $c=1;
                                                $likecount=$post->like()->where('like','=',true)->count();
                                                $dislikecount=$post->like()->where('like','!=',true)->count();
                                            @endphp   
                                                @foreach( $user->like as $like )
                                                    @if( $like->post_id == $post->id)
                                                        @if($like-> like)
                                                            <a class="hghguj like active-like" href="#">Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                                                            <a class="hghguj like" href="#">Dislike <span class="badgeeee"><div class="ekilsid">{{ $dislikecount }}</div></span></a>
                                                        @else
                                                            <a class="hghguj like" href="#" >Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                                                            <a class="hghguj like active-like" href="#">Dislike <span class="badgeeee"><div class="ekilsid">{{ $dislikecount }}</div></span></a>  
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
                                            <div class="dropdown">
                                                <button class="dropbtn">^</button>
                                                <div class="dropdown-content">
                                                    <a class="hghguj" href="{{ route('editpost',[$post->id]) }}">editpost</a>
                                                </div>
                                            </div>
                                        </footer>
                                    </div> 
                                </div>    
                    @endforeach
                        </div>
                </article>
            </div>
        </div>

    </main>
    <script>
        (function($) {
        $(document).ready(function(){
            $('.request').click(function(e){
                e.preventDefault();
                console.log(e);
                var request = e.target.previousElementSibling == null;
                var userid = e.target.parentNode.dataset['userid'];
                var data={
                    userid : userid,
                    isrequest : request,
                }
                console.log(data);
                console.log()
                axios.post('/request',data).then(response => {
                    console.log('hi');
                    if(response.data['true']){
                        e.currentTarget.parentElement.innerHTML="<span class='success'>Hurray,you both are friend now</span>";
                    }    
                    else{
                        e.currentTarget.parentElement.innerHTML="<span class='danger'>You cancelled the friend request</span>"; 
                    }
                })
                })
            });
     })( jQuery ) ;	
    </script>
@endsection