@extends('layouts.master')

@section('title')
클립보드
@stop

@section('header_js')
	<link href="../css/base.css" rel="stylesheet" type="text/css" />
@stop

@section('header')
	@include('assets.header_b')
@stop

@section('header_menu')
	
@stop

@section('content')
<div class="thumb_listwrap">
        <div class="thumb_grid">
            @include('products.list_thumb')
        </div>
    </div>
<div id="detail_layer">
</div>
@stop

@section('footer_js')
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js/common_menu.js"></script>
    <script type="text/javascript" src="/js/menuup.js"></script>
    <script type="text/javascript" src="/js/clip_rate.js"></script>
    <script type="text/javascript" src="/js/detail_img_slide.js"></script>
    <script type="text/javascript" src="/js/post_carousel.js"></script>
    <script type="text/javascript" src="../js/clip_grid.js"></script>
@stop