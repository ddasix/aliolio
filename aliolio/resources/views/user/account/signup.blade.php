@extends('layouts.master')

@section('title')
로그인 완료!
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
			<strong>회원가입이 완료 되었습니다.<br>지금부터 알리올리오의 다양한 서비스를 이용해 보세요!</strong>
		</div>
	</div>
	<div class="agree_btn_box">
		<a href="/" class="agree_btn">알리올리오 시작하기</a>
	</div>
</div>
@stop

@section('footer_js')
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
@stop