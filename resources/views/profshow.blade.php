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
            width: 100px;
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
    <form class="editp" action="{{ route('edit_pro') }}" id="form8" method="post">
        @csrf
    <div class="part">
        <div class="nam">
            <label for="role">Role</label>
        </div>
        <div class="input22">
            <select id="role" name="role" value="{{ $user->role }}" class="szsz">
                <option value="Student">Student</option>
                <option value="Faculty">Faculty</option>
                <option value="Industry Expert">Ind Expert</option>
            </select>
        </div>
    </div>
<div class="part">
    <div class="nam">
        <label for="pow">Place of work</label>
    </div>
    <div class="input22">
        <input id="pow" name="pow" class="sdffsdg" type="text" value="{{ $user->placeofwork }}">
    </div>
</div>
<div class="part">
    <div class="nam">
        <label for="Achievements">Achievements</label>
    </div>
    <div class="input22">
        <textarea class="sadaada" name="Achievements" id="Achievements">{{ $user->Achievements }}</textarea>
    </div>
</div>

<div class="part">
    <div class="butnnn">
        <button id="butn" type="submit" form="form8" class="sdffsdgb">Update</button>
    </div>
</div>
    </form>
</article>  
@endsection