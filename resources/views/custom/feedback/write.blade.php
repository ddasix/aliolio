@extends('layouts.master')

@section('title')
    피드백
@stop

@section('header_css_js')
	<link href="../css/base.css" rel="stylesheet" type="text/css" />
	<link href="../css/h_type3.css" rel="stylesheet" type="text/css" />
	<link href="../css/post.css" rel="stylesheet" type="text/css" />
@stop

@section('header')
	@include('layouts.header.header_feedback')
@stop


@section('container')
<div class="wrap">
	<div class="pagewrap">
		<div class="write_info">
			<textarea name="feedback" id="post_input" maxlength="1000" placeholder="이곳에 의견을 입력해 주세요. 검토후 적극 반영하겠습니다.

*알리 익스프레스 결제, 환불, 배송 등의 문의는 알리익스프레스 홈페이지 또는 모바일 앱을 통해서 진행해 주세요^^" style="height: 80%;"></textarea>
		</div>
	</div>
</div>
@stop

@section('out_footer')
    @include('assets.footer')
@stop

@section('footer_js')
	
@stop