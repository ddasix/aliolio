@extends('layouts.master')

@section('title')
    컬렉션
@stop

@section('header_css_js')
	<link href="/css/base.css" rel="stylesheet" type="text/css" />
    <link href="/css/h_type1.css" rel="stylesheet" type="text/css" />
    <link href="/css/thumb_list.css" rel="stylesheet" type="text/css" />
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
    <script src="/js/thumb_grid.js"></script>
@stop

@section('header')
	@include('layouts.header.header_type1')
	@include('layouts.header.menu_slide')
    @include('layouts.header.menu_search')
@stop


@section('container')
	<div class="thumb_listwrap">
		<div class="thumb_grid">
			@include('products.thumb')
		</div>
	</div>
	@include('assets.footer')
@stop


@section('footer_js')
	<script type="text/javascript" src="/js/common_menu.js"></script>
    <script type="text/javascript" src="/js/menuup.js"></script>
@stop