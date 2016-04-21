@extends('layouts.master')

@section('title')
    자주묻는질문
@stop

@section('header_css_js')
	<link href="../css/base.css" rel="stylesheet" type="text/css" />
	<link href="../css/h_type3.css" rel="stylesheet" type="text/css" />
	<link href="../css/qna.css" rel="stylesheet" type="text/css" />
@stop

@section('header')
	@include('layouts.header.header_type3')
@stop


@section('container')
<div class="wrap">
	<div class="page_wrap">
		@include('assets.faq.faq_list')
		        <a href="#" class="list">
                    <p>상품 구매 관련</p>
                    <h1>판매자와 연락이 되지 않습니다.</h1>
                </a>
                <a href="#" class="list">
                    <p>이용관련</p>
                    <h1>회원가입은 어떻게 하나요?</h1>
                </a>
                <a href="#" class="list">
                    <p>상품 구매 관련</p>
                    <h1>판매자와 연락이 되지 않습니다.</h1>
                </a>
                <a href="#" class="list">
                    <p>이용관련</p>
                    <h1>회원가입은 어떻게 하나요?</h1>
                </a>
                <a href="#" class="list">
                    <p>상품 구매 관련</p>
                    <h1>판매자와 연락이 되지 않습니다.</h1>
                </a>
                <a href="#" class="list">
                    <p>이용관련</p>
                    <h1>회원가입은 어떻게 하나요?</h1>
                </a>
                <a href="#" class="list">
                    <p>상품 구매 관련</p>
                    <h1>판매자와 연락이 되지 않습니다.</h1>
                </a>
                <a href="#" class="list">
                    <p>이용관련</p>
                    <h1>회원가입은 어떻게 하나요?</h1>
                </a>
                <a href="#" class="list">
                    <p>상품 구매 관련</p>
                    <h1>판매자와 연락이 되지 않습니다.</h1>
                </a>
                <a href="#" class="list">
                    <p>이용관련</p>
                    <h1>회원가입은 어떻게 하나요?</h1>
                </a>
	</div>
	</div>
@stop

@section('out_footer')
    @include('assets.footer')
@stop

@section('footer_js')
	
@stop