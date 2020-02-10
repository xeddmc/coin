@extends('layouts.app')

@section('content')
@if (Auth::user())
<nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
	<div class="container">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="{{ route('home') }}" style="font-size: 15px;">AZN {{$user->AZN}}</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('home') }}" style="font-size: 15px;"> BTC {{$user->BTC}}</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('home') }}" style="font-size: 15px;">ETH {{$user->ETH}}</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('home') }}" style="font-size: 15px;">XRP {{$user->XRP}}</a>
			</li>
		</ul>
	</div>
</nav>
@endif
<div class="pricing-container" style="padding-bottom: 295px;">
	<ul class="pricing-list bounce-invert">
		<li>
			<ul class="pricing-wrapper">
				<li data-type="monthly" class="is-visible">
					<header class="pricing-header">
						<h2>100 AZN</h2>
						<div class="price">
							@php
							@$converter=100/$valyuta;
							@$show=$converter/$data['btc'];
							@$show=number_format((float)$show, 5, '.', '');
							@endphp
							<span class="value">{{$show}}</span>
							<span class="duration">BTC</span>
						</div>
					</header>
					<div class="pricing-body">
						<ul class="pricing-features">
						</ul>
					</div>
					<footer class="pricing-footer">
						<a class="select" href="buy/1">Buy BTC</a>
					</footer>
				</li>
			</ul>
		</li>
		<li>
			<ul class="pricing-wrapper">
				<li data-type="monthly" class="is-visible">
					<header class="pricing-header">
						<h2>200 AZN</h2>
						<div class="price">
							@php
							@$converter1=200/$valyuta;
							@$show1=$converter1/$data['btc'];
							@$show1=number_format((float)$show1, 5, '.', '');
							@endphp
							<span class="value">{{$show1}}</span>
							<span class="duration">BTC</span>
						</div>
					</header>
					<div class="pricing-body">
						<ul class="pricing-features">
						</ul>
					</div>
					<footer class="pricing-footer">
						<a class="select" href="buy/2">Buy BTC</a>
					</footer>
				</li>
			</ul>
		</li>
		<li>
			<ul class="pricing-wrapper">
				<li data-type="monthly" class="is-visible">
					<header class="pricing-header">
						<h2>500 AZN</h2>
						<div class="price">
							@php
							@$converter2=500/$valyuta;
							@$show2=$converter2/$data['btc'];
							@$show2=number_format((float)$show2, 5, '.', '');
							@endphp
							<span class="value">{{$show2}}</span>
							<span class="duration">BTC</span>
						</div>
					</header>
					<div class="pricing-body">
						<ul class="pricing-features">
						</ul>
					</div>
					<footer class="pricing-footer">
						<a class="select" href="buy/3">Buy BTC</a>
					</footer>
				</li>
			</ul>
		</li>
		<li>
			<ul class="pricing-wrapper">
				<li data-type="monthly" class="is-visible">
					<header class="pricing-header">
						<h2>100 ETH</h2>
						<div class="price">
							<span class="value">2.26</span>
							<span class="duration">BTC</span>
						</div>
					</header>
					<div class="pricing-body">
						<ul class="pricing-features">
						</ul>
					</div>
					<footer class="pricing-footer">
						<a class="select" href="buy/4">Buy ETH</a>
					</footer>
				</li>
			</ul>
		</li>
		<li>
			<ul class="pricing-wrapper">
				<li data-type="monthly" class="is-visible">
					<header class="pricing-header">
						<h2>100 XRP</h2>
						<div class="price">
							<span class="value">0.002786</span>
							<span class="duration">BTC</span>
						</div>
					</header>
					<div class="pricing-body">
						<ul class="pricing-features">
						</ul>
					</div>
					<footer class="pricing-footer">
						<a class="select" href="buy/6">Buy XRP</a>
					</footer>
				</li>
			</ul>
		</li>
		<li>
			<ul class="pricing-wrapper">
				<li data-type="monthly" class="is-visible">
					<header class="pricing-header">
						<h2>Top-Up</h2>
						<div class="price">
							<span class="value">500</span>
							<span class="duration">AZN</span>
						</div>
					</header>
					<div class="pricing-body">
						<ul class="pricing-features">
						</ul>
					</div>
					<footer class="pricing-footer">
						<a class="select" href="buy/5">Top-Up</a>
					</footer>
				</li>
			</ul>
		</li>
	</ul>
</div>
<script type="text/javascript" src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/script.min.js') }}"></script>
@endsection