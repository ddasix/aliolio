@extends('layouts.master')

@section('title')
    로그인
@stop

@section('header_css_js')
	<link href="/css/base.css" rel="stylesheet" type="text/css" />
    <link href="/css/h_type3.css" rel="stylesheet" type="text/css" />
    <link href="/css/login.css" rel="stylesheet" type="text/css" />
    <style>
		body{background-color:white;}
	</style>
@stop

@section('header')
	@include('layouts.header.header_type3')
@stop


@section('container')
	<div class="wrap">
			<img src="../image/icon.png" />
			<p>똑똑한 해외구매의 시작</p>
			<h1>ALIO-OLIO</h1>
			<p>알리오올리오</p>
			<div class="login_btn_area">
				<div class="login_noti">
					<span>알리오올리오는 별도의 회원가입 없이</span>
					<span>SNS 계정으로 로그인하여 이용할 수 있습니다.</span>
				</div>
				<a href="/auth/naver" class="naver_login_btn">네이버 아이디로 로그인</a>
				<a href="/auth/kakao" class="kakao_login_btn">카카오톡 아이디로 로그인</a>
				<a href="/auth/facebook" class="facebook_login_btn">페이스북 아이디로 로그인</a>
			</div>
		</div>
@stop


@section('footer_js')
	
@stop