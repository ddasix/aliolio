@extends('layouts.master')

@section('title')
약관동의
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
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="pagewrap">
        {{ Form::open(['url'=>'/signUp','method'=>'post','id'=>'agreeForm']) }}
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
                <input type="checkbox" name="terms_agree" id="terms_agree">
                <label for="terms_agree">이용약관 동의</label>
                <input type="checkbox" name="privacy_agree" id="privacy_agree">
                <label for="privacy_agree">개인정보취급방침 동의</label>
            </div>
        </div>
        <div class="agree_btn_box">
            <a href="#" class="cancle_btn">취소</a>
            <a href="#" class="agree_btn submit">완료</a>
        </div>
        {{ Form::close() }}
    </div>
@stop

@section('footer_js')
    <script>
        $(".submit").on('click', function(){
            $("#agreeForm").submit();
        });
    </script>
@stop