@php
    $includeSession = isset($includeSession) ? $includeSession : true;
@endphp
<div class="refer-right">
    <style>
        .refer .refer-right .refer-head .line {
            font-family: "Roboto Condensed", sans-serif;
            font-size: 35px;
            color: #ffffff;
            font-weight: normal;
            margin: 1px 0 8px 0;
            padding: 5px 0 10px 0px;
            border-bottom: 1px solid #999898;
            /* width: 650px; */
        }
    
        .refer .refer-right .refer-head h5 {
            font-family: "Roboto Condensed", sans-serif;
            font-size: 25px;
            color: #ffffff;
            font-weight: normal;
            margin: 1px 0 8px 0;
            padding: 5px 0 10px 0px;
            /* width: 650px; */
            /* text-align:center; */
        }
        p.left-art {
            /* width: 650px; */
            /* text-align:center; */
        }
        .refer .refer-right .refer-head .line span {
            border-left: 3px solid #e81e23;
            padding: 0 0 0 10px;
            text-shadow: 0 1px #ffffff, 0 -1px #ce2828;
        }
    
        .refer .refer-right .refer-head p {
            font-family: "Roboto Condensed", sans-serif;
            font-size: 16px;
            color: #999898;
            line-height: 26px;
        }
        .success {
  background: #cfffd1;
  padding: .5em 2em;
        margin: 0 0 0 0;
        display: flex;
        align-items: center;
  box-shadow: inset 6px 0 #270;
}
    </style>
    
    <div class="referbg">
        <div class="slide_right"
        @if(isset($includeSession) && !$includeSession)
            style="display: flex; justify-content:center"
        @endif
        >  
            <div class="login">  

                <style>
                    ::placeholder { 

                        color: #fff;
                        opacity: 1; 
                    }
                </style>  

                <script language=javascript>
                function checkform() {
                if (document.mainform.username.value=='') {
                    alert("Please type your username!");
                    document.mainform.username.focus();
                    return false;
                }
                if (document.mainform.password.value=='') {
                    alert("Please type your password!");
                    document.mainform.password.focus();
                    return false;
                }
                return true;
                }
                </script>
                <div class="login-title">
                    <h3>Log In Acount</h3>
                    @if(session()->has('success'))
                        <div class="success">
                            <div class="alert_text">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif
                </div>  

                <form class="page-form login-form">
                    <table cellspacing=0 cellpadding=8 border=0 style="color:#555;    line-height: 52px;    margin-left: 25px;">
                        <tr>
                            <td>
                                <div class="icon-2">
                                    <i class="fa fa-user" style="margin: 7px 0px 0px 10px;"></i> 
                                </div>
                                <input required name="login" value='' type="text" class="inpts-2" size=30 autofocus="autofocus" placeholder="Username Or Email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="icon-2">
                                    <i class="fa fa-key" style="margin: 7px 0px 0px 10px;"></i> 
                                </div>
                                <input required type="password" name="password" class="inpts-2" size=30 placeholder="Password *">
                            </td>
                        </tr>
                    </table>  
                    <input type="submit" value="LOGIN" class="sbmt-2">

                    {{-- <div>
                        <a href="/login" class="btn btn-warning w-100 input-rounded sbmt-2" type="submit">
                            <span class="form-loading d-none px-5">
                                <i class="fa fa-sync fa-spin"></i>
                            </span>
                            <span class='submit-text'> 
                                Login
                            </span>
                        </a>
                    </div> --}}
                </form>

                <p style=" margin-top: 5px;"><span><a href="/forgot-password">forgot your Password?</a></span></p>
            </div><!--login-->
        </div>
    </div>
    
    <div class="refer-but">
        <a href="/register"> 
            <img src="images/reg-img.png"> 
            Register now
        </a>
        <br>
        <br>
        <br>
        @if(isset($includeSession) && $includeSession)
        <br>
        <div class="refer-head">
            <h2 class="line">
                <span>OIL AND GAS INVESTMENT SAFETY</span>
            </h2>
            <h5 style="display: nonej;">
                <img style="width: 100%; height: 500px; padding: 0px; margin-left: 18px;" src="{{ asset('chevron/chevron-worker-3.jpg') }}" />
                <br />
                <br />
                Investing in the oil and gas industry can be lucrative, but it's crucial to consider safety aspects before making any investment decisions. Safety plays a vital role in this industry, not only for the well-being of the workers but
                also for the protection of the environment and surrounding communities. Here are some key points to consider regarding safety when investing in oil and gas:
            </h5>
            <ol style="display: nonej;">
                <li>
                    <p class="left-art">
                        <strong>Regulatory Compliance:</strong><br />
                        Safety regulations and guidelines imposed by government bodies are essential for the oil and gas industry. Before investing, ensure that the companies you consider adhere to these regulations and have a robust safety
                        management system in place.
                    </p>
                </li>
        
                <li>
                    <p class="left-art">
                        <strong>Workplace Safety:</strong><br />
                        The oil and gas sector involves various activities, such as drilling, extraction, transportation, and refining, all of which pose inherent risks. Look for companies that prioritize workplace safety by implementing rigorous
                        safety training programs, providing personal protective equipment (PPE), and regularly conducting safety audits.
                    </p>
                </li>
                <li>
                    <p class="left-art">
                        <strong>Environmental Responsibility:</strong><br />
                        Environmental incidents, such as oil spills or gas leaks, can have severe consequences for ecosystems and local communities. Assess the environmental track record of the companies you're interested in investing in. Look for
                        those that prioritize environmental protection through responsible practices, such as proper waste disposal, pollution control measures, and investments in renewable energy alternatives.
                    </p>
                </li>
                <li>
                    <p class="left-art">
                        <strong>Asset Integrity:</strong><br />
                        Aging infrastructure and equipment can lead to safety hazards in the oil and gas industry. It's important to invest in companies that prioritize asset integrity management. Regular maintenance, inspections, and equipment
                        upgrades are crucial to prevent accidents and ensure the long-term safety and reliability of operations.
                    </p>
                </li>
            </ol>
        </div>
        @endif
    </div>
</div>
<script src="/assets/js/v/jquery.bundle2453.js?ver=1"></script>
<script src="/assets/js/v/scripts2453.js?ver=1"></script>
<script src="/assets/js/v/charts2453.js?ver=1"></script>
<script src="/assets/js/v/footer-plugins.js?ref=4"></script>
<script src="{{ asset('dash/plugins/lobibox/js/lobibox.js') }}"></script>
<script src="{{ asset('dash/js/fn.js') }}"></script>
<script src="{{ asset('dash/js/login.js') }}"></script>
