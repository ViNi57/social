@extends('layouts.settingslayout')
@section('headhead')
<script type="text/javascript">
        function validation() {
            var password = document.getElementById("pass").value;
            var c_password = document.getElementById("repass").value;

            if (password != c_password) {
                alert("passwords do not match");
            } else {
                return true;
            }
        }
        function alertfunction(){ 
                alert("Old Password is incorrect,try forgot password?"
                );
        }
</script>
<style>
        .poi {
            margin: 20px;
            margin-left: 180px;
            background-color: #0095f6;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            padding: 5px 10px;
            color: white;
            font-size: 16px;
            border: 1px solid transparent;
        }
        
        .dvfx {
            margin-top: 60px;
        }
        
        .tyrd {
            flex-direction: row;
            display: flex;
            margin-left: 50px;
            border: 15px solid transparent;
        }
        
        .dxgxd {
            color: #262626;
            margin-right: 50px;
            text-align: right;
            display: block;
            height: 60px;
            width: 200px;
            margin-top: 12px;
        }
        
        .sdffsdg {
            height: 37px;
            width: 191px;
            border-radius: 3px;
            border: 1px solid #dbdbdb;
            padding: 5px
        }
        
        .jiin {
            margin-left: 290px;
            color: #0095f6;
            text-decoration: none;
        }
    </style>
@endsection
@section('mainmain')
            <article class="dvxv">
                @if(session()->has('message'))
                    <script type="text/javascript">alertfunction()</script>  
                @endif
                <form class="dvfx" id="form" method="post" action="{{ route('ppr') }}">
                    @csrf
                    <div class="tyrd">
                        <div class="dxgxd">
                            <label for="pwd">Old Password</label>
                        </div>
                        <div class="etyyh">
                            <input id="pwd" class="sdffsdg" name="old_pass" type="password" required >
                        </div>
                    </div>
                    <div class="tyrd">
                        <div class="dxgxd">
                            <label for="pwd1">New Password</label>
                        </div>
                        <div class="etyyh">
                            <input id="pwd1" class="sdffsdg" name="pass" type="password" required>
                        </div>
                    </div>
                    <!-- <div class="tyrd">
                        <div class="dxgxd">
                            <label for="cpwd">Confirm New Password</label>
                        </div>
                        <div class="etyyh">
                            <input id="cpwd" class="sdffsdg" name="repass" onchange="validation()" type="password" required>
                        </div>
                    </div> -->
                    <div class="tyrd">
                        <div class="sdfs">
                            <button id="bo" type="submit" form="form" class="poi">Confirm Changes</button>
                        </div>
                    </div>
                    <div class="tyrd">
                        <div class="sdfs">
                            <div class="link">
                                <a href="#" class="jiin">Forgot Password?</a>
                            </div>
                        </div>
                    </div>

                </form>
            </article>
@endsection