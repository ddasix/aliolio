@extends('layouts.master')

@section('title')
    약관동의
@stop

@section('header_css_js')
	<link href="../css/base.css" rel="stylesheet" type="text/css" />
	<link href="../css/h_type3.css" rel="stylesheet" type="text/css" />
	<link href="../css/login.css" rel="stylesheet" type="text/css" />
@stop

@section('header')
	@include('layouts.header.header_type3')
@stop


@section('container')
<div class="agree_wrap">
     <p>알리오올리오 이용약관</p>
      <div class="agree_box">
          <div class="agree_box_text">
              @include("assets.user.terms")
          </div>
      </div>
      <p>개인정보취급방침</p>
      <div class="agree_box">
          <div class="agree_box_text">
              @include("assets.user.policy")
          </div>
      </div>
      <div class="agree_check">
          <input type="checkbox" id="terms_agree"><label for="terms_agree">이용약관 동의</label>
          <input type="checkbox" id="privacy_agree"><label for="privacy_agree">개인정보취급방침 동의</label>
      </div>
      <div class="agree_btn_box">
          <a href="/" class="cancle_btn">취소</a>
          <a href="/user/signup" class="agree_btn">완료</a>
      </div>
      </div>
@stop


@section('footer_js')

@stop
