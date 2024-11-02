@extends('visitor.layouts.app')

@section('content')
<style>
    * {
        /* font-size: 30px; */
    }
    .lobibox-notify-msg {
        font-size: 14px;
    }
    </style>


<script src="https://vjs.zencdn.net/c/video.js"></script>
<link rel="stylesheet" href="https://vjs.zencdn.net/c/video-js.css">

<style>
    .video-js, img.vjs-poster {
    width: 100% !important;
    height: 100% !important;
}
</style>

<style>
.video-wrapper {
    position: relative;
    padding-bottom: 74.25%; /* 4:3 ratio */
    padding-top: 30px; /* IE6 workaround*/
    height: 0;
    overflow: hidden;
}

.video-wrapper-narrow {
    padding-bottom: 40%;
}

video,.videoWrapper,.video-js {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.video-js, img.vjs-poster {
    width: 100% !important;
    height: 100% !important; //these need !important because IE wants to set height/width to 100px
    max-width: 100%;
}
</style>
{{-- <scr</script> --}}
{{-- <link src="{{ asset('assets/video.css') }}"></link> --}}


 <!-------------- about --------------->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
 <script  src="images/js/simpleslider.js"></script>



<div id="wrapper" class="refer-bg">
    <div class="wrap">
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
                    Account Login
                </h1>
            </div>
        </div>
        <div class="refer" style="display: flex; justify-content:center">
            
            @include('visitor.layouts.login-form', ['includeSession' => false])

        </div>
    </div>
</div>
<div class="clear"></div>



@endsection

@section('footer')
<!----------- footer ------------->
{{-- <div id="wrapper" class="terms-bg" style="width: 100%; text-align: center;">
    <p style="color: #ffffff;">
        <b>Note:</b> {{ env("SITE_NAME") }} offers direct and alternative oil and gas investment opportunities that enable investors to participate in the potential cash flow and the unique tax benefits associated with oil and gas
        investments. There are significant risks associated with investing in oil and gas offerings. The information contained in this website is for informational purposes only and is not a solicitation to buy or sell any securities.
        Information on this site is not intended to be used as investment or tax advice. Consult your investment advisor or tax advisor concerning the current tax laws and effects on your personal tax situation.
    </p>
    <p style="color: #ffffff;">
        <b>Disclaimer:</b>Nothing published by {{ env("SITE_NAME") }} should be considered personalized investment or tax advice. There are significant risks associated with investing in Oil and Gas Ventures. This is not a solicitation to
        buy or an offer to sell any securities. Any such solicitation or offer will only be made through a Private Placement Memorandum in accordance with Regulation D Rule 506. A thorough discussion of Tax Benefits and Risk Factors
        associated with this kind of investment are contained within the Private Placement Memorandum.
    </p>
    <p style="color: #ffffff; text-align: center;"><b>&#169;2004 - {{ date('Y') }} {{ env("SITE_NAME") }} Investment All Right Reserved</b></p>
    <div class="clear"></div>
    <!--<div class="clear"></div>-->
</div> --}}

<div id="wrapper" class="foot-bg">
    <div class="wrap">
        <div class="foot">
            <div class="foot-menu">
                <ul>
                    <li><a href="tabsstylee66a.html?a=cust&amp;page=limitation"></a></li>
                    <li><a href="tabsstyle15a0.html?a=support"></a></li>
                    <li><a href="tabsstyle4b7a.html?a=cust&amp;page=help"></a></li>
                    <li><a href="tabsstyle2851.html?a=cust&amp;page=privacy"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <p style="color: #ffffff;">
        <b>Note:</b>CHEVRON REFINERY offers direct and alternative oil and gas investment opportunities that enable investors to participate in the potential cash flow and the unique tax benefits associated with oil and gas investments. There
        are significant risks associated with investing in oil and gas offerings. The information contained in this website is for informational purposes only and is not a solicitation to buy or sell any securities. Information on this site
        is not intended to be used as investment or tax advice. Consult your investment advisor or tax advisor concerning the current tax laws and effects on your personal tax situation.
    </p>
    <p style="color: #ffffff;">
        <b>Disclaimer:</b>Nothing published by CHEVRON REFINERY should be considered personalized investment or tax advice. There are significant risks associated with investing in Oil and Gas Ventures. This is not a solicitation to buy or an
        offer to sell any securities. Any such solicitation or offer will only be made through a Private Placement Memorandum in accordance with Regulation D Rule 506. A thorough discussion of Tax Benefits and Risk Factors associated with
        this kind of investment are contained within the Private Placement Memorandum.
    </p>
    <p style="color: #ffffff; text-align: center;"><b>©2014 - {{ date('Y') }} {{ env('SITE_NAME ') }} Investment All Right Reserved</b></p>
    <div class="clear"></div>
    <div class="clear"></div>
    <!----------- footer ------------->
</div>


<div class="clear"></div>
<!----------- footer ------------->

@endsection