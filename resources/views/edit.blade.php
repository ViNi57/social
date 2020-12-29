@extends('layouts.settingslayout')
@section('headhead')
<style>
        .sdffsdgb {
            margin: 20px;
            margin-left: 80px;
            background-color: #0095f6;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            padding: 5px 10px;
            color: white;
            font-size: 16px;
            border: 1px solid transparent;
        }
        
        .artmain {
            margin-top: 30px;
        }
        
        .part {
            flex-direction: row;
            display: flex;
            margin-left: 190px;
            border: 15px solid transparent;
        }
        
        .nam {
            color: #262626;
            margin-right: 50px;
            text-align: right;
            display: block;
            height: 60px;
            width: 60px;
            margin-top: 10px;
        }
        
        .sdffsdg,
        .sadaada,
        .szsz {
            height: 37px;
            width: 191px;
            border-radius: 3px;
            border: 1px solid #dbdbdb;
            padding: 5px
        }
    </style>
@endsection
@section('mainmain')
            <article class="artmain">
                <form class="editp" action="{{ route('edit_p') }}" id="form5" method="post">
                    @csrf
                    <div class="part">
                        <div class="nam">
                            <label for="name">Name</label>
                        </div>
                        <div class="input22">
                            <input id="name" name="name" class="sdffsdg" value="{{ $user->name }}" type="text"  aria-required="false">
                        </div>
                    </div>
                    <div class="part">
                        <div class="nam">
                            <label for="username">Username</label>
                        </div>
                        <div class="input22">
                            <input id="username" class="sdffsdg" type="text" value="{{ $user->username }}" required disabled>
                        </div>
                    </div>
                    <div class="part">
                        <div class="nam">
                            <label for="bio">Bio</label>
                        </div>
                        <div class="input22">
                            <textarea class="sadaada" name="bio" id="bio">{{ $user->bio }}</textarea>
                        </div>
                    </div>
                    <div class="part">
                        <div class="nam">
                            <label for="email">Email</label>
                        </div>
                        <div class="input22">
                            <input id="email"  class="sdffsdg" type="email" value="{{ $user->email }}" aria-required="false" disabled>
                        </div>
                    </div>
                    <div class="part">
                        <div class="nam">
                            <label for="Phonenumber">Phone number</label>
                        </div>
                        <div class="input22">
                            <input id="Phonenumber" name="phonenumber" class="sdffsdg" type="text" value="{{ $user->phonenumber }}" aria-required="false">
                        </div>
                    </div>
                    <div class="part">
                        <div class="nam">
                            <label for="sex">Sex</label>
                        </div>
                        <div class="input22">
                            <select id="sex" name="sex" value="{{ $user->sex }}" class="szsz" disabled>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="trans">Transgender</option>
                                <option value="null">Rather not say</option>
                            </select>
                        </div>
                    </div>
                    <div class="part">
                        <div class="butnnn">
                            <button id="butn" type="submit" form="form5" class="sdffsdgb">Submit</button>
                        </div>
                    </div>
                </form>
            </article>
@endsection