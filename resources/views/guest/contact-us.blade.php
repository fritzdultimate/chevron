@extends('visitor.layouts.app', ['title' => 'ChevronRefinery | Contact Us.'])

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
    
    .table_left {
    padding:0px;
    padding-right:45px;
    width:500px;
    display:inline-block;
    vertical-align:top;
    border-right:1px solid #9b9d9c;
    margin:20px 30px;
    border-radius:3px;
    }
    
    .boxright {
    width:520px;
    padding:0px;
    display:inline-block;
    vertical-align:top;
    }
    
    .boxright p {
    font-size:12px;
    line-height:16px;
    text-align:justify;
    color:#999;
    margin-top:10px;
    }
    .divrightcont {
    color:#444;
    border-radius:3px;
    margin-top:0px;
    }
    .platform_box {
    border:0px solid #fff;
    background:none;
    padding:15px 0;
    border-radius:3px;
    width:100%;
    display:inline-block;
    vertical-align:top;
    color:#777;
    text-align:center;
    border-bottom:1px solid #9b9d9c;
    }
    .platform_box h6 {
        font-size: 20px;
        margin: 15px 0px 10px 0px;
        color: #03a55e;
        font-weight: 700 !important;
        font-family: 'Rajdhani', sans-serif;
        text-transform: uppercase;
    }
    .platform_box span {
        padding: 10px !important;
        font-weight: 500 !important;
        margin: 0 !important;
        font-family: 'Saira Semi Condensed', sans-serif;
        font-size: 16px;
        color: #efefef;
    }
    .platform_box i {
    font-size:44px;
    color:#ba0808;
    padding:10px !important;
    margin:0 !important;
    }
    
    </style>

<div id="wrapper">
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
                    <h1 class="wow slideInUp" style="visibility: visible; animation-name: slideInUp;">Support Form</h1>
                </div>
            </div>
            <!--<p style="color: #555;
        text-align: center;
        float: right;
        width: 59%;
        margin: 41px 0px 0px 0px;    text-align: justify;
    ">To obtain the necessary information, you can contact customer support specialists. We will be happy to answer any your questions or solve your problems. Before you contact us, please make sure that the information you are interested is not in the section of frequency asked questions. If you encounter a problem while using our site, when contacting support please indicate your login (if you are registered user) and try to describe your problem more detailed. We will promptly process your request and contact you for further information if necessary.</p>-->

            <div class="hdcont">
                <div class="table_left d-none">
                    <script language="javascript">
                        function checkform() {
                            if (document.mainform.name.value == "") {
                                alert("Please type your full name!");
                                document.mainform.name.focus();
                                return false;
                            }
                            if (document.mainform.email.value == "") {
                                alert("Please enter your e-mail address!");
                                document.mainform.email.focus();
                                return false;
                            }
                            if (document.mainform.message.value == "") {
                                alert("Please type your message!");
                                document.mainform.message.focus();
                                return false;
                            }
                            return true;
                        }
                    </script>

                    <form method="post" name="mainform" onsubmit="return checkform()" style="width: 100%; display: none;">
                        <input type="hidden" name="a" value="support" />
                        <input type="hidden" name="action" value="send" />

                        <div class="formgrouper">
                            <label>Your Name</label>
                            <input type="text" name="name" value="" size="30" class="inpts" />
                        </div>
                        <div class="formgrouper">
                            <label>Your Email</label>
                            <input type="text" name="email" value="" size="30" class="inpts" />
                        </div>

                        <div class="formgrouper">
                            <label>Message</label>
                            <textarea class="textarea" name="message" cols="45" rows="4"></textarea>
                        </div>

                        <div class="formgrouper"></div>
                        <input type="submit" value="Send" class="sbmt" />
                    </form>
                </div>

                <div class="boxleft">
                    <div class="divrightcont">
                        <div class="div_right">
                            <div class="platform_box">
                                <i class="fa fa-map-marker"></i>
                                <h6>Head Office Address</h6>
                                <span>
                                    {{ env('SITE_ADDRESS') }}
                                </span>
                            </div>
                            <div class="platform_box">
                                <i class="fa fa-envelope"></i>
                                <h6>Email Address</h6>
                                <span>
                                    support@chevronrefinery.net
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection