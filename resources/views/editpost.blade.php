@extends('layouts.layout')
@section('head')
<style >
        .m {
            max-width: 935px;
            overflow: hidden;
            width: 100%;
            border: 1px solid #dbdbdb;
            margin: auto;
            margin-top: 100px;
            flex-direction: row;
            display: flex;
            margin-bottom: 380px;
        }
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
        .butnnn{
            position: relative;
            left:60px;
        }
        .butnnnn{
            position: relative;
            left:120px;
        }
        .editp{
            position: relative;
            left:50px;
        }   
</style>

@endsection
@section('main')
    <main class="m">
    <article class="artmain">
                <form class="editp" action="{{ route('epost',$post->id) }}" id="form5" method="post">
                    @csrf
                    <div class="part">
                        <div class="nam">
                            <label for="name">Title</label>
                        </div>
                        <div class="input22">
                            <input id="name" name="title" class="sdffsdg" type="text" value="{{ $post->title }}" aria-required="false">
                        </div>
                    </div>
                    <div class="part">
                        <div class="nam">
                            <label for="bio">Post</label>
                        </div>
                        <div class="input22">
                            <textarea class="sadaada" name="body" id="bio" >{{ $post->body }}</textarea>
                        </div>
                    </div>
                    <div class="part">
                        <div class="butnnn">
                            <button id="butn" type="submit" form="form5" class="sdffsdgb">Make Changes</button>
                        </div>
                    </div>
                </form>
                <form class="delp" method="post" id ="form2" action="{{ route('depost',$post->id) }}"  >
                    @csrf
                    <div class="part">
                        <div class="butnnnn">
                            <button id="butn" type="submit" form="form2" class="sdffsdgb">Delete Post</button>
                        </div>
                    </div>
                </form>
            </article>
    </main>
@endsection