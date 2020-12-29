@extends('layouts.settingslayout')
@section('headhead')
<style >
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
                <form enctype="multipart/form-data" class="editp" action="{{ route('postupload') }}" id="form5" method="post">
                    @csrf
                    <div class="part">
                        <div class="nam">
                            <label for="name">Title</label>
                        </div>
                        <div class="input22">
                            <input id="name" name="title" class="sdffsdg" type="text"  required>
                        </div>
                    </div>
                    <div class="part">
                        <div class="nam">
                            <label for="post">Select Image</label>
                        </div>
                        <div class="input22">
                            <input id="name" type="file" name="post" class="sdffsdg" type="text">
                        </div>
                    </div>
                    <div class="part">
                        <div class="nam">
                            <label for="bio">Post</label>
                        </div>
                        <div class="input22">
                            <textarea class="sadaada" name="body" id="bio" required></textarea>
                        </div>
                    </div>
                    <div class="part">
                        <div class="butnnn">
                            <button id="butn" type="submit" form="form5" class="sdffsdgb">Upload</button>
                        </div>
                    </div>
                </form>
            </article>
@endsection