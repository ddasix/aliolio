@extends('layouts.master')

@section('title')
    product_title
@stop

@section('header_css_js')
    {!! HTML::style('css/base.css', array(), true) !!}
    {!! HTML::style('css/h_type2.css', array(), true) !!}
    {!! HTML::style('css/detail.css', array(), true) !!}
    {!! HTML::style('css/carousel.css', array(), true) !!}
    {!! HTML::style('css/carousel.theme.css', array(), true) !!}
    {!! HTML::style('css/carousel.transitions.css', array(), true) !!}
    <style>
      .footer{
        margin-bottom: 55px;
      }
    </style>
@stop

@section('header')
	@include('layouts.header.header_type2')
	@include('layouts.header.menu_detail')
    @include('layouts.header.menu_search')
    @include('layouts.header.menu_social')
@stop

@section('container')
	<div id="detail">
        <div class="detail_pagewrap">
			<div class="detail_thumb">
				@include('assets.detail.carosel',['images'=>$images])
				@include('assets.detail.product_info')
			</div>
			@include('assets.detail.post_rate')
			@include('assets.detail.product_review')
			@include('assets.detail.seller_info')
			<div class="detail_info">
               <h1 style="color:red">유의사항</h1>
                <p class="notice">해당 정보는 포스팅 작성 날짜 기준의 정보이며, 주관적인 내용이 포함되어 있음을 알려 드립니다. 상품 구매 전에 꼭 ALIEXPRESS 페이지의 셀러 등급과 구매 후기를 확인하세요.</p>
            </div>
            @include('assets.detail.cmnt')

		</div>
	</div>
@stop

@section('out_footer')
    @include('assets.footer')
    @include('assets.detail.fixed_btn')
@stop

@section('footer_js')
	<script src="//code.jquery.com/jquery-latest.min.js"></script>
    {!! HTML::script('js/detail_menu.js', array(), true) !!}
    {!! HTML::script('js/owl.carousel.min.js', array(), true) !!}
    {!! HTML::script('js/detail_img_slide.js', array(), true) !!}
    {!! HTML::script('js/menuup.js', array(), true) !!}
@stop
