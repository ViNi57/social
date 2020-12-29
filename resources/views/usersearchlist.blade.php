@extends('layouts.layout')
@section('head')
<style>
     .mm {
            max-width: 300px;
            overflow:scroll;
            overflow-x: hidden;
            width: 100%;
            border: 1px solid #dbdbdb;
            margin: auto;
            margin-top: 100px;
            flex-direction: row;
            display: flex;
            margin-bottom:600px;
        }
        ::-webkit-scrollbar {
            display: none;
        }
        .usernameee{
        font-style: oblique;
        }
        .img {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            max-width: 200px;
            margin-right: 10px;
            display: flex;
            flex-direction: row;
        }
        .use{
            flex:row;
            display: flex;
            margin:10px;
        }
        .safswe,.lii{
            margin: 15px;
        }
        .lii{
            margin-left: 20px;
        }
</style>
@endsection
@section('main')
<main class="mm">
    <div class="container">
        @if(isset($details))
        <table class="table table-striped">
            <tbody>
                @foreach($details as $user)
                <div class="use">
                <img class="img" src="{{ asset('/storage/avatars/'.$user->profile_dp) }}" onerror="this.onerror=null;this.src='/images/male-avatar.jpg'">
                <div class="safswe">{{$user->username}}</div>
                <a  class="lii" href="{{ route('showuser',$user->id) }}">view profile</a>
                </div>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</main>
@endsection