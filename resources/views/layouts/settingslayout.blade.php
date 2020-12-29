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
        }
        
        .li33 {
            border-right: 1px solid #dbdbdb;
            height: 750px;
            width: 200px;
            margin-top: -20px;
            margin-bottom: -20px;
        }
        
        ul {
            list-style-type: none;
        }
        
        .asd,
        .asd1,
        .asd2 {
            display: block;
            padding: 16px 16px 16px 10px;
            color: #262626;
            text-decoration: none;
            margin-top: 15px;
        }
        
        .asd {
            margin-top: 50px;
        }
        .foot {
            margin-top: 96px;
        }
        </style>
        @yield('headhead')
@endsection
@section('main')
<main class="main">
        <div class="m">
            <ul class="li33">
                <li>
                    <a class="asd" href="{{ route('pe') }}">Edit Account</a>
                </li>
                <li>
                    <a class="asd1" href="{{ route('pp') }}">Privacy and Security</a>
                </li>
                <li>
                    <a class="asd2" href="{{ route('pa') }}">Activity</a>
                </li>
                <li>
                    <a class="asd2" href="{{ route('udp') }}">Update DP</a>
                </li>
                <li>
                    <a class="asd2" href="{{ route('indpost') }}">Add Post</a>
                </li>
                <li>
                    <a class="asd2" href="{{ route('ps') }}">Update Details</a>
                </li>
            </ul>
            @yield('mainmain')
        </div>
    </main>
@endsection
