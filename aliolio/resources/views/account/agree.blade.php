@extends('layouts.master')

@section('title')
약관동의
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
            <strong class="policy_title">이용약관</strong>
            <div class="policy">
                <div class="policy_text">

                </div>
            </div>
            <strong class="policy_title">개인정보 취급방침</strong>
            <div class="policy">
                <div class="policy_text">

                </div>
            </div>
            <div class="agree_check">
                <input type="checkbox" id="terms_agree">
                <label for="terms_agree">이용약관 동의</label>
                <input type="checkbox" id="privacy_agree">
                <label for="privacy_agree">개인정보취급방침 동의</label>
            </div>

        </div>
        <div class="agree_btn_box">
            <a href="../login/login.html" class="cancle_btn">취소</a>
            <a href="../login/signup.html" class="agree_btn">완료</a>
        </div>
    </div>
@stop

@section('footer_js')
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
@stop