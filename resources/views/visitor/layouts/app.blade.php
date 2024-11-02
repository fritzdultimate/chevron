<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="wb:op" content="8b6e6e4402c7031de4fa53272335907b"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <!-- Primary Meta Tags -->
        <title> {{ isset($title) ? $title :  'Oil and Gas Crowdfunding Investment Opportunity.' }}</title>
        <meta name="title" content="{{ isset($title) ? $title :  'Oil and Gas Crowdfunding Investment Opportunity.' }}">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1"> --}}
        <meta name="description" content="{{ env("SITE_NAME") }} disintermediates this flawed investment model, by providing a platform of projects designed to generate cash flow returns from the wellhead directly back to investors. We give you a platform for direct access to oil and gas cash flow returns. Our projects generate positive cash flow returns.">
    
        <!-- Open Graph / Facebook -->
        <meta name="google-site-verification" content="6tydg9dvcmhW9n1kQ_K7Clum0qlzp_GYVsu4rz6L4WU" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ request()->getSchemeAndHttpHost() }}">
        <meta property="og:title" content="{{ isset($title) ? $title :  'Oil and Gas Crowdfunding Investment Opportunity.' }}">
        <meta property="og:description" content="{{ env("SITE_NAME") }} disintermediates this flawed investment model, by providing a platform of projects designed to generate cash flow returns from the wellhead directly back to investors. We give you a platform for direct access to oil and gas cash flow returns. Our projects generate positive cash flow returns.">
        <meta property="og:image" content="{{ asset('chevron/chevron-workers-2.jpg') }}">
    
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ request()->getSchemeAndHttpHost() }}">
        <meta property="twitter:title" content="{{ isset($title) ? $title :  'Oil and Gas Crowdfunding Investment Opportunity.' }}">
        <meta property="twitter:description" content="{{ env("SITE_NAME") }} disintermediates this flawed investment model, by providing a platform of projects designed to generate cash flow returns from the wellhead directly back to investors. We give you a platform for direct access to oil and gas cash flow returns. Our projects generate positive cash flow returns.">
        <meta property="twitter:image" content="{{ asset('chevron/chevron-workers-2.jpg') }}">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700,500italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300italic,300,400italic,500,700,500italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
        <style>
            @media only screen and (max-width: 768px){
                .menu .menu-menu ul li a {
                    font-size:18px !important;
                }
            }
        </style>
        {{-- <link rel="stylesheet" href="{{ asset('tabst') }}" type="text/css" /> --}}
        <link rel="stylesheet" href="{{ asset('css/faqstyle.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/transtabstyle.css') }}" type="text/css" />
        <link rel="shortcut icon" type="image/png" href="{{ asset('favicon-32x32.png') }}"/>
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
        {{-- <link rel="stylesheet" href="{{ asset('css/animate.min.html') }}" type="text/css"/> --}}
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/base.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/tabcontent.css') }}" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark:400,500,600,700" rel="stylesheet">
    
        {{-- <link rel="stylesheet" href="{{ asset('css/letterdrop.html') }}" type="text/css" /> --}}
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Expletus+Sans:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    
        <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    
        <link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    
        <link rel="stylesheet" href="{{ asset('css/simpleslider.css') }}" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('dash/plugins/lobibox/css/lobibox.min.css?ref=0') }}">
        <!--- banner tab script --->
    
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="{{ asset('images/js/prefixfree.min.js') }}"></script>
    
        <!--- banner tab script --->
    
        <!---- calc script --->
    
        <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="{{ asset('images/js/calcs.js') }}"></script>
    
        <!---- calc script --->
    
        <!---- Wow script --->
    
    
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
        <script src="{{ asset('images/js/wow.js') }}"></script>
    
    
    
    
        <script type="text/javascript" src="{{ asset('images/js/tabcontent.js') }}"></script>
    
    
    
    
        <script>
    
            new WOW().init();
    
            </script>
    
    
    
        <!---- Wow script --->
    
    </head>

    @include('visitor.layouts.header')
    
   
    @yield('content')


    @hasSection('footer')
        @yield('footer')
    @else
        @include('visitor.layouts.footer')
    @endif

    
    @production  
        <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "+44 7943 845344", // WhatsApp number
                    call_to_action: "Message us", // Call to action
                    position: "left", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        </script>  
        <!-- Smartsupp Live Chat script -->
        <script type="text/javascript">
            var _smartsupp = _smartsupp || {};
            _smartsupp.key = '3c2ce77041a77c69421ccd1cf8a58f242f02d4ef';
            window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
            })(document);
        </script>
        <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
    @endproduction

    </body>
</html>