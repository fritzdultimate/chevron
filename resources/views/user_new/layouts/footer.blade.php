        <div class="nk-footer nk-footer-fluid bg-lighter">
            <div class="container-xl wide-lg">
                <div class="nk-footer-wrap">
                    <div class="nk-footer-copyright"> &copy; 2024 {{ env('SITE_NAME') }}. Designed by <a href="https://{{ env('APP_NAME') }}.org/" target="_blank">{{ env('SITE_NAME') }} team</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    
    
    <script src="{{ asset('_assets/js/bundleee9a.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('_assets/js/scriptsee9a.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('_assets/js/demo-settingsee9a.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('_assets/js/charts/chart-investee9a.js?ver=3.2.2') }}"></script>


  </body>
</html>
