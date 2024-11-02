<div id="wrapper" class="foot-bg">
    <div class="wrap">
        <div class="foot">
            <div class="foot-left">
                <div>
                    <img style="height: 100px" src="{{ asset('footer-hallmark.svg') }}" alt="">
                </div>
                <p> Address: {{ env('SITE_ADDRESS') }}</p>
                <br><br>
                <span><b>©Copyright 2024 {{ env('SITE_NAME ') }}.</b></span>
            </div>
            
            <div class="foot-menu">
                <ul>
                    <li><a href="/limitation-of-liability">Limitation of liability</a></li>
                    <li><a href="/contact-us">Contact</a></li>
                    <li><a href="/help">Help</a></li>
                    <li><a href="privacy">Privacy</a></li>
                    <li><a href="/">Home</a></li>
                </ul>
                
                <div class="pay">
                    <img src="{{ asset('images/payment.png') }}">
                </div>
            </div>
            
        </div>
    </div>
</div>