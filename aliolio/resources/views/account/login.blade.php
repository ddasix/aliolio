@extends('layouts.master')

@section('title')
로그인
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
    <div class="pagewrap">
        <div class="post_wrap">
            <img src="/image/logo_login.png" />
            <div id="login">
                <strong>회원가입 없이 SNS 계정으로 로그인 하세요!<br>더 많은 기능을 이용하실 수 있습니다.</strong>
                <div class="social_login_menu">
                    <a href="/login/agreement.html" class="facebook login_page">페이스북 계정으로 로그인</a>
                    <a class="naver login_page">네이버 계정으로 로그인</a>
                    <a class="kakao login_page">카카오 계정으로 로그인</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer_js')
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
@stop