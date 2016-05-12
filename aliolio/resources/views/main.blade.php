@extends('layouts.master')

@section('title')
ALIOLIO - 해외구매 리뷰보고 구매하자!
@stop

@section('header_js')
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="icon" sizes="192x192" href="/icon.png" />
	<link href="/css/base.css" rel="stylesheet" type="text/css" />
	<link href="/css/carousel.css" rel="stylesheet" type="text/css" />
	<link href="/css/carousel.theme.main.css" rel="stylesheet" type="text/css" />
	<link href="/css/carousel.transitions.css" rel="stylesheet" type="text/css" />
@stop

@section('header')
	@include('assets.header')
@stop

@section('header_menu')
	@include('assets.menu')
	@include('assets.search_menu')
@stop

@section('content')
	<div id="main_bn" class="owl-carousel">
		@include('assets.slide_main')
	</div>
	<div class="list_wrap">
		<div class="product_listwrap">
			<div class="grid">
				@include('products.list_feed',['product_infos'=>$product_info])
			</div>
		</div>
		<div id="footer">
			<p>copyright© ALIO-OLIO. all right reserved.</p>
		</div>
	</div>
	<div id="detail_layer">
	</div>
@stop

@section('footer_js')
	<script src="/js/template/productinfo.js" id="product-template" type="text/template"></script>
	<script src="/js/jquery/jquery-2.2.3.js"></script>
	<script src="/js/underscore-min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
	<script src="/js/common_menu.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/main_slide.js"></script>
	<script src="/js/menuup.js"></script>
	<script src="/js/clip_rate.js"></script>
	<script src="/js/grid.js"></script>
@stop