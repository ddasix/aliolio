@extends('layouts.master')

@section('title')
    내프로필
@stop

@section('header_css_js')
	<link href="/css/base.css" rel="stylesheet" type="text/css" />
    <link href="/css/h_type1.css" rel="stylesheet" type="text/css" />
    <link href="/css/feed_list.css" rel="stylesheet" type="text/css" />
    <link href="/css/thumb_list.css" rel="stylesheet" type="text/css" />
    <link href="/css/myprofile.css" rel="stylesheet" type="text/css" />
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
    <script src="/js/grid.js"></script>
    <script src="/js/thumb_grid.js"></script>
@stop

@section('header')
	@include('layouts.header.header_profile')
	@include('layouts.header.menu_slide')
@stop


@section('container')
	@include('assets.user.user_info')
	<div class="profile_list_wrap thumb">
		<div class="profile_listwrap_thumb">
			<div class="thumb_grid">
				@include('products.thumb')
			</div>
			@include('assets.footer')
		</div>
		<div class="profile_listwrap_feed hide">
			<div class="grid">
				@include('products.feed')
			</div>
			@include('assets.footer')
		</div>
	</div>
@stop


@section('footer_js')
	<script src="/js/profile_tab.js"></script>
    <script src="/js/common_menu.js"></script>
@stop