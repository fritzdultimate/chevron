@extends('visitor.layouts.app')

@section('content')

<style>
    .alert {
        background: #FAE6E6;
        padding: .5em 1em 2em 2em;
        margin: 0 0 0 0;
        box-shadow: inset 6px 0 #CC0000;
    }
.action-btn {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    display: inline-flex;
    gap: 8px;
    justify-content: center;
    align-items: center;
    color: #fff;
    padding: 15px 50px;
    background: #36977d;
    border: 1px solid #36977d;
    border-radius: 5px;
    transition: 0.7s;
    font-weight: 500;
    box-shadow: inset 0 0 0 0 #ce2828;
    transition: 0.7s;
    text-transform: uppercase;
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
                    <h1 class="wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                        Verification
                    </h1>
                </div>
            </div>

            <div class="business">
                <div class="bus-text" align="center">
                    <p>
                        <div class="alert">
                            <h4>Error</h4>
                            <div class="alert_text">
                                {{ $message }}
                            </div>
                        </div>
                    </p>
                    <p>
                        <a class="action-btn" href="{{ route('login') }}">
                            <img src="{{ asset('images/reg-img.png') }}" />
                            Go To Login
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection