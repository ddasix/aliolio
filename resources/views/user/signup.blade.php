@extends('layouts.master')

@section('title')
    가입완료!
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
			<img src="../image/sign_up.png" />
			<p>CONGRATUATION!</p>
			<div class="spacing"></div>
			<h1>가입완료!</h1>
			<div class="spacing"></div>
			<p>이제 알리오 올리오를 이용하실 수 있습니다.
				<br>지금바로 시작해 보세요!</p>
			<div class="login_btn_area">
				<a href="/" class="start_btn">알리오올리오 시작하기</a>
			</div>
		</div>
@stop


@section('footer_js')
	
@stop