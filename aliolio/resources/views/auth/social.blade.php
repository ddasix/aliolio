@extends('layouts.master')

@section('title')
로그인
@stop

@section('header_js')
	<link href="/css/base.css" rel="stylesheet" type="text/css" />
@stop

@section('header')
	@include('assets.header_sub')
@stop

@section('header_menu')
	
@stop

@section('content')
	<div class="pagewrap">
		<form id="post_form">
			<div class="post_wrap">
				<div id="login">
					<strong>안녕하세요! SNS 계정으로 인증해주시면 <br>알리올리오 로그인이 완료됩니다!</strong>
					<div class="social_login_menu">
						<a href="/login/agreement.html" class="facebook login_page">페이스북 계정으로 로그인</a>
						<a class="naver login_page">네이버 계정으로 로그인</a>
						<a class="kakao login_page">카카오 계정으로 로그인</a>
						<a class="insta login_page">인스타그램 계정으로 로그인</a>
					</div>
				</div>
			</div>
		</form>
    </div>
@stop

@section('footer_js')
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
@stop