@extends('layouts.master')

@section('title')
    카테고리
@stop

@section('header_css_js')
	<link href="/css/base.css" rel="stylesheet" type="text/css" />
    <link href="/css/h_type1.css" rel="stylesheet" type="text/css" />
    <link href="/css/cate.css" rel="stylesheet" type="text/css" />
    <style>
		body{background-color:white;}
	</style>
@stop

@section('header')
	@include('layouts.header.header_type1')
    @include('layouts.header.menu_slide')
    @include('layouts.header.menu_search')
@stop


@section('container')
    <div class="wrap">
        <div class="cate_wrap">
            <div class="accordion_cate">
                @include('assets.cate_menu')
            </div>
        </div>
    </div>
@stop

@section('out_footer')
    @include('assets.footer')
@stop


@section('footer_js')
	<script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="/js/cate_acc.js"></script>
    <script src="/js/common_menu.js"></script>
@stop