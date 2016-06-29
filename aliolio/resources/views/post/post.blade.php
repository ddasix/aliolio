@extends('layouts.master')

@section('title')
리뷰 작성하기
@stop

@section('header_js')
	<link href="../css/base.css" rel="stylesheet" type="text/css" />
@stop

@section('header')
	@include('assets.header_sub')
@stop

@section('header_menu')
	
@stop

@section('content')
<div class="post_alert" style="display:none;">
	<p>상품 페이지 주소를 정확하게 입력해 주세요.</p>
</div>
<div class="loading_cover">
	<div class="loding_icon_wrap">
		<div class="loading_mark"><i></i><i></i></div>
	</div>
</div>
<div class="pagewrap">

    <!-- multistep form -->
    <form id="post_form" method="POST" action="/product">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="product_id"/>
        <!-- fieldsets -->
        <fieldset>
            <div class="post_wrap">
                <p class="ask_product">상품 주소를 입력해 주세요.
                    <div href="#" class="go_guide">
                        <p>리뷰를 작성할 아이허브 상품페이지 주소를 복사하여 아래 입력창에 입력한 후 등록하기를 눌러줍니다.</p>
                    </div>
                </p>
                <input name="url" type="text" id="code_input" placeholder="* 여기에 상품 페이지 주소를 입력하세요." />
            </div>
            <input type="button" class="next action-button" data-next="checkurl" value="등록하기" />
        </fieldset>
        <fieldset>
            <div class="post_wrap">
                <p class="ask_product">이 상품이 맞나요?
                    <div href="#" class="go_guide">
                        <p>리뷰할 상품이 맞는지 확인해주세요. 아니라면 [아니요]를 눌러 주소를 다시 입력해 주세요.</p>
                    </div>
                </p>
                <div class="product_page_info">
                    <div class="page_thumb">
                        <img class="data_thumb_img" src=""/>
                    </div>
                    <div class="page_name">
                        <p class="data_title">Hero Nutritional Products, 요미 베어, 종합 멀티 비타민, 100% 천연 과일 맛 & 색소, 200 구미 베어</p>
                        <strong class="data_amount_price">₩ 0</strong>
                    </div>
                </div>
            </div>
            <input type="button" class="next action-button" data-next="" value="네! 맞습니다." />
            <input type="button" name="previous" class="previous action-button" value="아니요." />
        </fieldset>
        <fieldset>
            <div class="post_wrap">
                <p class="ask_product">리뷰를 작성해 주세요.
                    <div href="#" class="go_guide">
                        <p>별점을 매기고 리뷰를 작성 한 후 [완료]를 눌러주세요. <a style="color:red;font-size:12px;">*해시태그는 #를 생략하고 엔터키로 입력하세요.</a></p>
                    </div>
                </p>
                <div class="write_info">
                    <select name="qlty" id="review_input">
                        <option value="5">5점(매우만족)</option>
                        <option value="4">4점(만족)</option>
                        <option value="3">3점(보통)</option>
                        <option value="2">2점(불만족)</option>
                        <option value="1">1점(매우불만족)</option>
                    </select>
                    <textarea name="cntn" id="post_input" maxlength="500" placeholder="* 리뷰를 입력하세요." onkeyup="resize(this)"></textarea>
                    <div class="tag_form">
                        <input id="tag_input" placeholder='* 해시태그를 입력해 주세요.(엔터)' />
                    </div>
                    <input name="recomm_code" type="text" id="rcode_input" placeholder="추천 코드를 입력해 주세요." />
                    <div class="product_page_info">
                        <div class="page_thumb">
                            <img class="data_thumb_img" src=""/>
                        </div>
                        <div class="page_name">
                            <p class="data_title">Hero Nutritional Products, 요미 베어, 종합 멀티 비타민, 100% 천연 과일 맛 & 색소, 200 구미 베어</p>
                            <strong class="data_amount_price">₩ 0</strong>
                        </div>
                    </div>
                </div>
            </div>
            <input type="button" onclick="location.reload()" class="action-button" value="상품 다시 선택" />
            <input type="button" class="submit action-button" value="완료" onclick="submitForm()" />
        </fieldset>
    </form>
</div>
@stop

@section('footer_js')
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js"></script>
        <script src="/js/post_step.js"></script>
        <script src="/js/post_alert.js"></script>
        <script src="/js/tag_field.js"></script>
        <script>
            $(".go_guide").click(function () {
                $(".go_guide").toggleClass("open");
            });
        </script>
        <script>
            function resize(obj) {
                obj.style.height = "0px";
                obj.style.height = (2 + obj.scrollHeight) + "px";
            }
        </script>
@stop