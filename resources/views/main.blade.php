@extends('layouts.master')

@section('title')
    알리오올리오
@stop

@section('header_css_js')
    {!! HTML::style('css/base.css', array(), true) !!}
    <!-- <link href="{{ asset( 'css/base.css', Request::secure() ) }}" rel="stylesheet"> -->
    {!! HTML::style('css/h_type1.css', array(), true) !!}
    {!! HTML::style('css/main.css', array(), true) !!}
    {!! HTML::style('css/feed_list.css', array(), true) !!}
    {!! HTML::style('css/carousel.css', array(), true) !!}
    {!! HTML::style('css/carousel.theme.main.css', array(), true) !!}
    {!! HTML::style('css/carousel.transitions.css', array(), true) !!}
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
    {!! HTML::script('js/grid.js', array(), true) !!}
    {!! HTML::script('js/main_slide.js', array(), true) !!}
@stop

@section('header')
	@include('layouts.header.header_main')
    @include('layouts.header.menu_slide')
    @include('layouts.header.menu_search')
@stop


@section('container')
	@include('assets.main_bn')
        <div class="list_wrap">
            <div class="product_listwrap">
                <div class="grid">
                    @include('products.feed',['items'=>$items])
                </div>
                @include('assets.footer')
            </div>
        </div>
@stop


@section('footer_js')
    {!! HTML::script('js/common_menu.js', array(), true) !!}
    {!! HTML::script('js/owl.carousel.min.js', array(), true) !!}
    {!! HTML::script('js/main_slide.js', array(), true) !!}
    {!! HTML::script('js/menuup.js', array(), true) !!}
@stop
