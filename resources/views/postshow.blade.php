@extends('layouts.layout')
@section('head')
<style>
        .m {
            max-width: 935px;
            overflow: hidden;
            width: 100%;
            border: 1px solid #dbdbdb;
            margin: auto;
            margin-top: 100px;
            flex-direction: row;
            display: flex;
            margin-bottom: 20px;   
        }
        .image{
            width:79%;  
            margin-bottom:20px; 
        }
        .hghguj{
            text-decoration:none;
            color:black;
            padding:10px;
        }
        .body{
            padding: 20px 20px;
            margin-top:20px;
        }
        .coments{
            max-width: 935px;
            overflow: visible;
            width: 100%;
            margin: auto;
            margin-top: 20px;
            flex-direction: row;
            display: flex;
            margin-bottom: 100px;
            position: relative;
            left:-22px;
        }
        .sdffsdg{
            height: 37px;
            width: 465%;
            border-radius: 3px;
            border: 1px solid #dbdbdb;
            padding: 5px
        }
        .editp{
            flex: row;
            display: flex;
        }
        .sdffsdgb {
            margin-top: 10px;
            margin-left: 900%;
            background-color: #0095f6;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            padding: 5px 10px;
            color: white;
            font-size: 16px;
            border: 1px solid transparent;
            position:relative;
            top:-7px;
            right:60px;
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
            background-color: rgb(0, 65, 90);
        }
        .part{
            font-weight:bold;
            margin-left:20px;
            margin-top: 20px;
        }
        .creator{
            margin-left: 890px;
            font-size: 16px;
            font-style: oblique;
            position: relative;
            right:80px;
            top:-20px;
        }
        .t{
            margin:auto;
            margin-left:50px;
            flex:row;
            display: flex;
        }
        .comments{
            border-top:1px solid;
            border-color: #dbdbdb;
            width:900px;
        }
        .active-like{
        text-decoration: underline;
        color: rgb(0, 65, 90);
        }
        .back{
            position: relative;
            left:800px;
            top:30px;
            width:1%;
            height:1%;
        }
        .back:hover{
            cursor: pointer;
        }
    </style>
    <script>
        function goBack(){
            window.history.back();
        }
    </script>
@endsection
@section('main')
<main class="m">
    <div class="mmm">
    <div class="container">
        <div>
            <div class= "t">
                <h2>{{ $post->title }}</h2>
                {{-- <button onclick="goBack()" class="bback" >   --}}
                    <img class="back" onclick="goBack()" src="/images/cancel.png">
                {{-- </button> --}}
            </div>
            @if( $post->image != null )
            <div>
              <img class="image" src="{{ asset('/storage/posts_uploaded/'.$post->image) }}">
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
            <div class="body">
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
                                <a class="hghguj like active-like" href="#">Like <span class="badgee">{{ $likecount }}</span></a>
                                <a class="hghguj like" href="#">Dislike <span class="badgee">{{ $dislikecount }}</span></a>
                            @else
                                <a class="hghguj like" href="#" >Like <span class="badgee">{{ $likecount }}</span></a>
                                <a class="hghguj like active-like" href="#">Dislike <span class="badgee">{{ $dislikecount }}</span></a>  
                            @endif
                            @break
                        @elseif($i==$c)
                        <a class="hghguj like" href="#" >Like <span class="badgee">{{ $likecount }}</span></a>
                        <a class="hghguj like" href="#">Dislike <span class="badgee">{{ $dislikecount }}</span></a>
                        @endif
                        @php
                            $c++;
                        @endphp
                    @endforeach
                    @if($i==0)
                        <a class="hghguj like" href="#" >Like <span class="badgee">{{ $likecount }}</span></a>
                        <a class="hghguj like" href="#">Dislike <span class="badgee">{{ $dislikecount }}</span></a>
                    @endif
                    <a class="hghguj" href="{{ route('showpost',[$post->id]) }}">Comment</a>
                </footer>
            </div>
            @endif

            @foreach($post->comments as $comment)
                <div class = "comments">
                    <div class="comment-part">
                        <div class="part">
                        {{$comment->comment}}
                        </div>
                        <div class="creator">
                            <small>
                                Commented by:  <br/>
                            <a style="text-decoration:none; margin:0px; padding:0px; color:black;" href="{{ route('showuser',$comment->user->id) }}">
                                {{$comment->user->username}}
                            </a>
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    </div>
</main>
@if(Auth::check())
<div class="coments">
        <div class="asdaWD">
        <form class="editp" action="{{ route('comment') }}" id="form5" method="post">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="part">
                        <div class="nam"></div>
                        <div class="input22">
                            <input id="comment" name="comment" class="sdffsdg"  type="text" placeholder="Enter your Comment">
                        </div>
                    </div>
                    <div class="part">
                        <div class="butnnn">
                            <button id="butn" type="submit" form="form5" class="sdffsdgb">Submit</button>
                        </div>
                    </div>
        </form>
        </div>
</div>
@endif
@endsection