@extends('layouts.master')

@section('title')
    상품올리기
@stop

@section('header_css_js')
	<link href="/css/base.css" rel="stylesheet" type="text/css" />
	<link href="/css/h_type3.css" rel="stylesheet" type="text/css" />
	<link href="/css/post.css" rel="stylesheet" type="text/css" />
	<style>
		body{background-color:white;}
	</style>
@stop

@section('header')
	@include('layouts.header.header_write')
@stop


@section('container')
<div class="pagewrap">
                <!-- multistep form -->
                <form id="post_form">
                    <!-- progressbar -->
                    <ul id="step_status">
                        <li class="active">상품등록</li>
                        <li>리뷰작성</li>
                        <li>상품평가</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="post_wrap">
                            <input name="url" type="text" id="code_input" placeholder="여기에 상품 페이지 주소를 입력하세요." />
                            <button id="go_url" type="submit" name="url_submit">상품 검색</button>
                        </div>
                        <div class="post_wrap">
                            <div class="product_page_info">
                                <div class="page_thumb">
                                    <img src="http://g02.a.alicdn.com/kf/HTB1ZqsAHFXXXXcIXpXXq6xXFXXXB/Women-Dress-2015-Autumn-Summer-Retro-Long-Sleeve-Dress-Women-Red-Plaid-Lapel-Shirt-Dresses.jpg">
                                </div>
                                <div class="page_name">
                                    <p>Women Dress 2015 Autumn Summer Retro Long Sleeve Dress Women Red Plaid Lapel Shirt Dresses</p>
                                    <strong>$13.48</strong>
                                </div>
                                <a href="#" class="go_guide"></a>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="등록하기" />
                    </fieldset>
                    <fieldset>
                        <div class="post_wrap">
                            <div class="write_info">
                                <textarea name="cntn" id="post_input" maxlength="250" placeholder="리뷰를 입력하세요."></textarea>
                                <div class="product_page_info">
                                    <div class="page_thumb">
                                        <img src="http://g02.a.alicdn.com/kf/HTB1ZqsAHFXXXXcIXpXXq6xXFXXXB/Women-Dress-2015-Autumn-Summer-Retro-Long-Sleeve-Dress-Women-Red-Plaid-Lapel-Shirt-Dresses.jpg">
                                    </div>
                                    <div class="page_name">
                                        <p>Women Dress 2015 Autumn Summer Retro Long Sleeve Dress Women Red Plaid Lapel Shirt Dresses</p>
                                        <strong>$13.48</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button" value="이전" />
                        <input type="button" name="next" class="next action-button btn_color" value="다음" />
                    </fieldset>
                    <fieldset>
                        <div class="post_wrap">
                            <select name="qlty" id="review_input">
                                <option>품질점수</option>
                                <option>5점</option>
                                <option>4.5점</option>
                                <option>4점</option>
                                <option>3.5점</option>
                                <option>3점</option>
                                <option>2.5점</option>
                                <option>2점</option>
                                <option>1.5점</option>
                                <option>1점</option>
                                <option>0.5점</option>
                                <option>0점</option>
                            </select>
                            <select name="sellerkind" id="review_input">
                                <option>셀러 친절도</option>
                                <option>5점</option>
                                <option>4.5점</option>
                                <option>4점</option>
                                <option>3.5점</option>
                                <option>3점</option>
                                <option>2.5점</option>
                                <option>2점</option>
                                <option>1.5점</option>
                                <option>1점</option>
                                <option>0.5점</option>
                                <option>0점</option>
                            </select>
                            <select name="seller_feedback" id="review_input">
                                <option>셀러 피드백</option>
                                <option>5점</option>
                                <option>4.5점</option>
                                <option>4점</option>
                                <option>3.5점</option>
                                <option>3점</option>
                                <option>2.5점</option>
                                <option>2점</option>
                                <option>1.5점</option>
                                <option>1점</option>
                                <option>0.5점</option>
                                <option>0점</option>
                            </select>
                            <select name="deli_qlty" id="review_input">
                                <option>배송점수</option>
                                <option>5점</option>
                                <option>4.5점</option>
                                <option>4점</option>
                                <option>3.5점</option>
                                <option>3점</option>
                                <option>2.5점</option>
                                <option>2점</option>
                                <option>1.5점</option>
                                <option>1점</option>
                                <option>0.5점</option>
                                <option>0점</option>
                            </select>
                            <select name="deliday" id="review_input">
                                <option>배송일수</option>
                                <option>1주일 이내</option>
                                <option>7일~14일</option>
                                <option>15일~21일</option>
                                <option>22일~28일</option>
                                <option>29일~35일</option>
                                <option>35일 이상</option>
                            </select>
                        </div>
                        <input type="button" name="previous" class="previous action-button" value="이전" />
                        <input type="submit" name="submit" class="submit action-button" value="완료" />
                    </fieldset>
                </form>
            </div>
@stop


@section('footer_js')
      <script src="http://code.jquery.com/jquery-latest.min.js"></script>
      <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js"></script>
      <script src="/js/post_step.js"></script>
@stop
