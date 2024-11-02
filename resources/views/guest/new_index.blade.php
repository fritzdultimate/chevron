@extends('visitor.layouts.app', ['title' => 'ChevronRefinery | Oil and Gas Crowdfunding Investment Opportunity.'])

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

 <div id="wrapper" class="banner-bg">
     <div class="wrap">
         <div class="banner">
             <div class="simple-slider">
                 <img src="{{ asset('chevron/chevron-refinery-1.jpg') }}" class="single-slide animate-left"/>
                 <img src="{{ asset('chevron/chevron-product.jpg') }}" class="single-slide animate-left"/>
                 <img src="{{ asset('chevron/chevron-workers-2.jpg') }}" class="single-slide animate-left"/>
                 <img src="{{ asset('chevron/chevron-workers-station.jpg') }}" class="single-slide animate-left"/>
                 <img src="{{ asset('chevron/chevron-workers-1.jpg') }}" class="single-slide animate-left"/>
                 {{-- <img src="images/slide4.jpg" class="single-slide animate-left"/> --}}
                 {{-- <img src="images/slide7.jpg" class="single-slide animate-left"/> --}}
                 {{-- <img src="images/slide6.jpg" class="single-slide animate-right"/> --}}
                 {{-- <img src="images/slide5.jpg" class="single-slide animate-left"/> --}}
                 {{-- <img src="images/slide2.jpg" class="single-slide animate-left"/> --}}
                 {{-- <img src="images/slide11.jpg" class="single-slide animate-left"/> --}}
                 <img src="{{ asset('chevron/chevron-product.jpg') }}" class="single-slide animate-left"/>
                 <button class="slider-button slider-left">&#10094;</button>
                 <button class="slider-button slider-right">&#10095;</button>
             </div>
         </div>
     </div>
 </div><div class="clear"></div>




 <div id="wrapper" class="plan-bg">
     <div class="wrap">
         <div class="plan">
         
             <div class="plan-head">
                 <h2 class="line">
                     <span>EXCLUSIVE OIL AND GAS CROWDFUNDING INVESTMENT DEALS (ROI) </span>
                 </h2>
             </div>
             
             @include('visitor.layouts.plans-template')
             
         </div>
     </div>
 </div><div class="clear"></div>


<div id="wrapper" class="refer-bg">
    <div class="wrap">
        <div class="refer">
            <div class="refer-left">
                <div class="refer-head">
                    <h2 class="line">
                        <span>ABOUT OUR OIL AND GAS CROWDFUNDING PROJECT</span>
                    </h2>
                    <p>
                        <img style="width: 650px; height: 500px; padding:0px;margin-left:18px" src="{{ asset('chevron/chevron-refinery-1.jpg') }}">
                        <br><br>
                        {{ env("SITE_NAME") }} is an international energy and chemical company that has achieved upstream, midstream and downstream integration, has been ranked among the top 3 in the Fortune Global 500 for many consecutive years, with a wide range of products and services, its operations covering more than 70 countries and regions in the world. We aim to change the archaic ways of investing in oil and gas.Through our Crowdfunding platform, so that an average investor will be able to access opportunities perfect for generating income through an international oil and gas investment and operation.
                    </p>                 
                    <p>
                        <img style="width: 650px; height: 500px; padding:0px;margin-left:18px" src="images/success2.jpg"><br><br>{{ env("SITE_NAME") }} disinter-mediates this flawed investment model, by providing a system of project designed to generate cash flow returns from wellhead directly back to investors. We put together a powerful team to bring equity crowdfunding into oil and gas sector with a disruptive business model. Our platform synchronizes fintech, crowdfunding and deep industry experience. We develop environmental, social and governance standards to ensure that investors on our platform benefit from responsible placement of capital and overall company culture that fosters an inclusive environment.
                    </p>

                    <p>
                        <img style="width: 650px; height: 500px; padding:0px;margin-left:18px" src="images/success3.jpg"><br><br>
                        Our buisness model generates revenue through each investment deal(ROI) that is funded through this platform. Each investment deal(ROI) comes with management charge and carried interest structure. Making is easy to access, choose, invest and collect returns, by leveraging our team experience, Investors can select an investment deal(ROI) with defined targets which comes with a low relative risk profile. Investors new to oil and gas investment don't have to really understand specifics about the industry in order to generate cash flow. Oil and gas deals can be complex but our experienced team helps in determining a suitable structure of deals to make sure that percentages are fair so that our investors and operators are financially motivated to succeed.
                    </p>

                </div>
                
                <div class="refer-com">
                    <div class="refer-com1">
                        <div class="refer-img">
                            <img src="images/ref-img.png">
                        </div>
                        
                        <div class="refer-cont">
                            <b> 5% </b> &nbsp;&nbsp; <span> Referral commision<br></span>
                        </div>
                    </div>
                </div>
                
            </div>
            
            @include('visitor.layouts.login-form')

        </div>
    </div>
</div>
<div class="clear"></div>



<div id="wrapper" class="advan-bg">
    <div class="wrap">
        <div class="advan">
            <div class="advan-head">
                <h2 class="line">
                    <span> <b> WHY {{ env("SITE_NAME") }} ?</span><br><br>
                </h2>
                <h1 style="font-family:Helvetica;text-align:center;color:#ffffff;">
                    Some of the greatest fortunes in the world was built from this project
                </h1>
                <br><br>
                <img style="width: 100%; height: 350px; padding:0px;" src="images/success2.png">
            </div>
            <div class="advanbg">
                <div class="advanbg1">
                    <div class="advan-img"><img src="images/min1.png"><p> <span> IN CONTEXT </span></p></div>
                    <div class="advan-cont">
                        <p><span>18th </span> In proven crude oil reserves, as country (2018 -January)</p>
                        <p><span>39th </span> In proven reserves of natural gas, as country (2018 -January)</p>
                        <p><span>12th </span> Producer of crude oil in the world, as country (2017)</p>
                        <p><span>16th </span> In natural gas production, as country (2017)</p>
                        <p><span>14th </span>  In primary distillation capacity (2016)</p>
                        <p class="cont-line">For further information: 2017 Statistical Yearbook (Information available only in Spanish)</p>
                    </div>
                </div>
                
                <div class="advanbg1">
                    <div class="advan-img1"><img src="images/min2.png"><p> <span> Value Chain </span></p></div>
                    <div class="advan-cont1">
                        <p class="advan-text"><span>Upstream</span></p>
                        <p class="advan-text"><img src="images/min-line1.png"></p><br>
                        <p class="advan-text"><span>Downstream</span></p>
                        <p class="advan-text"><img src="images/min-line2.png"></p><br>
                        <p class="advan-text"><span>Logistic</span></p>
                        <p class="advan-text"><img src="images/min-line1.png"></p><br>
                        <p class="advan-text"><span>Commercialization</span></p>
                        <p class="advan-text"><img src="images/min-line2.png"></p><br>
                        <p class="cont-line">For further information:<br>Our business</p>
                    </div>
                </div>
                
                <div class="advanbg1">
                    <div class="advan-img"><img src="images/min3.png"><p> <span> HIGH PERFORMANCE </span></p></div>
                    <div class="advan-cont">
                        <p>High performance yield with excellent return on capital investment with short pay-back periods</p>
                        <p>Low Risk Investment is achieved due to strict selection of proposal by our experienced team</p>
                        <p>We have assembled a multidisciplinary team capable of managing investment deals to adapted to our clients need.</p>
                        <p>We promote and support new ideas in the oil industry. We are a platform that finances oil projects through private investors efforts.</p>
                    </div>
                </div>
                
                <div class="advanbg1">
                    <div class="advan-img1"><img src="images/min4.png"><p> <span> Sustainability </span></p></div>
                    <div class="advan-cont">
                        <p>Business responsibility and transparency on the management of financial resources is key to maximize profits for the company.</p>
                        <p>We carefully examine and identify the opportunities to determine which are the most beneficial for our clients</p>
                        <p>We promote and support new ideas in the oil industry. We are a platform that finances oil projects through private investors efforts</p>
                        <p>We strategically provide a positive experience for those investors – experienced and beginners </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="clear"></div>


<div id="wrapper" class="terms-bg">
    <div class="wrap">
        <div class="terms">
        
            <div class="terms-head">
                <h2 class="line">
                    <span> WHAT WE OFFER </span><br>
                </h2>
            </div>
            
            <div class="termsbg">
                <div class="termsbg1">
                    <div class="terms1">
                        <img src="images/terms1.png">
                        <p>EASY TO USE INVESTMENT PLATFORM.</p>
                    </div>
                </div>
                
                <div class="termsbg1">
                    <div class="terms1">
                        <img src="images/terms2.png" style="width: 50%;">
                        <p>HIGH POTENTIAL RETURN </p>
                    </div>
                </div>
                
                <div class="termsbg1">
                    <div class="terms1">
                        <img src="images/terms3.png">
                        <p>VAST INVESTMENT DEALS(ROI) </p>
                    </div>
                </div>
                
                <div class="termsbg1">
                    <div class="terms1">
                        <img src="images/terms4.png">
                        <p>NO HIDDEN CHARGES <br> OR WITHDRAWAL FEES</p>
                    </div>
                </div>
                
                <div class="termsbg1">
                    <div class="terms1">
                        <img src="images/terms5.png">
                        <p>HIGHLY SECURED WITH <br> GUARANTEED SAFETY OF <br> PERSONAL DATA AND FUNDS</p>
                    </div>
                </div>
                
                <div class="termsbg1">
                    <div class="terms1">
                        <img src="images/terms6.png">
                        <p>CRYPTOCURRENCY GATEWAY ACCEPTED</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div><div class="clear"></div>

<div class="clear"></div>
<br>
 <div style="margin: 0 auto">
    <div class="wrap" style="position: relative;">
        <div class="video-wrapper video-wrapper-narrow">
            <video class="video-js vjs-default-skin" height="100" width="100" controls poster="{{ asset('images/Asset-4video-1024x1024.png') }}" data-setup="{}" id="video-one">
                <source src="{{ asset('videos/testimony-4-3-07.mp4') }}" type='video/mp4' />  
                <source src="{{ asset('videos/testimony-4-3-07.mp4') }}" type='video/webm' />  
                <source src="{{ asset('videos/testimony-4-3-07.mp4') }}" type='video/ogg' />
            </video>
        </div>
    </div>
</div>
<br>
<br>

<div style="position: relative;">
    <div class="wrap" style="position: relative;">
        <div class="video-wrapper video-wrapper-narrow">
            <video class="video-js vjs-default-skin" height="100" width="100" controls poster="{{ asset('images/Screenshot-2022-06-30-124415.png') }}" data-setup="{}" id="video-one">
                <source src="{{ asset('videos/testimony-4-3-08.mp4') }}" type='video/mp4' />  
                <source src="{{ asset('videos/testimony-4-3-08.mp4') }}" type='video/webm' />  
                <source src="{{ asset('videos/testimony-4-3-08.mp4') }}" type='video/ogg' />
            </video>
        </div>
    </div>
</div>

<br>
<br>

<div style="position: relative;">
    <div class="wrap" style="position: relative;">
        <div class="video-wrapper video-wrapper-narrow">
            <video class="video-js vjs-default-skin" height="100" width="100" controls poster="{{ asset('images/testimony.png') }}" data-setup="{}" id="video-one">
                <source src="{{ asset('videos/testimony.mp4') }}" type='video/mp4' />  
                <source src="{{ asset('videos/testimony.mp4') }}" type='video/webm' />  
                <source src="{{ asset('videos/testimony.mp4') }}" type='video/ogg' />
            </video>
        </div>
    </div>
</div>

<br>
<br>




<div id="wrapper" class="test-bg d-non">
    <div class="wrap">
        <div class="test">
        
            <div class="test-head">
                <h2 class="line">
                    <span> Investors testimonials </span>
                </h2>
            </div>
            
            <div class="testbg">
                <div class="testbg1">
                    <div class="test-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>

                    </div>
                    <p><a href="/"><img src="images/test1.png"></a></p>
                    <div class="test-cont">
                        <p>“I recieved my investment fund update this morning--and holy cow--you guys are doing a great job! I'm kicking myself for not putting more into this deal. I won't make the same mistake next time! Please keep me in mind for future opportunities...I'd love to invest more with {{ env('SITE_NAME ') }}!"</p>
                    </div>
                    
                    <div class="test-author" style="    padding:50px 0px 20px 15px;">
                        <h2>Becky Hallam</h2>
                        {{-- <p>Investor in Tennessee</p> --}}
                    </div>
                </div>
                
                <div class="testbg1">
                    <div class="test-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <p><a href="/"><img src="images/test2.png"></a></p>
                    <div class="test-cont">
                        <p>"I wanted to let you know that we were able to swing by and look at the project in person.  Loved it!  The design is really attractive and the location is ideal. We are very glad that we invested in this project. Thanks for sourcing such a great opportunity and let us know if there is ever a future capital raise on this project."</p>
                    </div>
                    
                    <div class="test-author">
                        <h2>Jane Caro</h2>
                        {{-- <p>INVESTOR IN CALIFORNIA</p> --}}
                    </div>
                </div>
                
                <div class="testbg1">
                    <div class="test-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <p><a href="/"><img src="images/test3.png"></a></p>
                    <div class="test-cont">
                        <p>"The executive summary, as well as the entire business plan, is one of the best I have ever read...a tightly written, well expressed and complete recitation of all the key facts and data that an investor could want..."</p>
                    </div>
                    
                    <div class="test-author" style="    padding:100px 0px 20px 15px;">
                        <h2>Nelson Baremore</h2>
                        {{-- <p>PRESIDENT, INVESTMENT CO IN ILLIONOIS</p> --}}
                    </div>
                </div>
                
                <div class="testbg1">
                    <div class="test-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                                            <p><a href="/"><img src="images/test4.png"></a></p>
                    <div class="test-cont">
                        <p>In the investment world, and business in general, an individual’s or company’s character is of the utmost importance. It is due to this trust and faith (plus the financial and deep track record) that I hold the {{ env('SITE_NAME ') }} team in high regard. I have personally invested with {{ env('SITE_NAME ') }} and have also referred a number of clients who, upon doing their own due diligence, have invested with {{ env('SITE_NAME ') }} as well.</p>
                    </div>
                    
                    <div class="test-author">
                        <h2>Touqeer Khan</h2>
                        {{-- <p>Investor in Pakistan</p> --}}
                    </div>
                </div>	
            </div>
            
        </div>
    </div>
</div>
<!----------- stat -------------------->

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
    <div align="center">
        <img style="height: 100px" src="{{ asset('footer-hallmark.svg') }}" alt="">
    </div>
    <p style="color: #ffffff; text-align: center;"><b>©2014 - {{ date('Y') }} {{ env('SITE_NAME ') }} Investment All Right Reserved</b></p>
    <div class="clear"></div>
    <div class="clear"></div>
    <!----------- footer ------------->
</div>


<div class="clear"></div>
<!----------- footer ------------->

@endsection