@extends('layouts.master')

@section('title')
    이용가이드
@stop

@section('header_css_js')
	<link href="/css/base.css" rel="stylesheet" type="text/css" />
	<link href="/css/h_type3.css" rel="stylesheet" type="text/css" />
	<link href="/css/guide.css" rel="stylesheet" type="text/css" />
@stop

@section('header')
	@include('layouts.header.header_type3')
@stop


@section('container')
<div class="wrap">
	<div class="page_wrap">
		<div class="detail_thumb">
			<img src="/image/guide_thumb.png">
		</div>
		@include('assets.guide.post')
	</div>
	<a href="http://s.click.aliexpress.com/e/37EujQ37y" class="back_btn">알리익스프레스 바로가기</a>
</div>
@stop

@section('out_footer')
    @include('assets.footer')
@stop

@section('footer_js')
	
@stop