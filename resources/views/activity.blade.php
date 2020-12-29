@extends('layouts.settingslayout')
@section('headhead')
<style>
        .dvxv {
            margin: auto;
            margin-bottom: 400px;
        }
        
        .sdffsdg {
            margin: 20px;
            background-color: #0095f6;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            padding: 5px 10px;
            color: white;
            font-size: 16px;
            border: 1px solid transparent;
        }
        
        .bnt {
            margin-left: 32px;
        }
        
        .butNN {
            margin-left: 3px;
        }
        
        .foot {
            margin-top: 96px;
        }
</style>
@endsection
@section('mainmain')
<article class="dvxv">
                <form class="dvfx" method="post"  action="{{ route('logout') }}" id="form">
                    @csrf
                    <div class="AX">
                        <div class="FHC"></div>
                        <div class="bnt">
                            <button type="submit" id="but" form="form" class="sdffsdg">Log Out</button>
                        </div>
                    </div>
                </form>   
                    <div class="AX">
                        <div class="FHC"></div>
                        <div class="butnnnNN">
                            <button id="but" class="sdffsdg" disabled>Disable My Account</button>
                        </div>
                    </div>
                <form class="dvfx" method="post"  action="{{ route('delete') }}" id="form3">
                    @csrf
                    <div class="AX">
                        <div class="FHC"></div>
                        <div class="butNN">
                            <button type="submit" id="but" form="form3" class="sdffsdg">Delete My Account</button>
                        </div>
                    </div>
                </form>
            </article>
@endsection