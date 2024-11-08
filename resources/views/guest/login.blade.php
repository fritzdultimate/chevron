@extends('visitor.layouts.app', ['title' => 'ChevronRefinery | Oil and Gas Crowdfunding Investment Opportunity.'])
@section('content')


<style>

    .panel-heading {
    background:#1B334D !important;
    padding:15px 25px !important;
    border-radius:3px;
    color:#fff !important;
    text-decoration:none !important;
    }
    .panel-title a, panel-title i {
    vertical-align:top !important;
    }
    .panel-title i {
    float:right !important;
    }
    .husty_logcontent {
        width: 305px;
        text-align: center;
        margin: 60px auto 50px auto;
        color: #fff;
        /* background: url(./hustydesigns/graphics/slider.png); */
        background-position: 1000px -200px;
        box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.5);
        -webkit-box-shadow: 0px 0px 10px 3px rgb(107, 107, 107);
        border: 1px solid #fff;
        border-bottom: 4px solid #fff;
        padding: 35px 50px;
        border-radius: 3px;
        display: inline-block;
        vertical-align: top;
    }
    .husty_logcontent h1  {
        font-size: 36px;
        font-weight: 100;
        font-family: 'Saira Semi Condensed', sans-serif;
        color: #03a55e;
        margin-top: 30px;
        text-transform: uppercase;
        font-weight: 400;
    }
    .husty_logcontent span  {
        font-size: 16px;
        display: block;
        font-weight: 300;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #888;
        color: #9a0808;
        font-weight:bold;
    }
    .husty_logcontent i {
        position: absolute;
        color: #fff;
        font-size: 20px;
        margin: -40px 0px 0px 110px;
    }
    ::placeholder { 
    
        color: #fff;
        opacity: 1; 
    }
    </style>
    
    
    <div id="wrapper" class="contanierbg" style="display:inline-table;">
    
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
                    <h1 class="wow slideInUp" style="visibility: visible; animation-name: slideInUp;">MEMBER LOGIN</h1>
                </div>
            </div>
    <center>
    
    <div class="hdcont">	
    
    
    <div class="logregbackbg">
    <div class="husty_logcontent">
    
    <img src="images/favicon.png"/>
    
    <h1>Account Signin</h1>
    <span>Enter login information to proceed.</span>
    
    <form class="page-form login-form" style="width:100%; margin:0;">
    <div class="log_page">
        <div class="log_form">                 
            <div class="left">
             <div class="formbox">
               <span>
                <input required name="login" value='' type="text" class="inpts-2" size=30 autofocus="autofocus" placeholder="Username Or Email">
                <i class="fa fa-user"></i>
             </span>
         </div>
      </div>
      
      
          <div class="right">      
            <div class="formbox">
                 <span>
                    <input required type="password" name="password" class="inpts-2" size=30 placeholder="Password *">
                    <i class="fa fa-key"></i>
                 </span>
            </div>
        </div> 
             
                
                
        
            <div class="rest_val">
               <div class="log_text"> <a href="/forgot-password">Forgot Password ?</a></div>
            </div>
                
            <div class="log_text"><input type=submit value="Login" class=sbmt></div>
        
        </div>
    </div>
    
    
    </form>
    
    </div>
    </div>
    </div>
    </center>
    
    </div>
    
    </div>
    
    </div>
    <script src="/assets/js/v/jquery.bundle2453.js?ver=1"></script>
    <script src="/assets/js/v/scripts2453.js?ver=1"></script>
    <script src="/assets/js/v/charts2453.js?ver=1"></script>
    <script src="/assets/js/v/footer-plugins.js?ref=4"></script>
    <script src="{{ asset('dash/plugins/lobibox/js/lobibox.js') }}"></script>
    <script src="{{ asset('dash/js/fn.js') }}"></script>
    <script src="{{ asset('dash/js/login.js') }}"></script>

@endsection