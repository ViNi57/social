@extends('layouts.settingslayout')
@section('headhead')
    <style>
        .Update,.avt{
            margin:auto;
            display: block;
            padding: 30px;
        }
        .avt{
            margin-left: -10px;
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
        .ti{
            padding-left:50px;
        }
    </style>
@endsection

@section('mainmain')
<form enctype="multipart/form-data" class="Update" action="{{ route('update_dp') }}" method="post" id="form4" >
    @csrf
                        <label class="ti" for="avatar">Update DP</label>
                        <input type="file" name="avatar" class="avt">

                        <div class="AX">
                        <div class="FHC"></div>
                        <div class="bnt">
                            <button id="but" class="sdffsdg" form="form4">Submit</button>
                        </div>
                        </div> 
</form>                 

@endsection