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
            margin-bottom:780px;
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
        }
        .safswe,.lii{
            margin: auto;
        }
        .lii{
            margin-left: 20px;
        }
</style>
@endsection
@section('main')
<main class="m">
    <div class="container">
        
        <table class="table">
            <tbody>
               
                    @foreach($user->friends->where('approved','=',true) as $user)
                    <div class="use">
                    <img class="img" src="{{ asset('/storage/avatars/'.$user->user2->profile_dp) }}" onerror="this.onerror=null;this.src='/images/male-avatar.jpg'">
                    <div class="safswe">{{$user->user2->username}}</div>
                    <a  class="lii" href="{{ route('showuser',$user->user2->id) }}">view profile</a>
                    </div>
                @endforeach
                
                @if(Auth::user()->friends()->count()==0)
                    <h1 style="margin-left: 200px">This User does not have any friends</h1>
                @endif
            </tbody>
        </table>
        
    </div>
</main>
@endsection