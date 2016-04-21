@extends('layouts.master')

@section('title')
    자주묻는질문
@stop

@section('header_css_js')
	<link href="/css/base.css" rel="stylesheet" type="text/css" />
	<link href="/css/h_type3.css" rel="stylesheet" type="text/css" />
	<link href="/css/qna.css" rel="stylesheet" type="text/css" />
@stop

@section('header')
	@include('layouts.header.header_type3')
@stop


@section('container')
<div class="wrap">
	<div class="page_wrap">
		@include('assets.faq.post')
	</div>
	<div class="btn_wrap">
		<div class="list_btn" onclick="history.back();">메뉴로 돌아가기</div>
	</div>
	</div>
@stop

@section('out_footer')
    @include('assets.footer')
@stop

@section('footer_js')
	
@stop