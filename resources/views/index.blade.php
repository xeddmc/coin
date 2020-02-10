@extends('layouts.app')
@section('content')
<div class="container" style="padding-bottom: 40px;padding-top: 40px;">
            <div class="row">
                <div class="col-md-8">
                    <h1  style="font-size: 19px;color:white;">Heading</h1>
                    <p  style="font-size: 19px;color:white;"><br>Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu
                        gravida. Aliquam varius finibus est.Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.Aenean tortor est, vulputate quis leo in, vehicula rhoncus
                        lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.<br><br></p>
                        <div class="test">
                        <a href="{{ route('register') }}">
                        <input type="image" src="{{ asset('assets/img/test.png') }}" width="200" height="150" href="home" />
                        </div>
                        </div>
                <div class="col">
                    <div class="row">
                        <div class="col" style="padding-right: 0px;padding-left: 0px;padding-top: 40px;"><img src="{{ asset('assets/img/btc.png') }}" width="60" height="60"><a href="home" style="font-size: 19px;color:white;">  BTC/USD {{$data['btc']}} </a></div>
                    </div>
                    <div class="row">
                        <div class="col" style="padding-right: 0px;padding-left: 0px;padding-top: 40px;"><img src="{{ asset('assets/img/eth.png') }}" width="60" height="60"><a href="home" style="font-size: 19px;color:white;">  ETH/USD {{$data['eth']}}</a></div>
                    </div>
                    <div class="row">
                        <div class="col" style="padding-right: 0px;padding-left: 0px;padding-top: 40px;">
                        <img src="{{ asset('assets/img/xrp.png') }}" width="60" height="60" href="home">
                        <a href="home" style="font-size: 19px;color:white;">  XRP/USD {{$data['xrp']}}</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="padding-right: 0px;padding-left: 0px;padding-top: 40px;"><img src="{{ asset('assets/img/xlm.png') }}" width="60" height="60"><a href="home" style="font-size: 19px;color:white;">  XLM/USD {{$data['xlm']}}</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features" style="background-color:#6FA1FE;font-size: 19px;color:white;padding-top: 40px;padding-bottom: 125px;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Features</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">Works everywhere</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Always available</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name">Customizable</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-leaf icon"></i>
                    <h3 class="name">Organic</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-plane icon"></i>
                    <h3 class="name">Fast</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Mobile-first</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
