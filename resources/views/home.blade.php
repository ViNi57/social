@extends('layouts.layout')
@section('head')
<style>
        .m {
            max-width: 586px;
            overflow: hidden;
            width: 100%;
            border: 1px solid #dbdbdb;
            margin: auto;
            margin-top: 100px;
            flex-direction: row;
            display: flex;
            margin-bottom:50px;
        }
        .image{
            max-width: 586px;
            width:100%;
        }
        .thumb{
            width:4%;
            border-radius: 50%;
            margin:10px;
        }
        .container{
            padding: 0px;
        }
        .footer{
            margin:10px;
            padding:10px;
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
        }
        .hghguj{
            text-decoration:none;
            color:black;
            padding:10px;
        }
        .body{
            margin:10px;
            margin-left:20px;
        }
        .usernameeeeee,
        .usernameeeeee:hover{
            text-decoration: none;
            color:black;
        }
        .fjsjfknsjdnj{
            padding: 0%;margin: 0%;
        }
    </style>
@endsection
@section('main')
                @foreach($posts->all() as $post)
                <main class ="m">
                    <div class="mmm">
                        <div class="container">
                            <div>
                    <img class="thumb" src="{{asset('/storage/avatars/'.$post->user->profile_dp) }}" onerror="this.onerror=null;this.src='/images/male-avatar.jpg'">
                    <a class="usernameeeeee" href="{{ route('showuser',$post->user->id) }}">{{$post->user->username}}</a> 
                @if( $post->image != null )   
                <div>
                    <a class="fjsjfknsjdnj" href="{{ route('showpost',[$post->id]) }}">
                  <img class="image" src="{{ asset('/storage/posts_uploaded/'.$post->image) }}">
                    </a>
                </div>
                <div class="foo">
                <footer class="footer" data-postid="{{ $post->id }}">
                    @php
                    $i=$post->like()->count();
                    $c=1;
                    $likecount=$post->like()->where('like','=',true)->count();
                    $dislikecount=$post->like()->where('like','!=',true)->count();
                    @endphp   
                    @foreach( $post->like as $like )
                        @if( $like->post_id == $post->id)
                            @if($like->like)
                                <a class="hghguj like active-like" href="#">Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                                <a class="hghguj like" href="#">Dislike <span class="badgee">{{ $dislikecount }}</span></a>
                            @else
                                <a class="hghguj like" href="#" >Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                                <a class="hghguj like active-like" href="#">Dislike <span class="badgee">{{ $dislikecount }}</span></a>  
                            @endif
                            @break
                        @elseif($i==$c)
                        <a class="hghguj like" href="#" >Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                        <a class="hghguj like" href="#">Dislike <span class="badgee">{{ $dislikecount }}</span></a>
                        @endif
                        @php
                            $c++;
                        @endphp
                    @endforeach
                    @if($i==0)
                        <a class="hghguj like" href="#" >Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                        <a class="hghguj like" href="#">Dislike <span class="badgee">{{ $dislikecount }}</span></a>
                    @endif
                    <a class="hghguj" href="{{ route('showpost',[$post->id]) }}">Comment</a>
                </footer>
               
                <div class="body">
                    <span style="font-weight:bolder;margin-right:10px;">
                    {{$post->user->username}}
                    </span>
                    {{
                      $post->body
                    }}
                </div>
                @endif
                @if( $post->image == null )
                <div class="body">
                    {{ $post->body }}
                </div>
                <div class="foo">
                    <footer class="footer" data-postid="{{ $post->id }}">
                        @php
                        $i=$post->like()->count();
                        $c=1;
                        $likecount=$post->like()->where('like','=',true)->count();
                        $dislikecount=$post->like()->where('like','!=',true)->count();
                        @endphp   
                        @foreach( $post->like as $like )
                            @if( $like->post_id == $post->id)
                                @if($like->like)
                                    <a class="hghguj like active-like" href="#">Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                                    <a class="hghguj like" href="#">Dislike <span class="badgee"><div class="ekilsid">{{ $dislikecount }}</div></span></a>
                                @else
                                    <a class="hghguj like" href="#" >Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                                    <a class="hghguj like active-like" href="#">Dislike <span class="badgee"><div class="ekilsid">{{ $dislikecount }}</div></span></a>  
                                @endif
                                @break
                            @elseif($i==$c)
                            <a class="hghguj like" href="#" >Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                            <a class="hghguj like" href="#">Dislike <span class="badgee"><div class="ekilsid">{{ $dislikecount }}</div></span></a>
                            @endif
                            @php
                                $c++;
                            @endphp
                        @endforeach
                        @if($i==0)
                            <a class="hghguj like" href="#" >Like <span class="badgee"><div class="ekil">{{ $likecount }}</div></span></a>
                            <a class="hghguj like" href="#">Dislike <span class="badgee"><div class="ekilsid">{{ $dislikecount }}</div></span></a>
                        @endif
                        <a class="hghguj" href="{{ route('showpost',[$post->id]) }}">Comment</a>
                    </footer>
                @endif
            </div>
        </div>
    </div>
    </div>
</main>
                @endforeach

@endsection


</main>