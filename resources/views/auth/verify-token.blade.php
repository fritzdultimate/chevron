@extends('visitor.layouts.app')

{{-- @section('title', 'Best Oil & Gas Platform') --}}

@section('content')

<style>
    .error {
        
        background: #FAE6E6;
        padding: .5em 2em;
        margin: 0 0 0 0;
        display: flex;
        align-items: center;
        box-shadow: inset 6px 0 #CC0000;
    
    }
    .other-box{
          height: auto;
        width: 1100px;
        background-color: #24252a;
        border: 1px solid#efefef;
        padding: 19px;
        overflow: hidden;
        border-radius: 10px;
        margin-top: 20px;
        }
    
    
    .other-boxone{
        height:auto;
        width:100%;
        overflow:hidden;
        margin-top:30px;
        }
    
    .other-boxone:first-child{
        margin-top:0px;
        }
    
    .box-head{
        /*height:32px;*/
        width: 100%;
        overflow: hidden;
        border-bottom: 1px solid #ba0808;
        }
    
    .box-head p{
        color: #03a55e;
        font-size: 22px;
        font-family: 'Saira Semi Condensed', sans-serif;
        font-weight: 600;
        text-transform: capitalize;
        }
    
    .box-head p img{
        margin: 0px 8px -8px 0px;
        width:5%;
        }
    
    .box-downall{
        height:auto;
        width:1065px;
        overflow:hidden;
        margin:0 auto;
        padding-top:20px;
        }
    
    
    .box-downone{
        height:auto;
        width:100%;
        overflow:hidden;
        }
    
    .box-downleft{
        height:auto;
        width:518px;
        float:left;
        overflow:hidden;
        }
        
    .box-downright{
        height:auto;
        width:518px;
        float:right;
        overflow:hidden;
        }
    
    .boxmain{
        height:auto;
        width:100%;
        overflow:hidden;
        margin-top:20px;
        }
    
    .boxmain:first-child{
        margin-top:0px;
        }
    
    .box-tittle{
        height:auto;
        width:170px;
        overflow:hidden;
        float:left;
        }
    
    .box-tittle p{
        height:auto;
        margin-top:10px;
        }
    .box-tittle p{
    color: #fff;
        font-size: 18px;
        text-transform: capitalize;
        font-weight:600;
        font-family: 'Rajdhani', sans-serif;
        }
    
    .box-type{
        height:auto;
        width:340px;
        float:left;
        }
    
    .box-type input{
        font-size: 17px;
        width: 98%;
        border: none;
        padding: 12px 6px;
        background-color: #1c2d3d2e;
        color: #000;
        font-family: Myriad-Pro-Regular;
        outline: none;
        border: 1px solid #1c2d3d;
    }
    
    .sign-box{
        height: auto;
        width: 429px;
        margin: 0 auto;
        overflow: hidden;
        padding-top: 0px;
        padding-bottom: 30px;
    }
    
    .upline{
        height:auto;
        width:100%;
        overflow:hidden;
        }
    
    .upline-text{
        height:auto;
        width:auto;
        float:left;
        margin-right:20px;
        margin-top:10px;
        }
    
    .upline-by{
        height: auto;
        width: 298px;
        float: left;
        overflow: hidden;
        background-color: #FFFFFF;
        padding: 12px;
        border: 1px solid#2195dc;
        }
    
    .check-text{
        height: auto;
        width: auto;
        overflow: hidden;
        margin: 0 auto;
        padding-top: 15px;
        display: table;
        }
        
    .check-box{
        height:auto;
        width:30px;
        float:left;
        }
        
    .check-box input{
        height:20px;
        width:20px;
        }
        
    .agree{
        height:auto;
        width:auto;
        float:left;
        margin-top:-1px;
        }
        
    .agree p{
        color: #efefef;
        margin-top: 2px;
        font-family: 'Saira Semi Condensed', sans-serif;
        font-weight: 600;
        font-size: 18px;
        }
        
    .agree p span a{
        color: #2195dc;
        }
    
    .regnow{
        height:auto;
        width:270px;
        margin:0 auto;
        overflow:hidden;
        padding-top:20px;
        text-align:center;
        }
    
    .regnow input{
       /* border: 1px solid#0778ce;*/
    }
</style>

<div id="wrapper" class="contanierbg">
    <div class="wrap">
        <div class="box6">
            <div class="main_headline">
                <div class="container">
                    <div class="bg_line bg_line_29 line_move_2">
                        <span class="long_line long_line_8"></span>
                        <span class="bg_round"></span>
                    </div>
                    <div class="bg_line bg_line_30 line_move">
                        <span class="long_line long_line"></span>
                    </div>

                    <div class="bg_line bg_line_31 line_move_3">
                        <span class="bg_round"></span>
                        <span class="bg_round"></span>
                        <span class="long_line long_line_10"></span>
                    </div>

                    <div class="bg_line bg_line_32 line_move">
                        <span class="long_line long_line_10"></span>
                    </div>

                    <div class="bg_line bg_line_33 line_move_2">
                        <span class="bg_round"></span>
                        <span class="bg_round"></span>
                        <span class="long_line long_line_10"></span>
                    </div>

                    <div class="bg_line bg_line_34 line_move_3">
                        <span class="bg_round bg_round_1"></span>
                        <span class="long_line"></span>
                        <span class="bg_round"></span>
                    </div>

                    <div class="bg_line bg_line_35 line_move">
                        <span class="long_line long_line_10"></span>
                        <span class="bg_round"></span>
                        <span class="bg_round"></span>
                    </div>

                    <div class="bg_line bg_line_36 line_move_3">
                        <span class="bg_round"></span>
                        <span class="long_line"></span>
                    </div>

                    <div class="bg_line bg_line_37 line_move_2">
                        <span class="long_line"></span>
                        <span class="bg_round"></span>
                    </div>
                </div>

                <div class="text-center">
                    <h1 class="wow slideInUp undefined" style="visibility: visible; animation-name: slideInUp;">
                        Verify Token chevronrefinery.net:
                    </h1>
                </div>
            </div>

            <script language="javascript">
                function checkform() {
                    if (document.regform.fullname.value == "") {
                        alert("Please enter your full name!");
                        document.regform.fullname.focus();
                        return false;
                    }

                    if (document.regform.username.value == "") {
                        alert("Please enter your username!");
                        document.regform.username.focus();
                        return false;
                    }
                    if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
                        alert("For username you should use English letters and digits only!");
                        document.regform.username.focus();
                        return false;
                    }
                    if (document.regform.password.value == "") {
                        alert("Please enter your password!");
                        document.regform.password.focus();
                        return false;
                    }
                    if (document.regform.password.value != document.regform.password2.value) {
                        alert("Please check your password!");
                        document.regform.password2.focus();
                        return false;
                    }

                    if (document.regform.email.value == "") {
                        alert("Please enter your e-mail address!");
                        document.regform.email.focus();
                        return false;
                    }
                    if (document.regform.email.value != document.regform.email1.value) {
                        alert("Please retupe your e-mail!");
                        document.regform.email.focus();
                        return false;
                    }
                    if (document.regform.agree.checked == false) {
                        alert("You have to agree with the Terms and Conditions!");
                        return false;
                    }
                    return true;
                }

                function IsNumeric(sText) {
                    var ValidChars = "0123456789";
                    var IsNumber = true;
                    var Char;
                    if (sText == "") return false;
                    for (i = 0; i < sText.length && IsNumber == true; i++) {
                        Char = sText.charAt(i);
                        if (ValidChars.indexOf(Char) == -1) {
                            IsNumber = false;
                        }
                    }
                    return IsNumber;
                }
            </script>

            <div class="hdcont" style="width:800px">
                <form class="page-form pass-form" method="POST">
                    @csrf
                    <div class="other-box" style="width:100%">
                        @if(session()->has('error'))
                        <div class="error">
                            
                            <div class="alert_text">
                                {{ session('error') }}
                            </div>
                        </div>
                        @endif
                        <div style="margin-top: 0px;" class="other-boxone">
                            {{-- <div class="box-head">
                                <p><img src="images/favicon.png" /> Personal Information</p>
                            </div> --}}
                            <div class="box-downall" style="width: 100%">
                                <div class="box-downone">
                                    <div class="">
                                        <div class="boxmain">
                                            <div class="box-tittle" style="width: 100%">
                                                <p>Token</p>
                                            </div>
                                            <div class="box-type w-100 w-full" style="width: 100%">
                                                <style>
                                                    input::placeholder{
                                                        color: #efefef;
                                                    }
                                                </style>
                                                <input required type="text" name="token" class="form-control" placeholder="Enter token" value="{{ old('token') }}" style="color: #efefef">
                                                <input type="hidden" name="email" value="{{ session('email') }}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <br>
                    <div class="sign-box">
                        <div class="regnow">
                            <input type="submit" value="Submit" class="sbmt" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
