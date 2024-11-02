<body>

    <!--------------- top ---------------->
    <div id="wrapper" class="menu-bg">
        <div class="wrap">
            <div class="menu">
                
                <div class="menu-menu">
                    <div class="menu-menu1">
                        <ul>
                            <li class="active"><a href="/"><i class="fa fa-home"></i></a></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/product-and-services">Products and Services</a></li>
                            <li><a href="/investments">Investments</a></li>
                            <li><a href="/privacy">Privacy</a></li>
                            {{-- <li><a href="/terms">Terms & Conditions</a></li> --}}
                        <li><a href="/faq">faq</a></li>
                            <li><a href="/contact-us">contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="time">
                        <ul>
                            <li><div id="google_translate_element"></div>
                                <script>
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en'
                                    }, 'google_translate_element');
                                }
                                </script>
                                <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
                            
                        </ul>
                    </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <div id="wrapper">
        <div class="wrap">

            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container" style="vertical-align:middle;margin:0px auto">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
            {
            "symbols": [
              {
                "description": "GAS",
                "proName": "CURRENCYCOM:NATURALGAS"
              },
              {
                "description": "CRUDE OIL",
                "proName": "CURRENCYCOM:OIL_CRUDE"
              },
              {
                "description": "BTC/USD",
                "proName": "BITBAY:BTCUSD"
              },
              {
                "description": "ETH/USD",
                "proName": "COINBASE:ETHUSD"
              }
            ],
            "colorTheme": "light",
            "isTransparent": false,
            "showSymbolLogo": true,
            "locale": "en"
          }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>

    </div>

    <div class="clear"></div>

    <div id="wrapper" class="logo-menubg">
        <div class="wrap">
            <div class="logo-menu">
                
                <div class="logo-center" align="center">
                    <a href="/" class="" style="display: inline-flex; gap: 16px">
                        <img src="{{ asset('images/logo.jpg') }}"alt="season greetings"  style="height:100px; vertical-align:middle;margin:15px auto">
                        <h1 style="color: white">
                            {{ env('APP_NAME') }}
                        </h1>
                    </a>
                </div>
                
                
            </div>
        </div>
    </div><div class="clear"></div>






    <!--------------- top ---------------->
