@extends('layouts.master')

@section('title')
검색결과
@stop

@section('header_css_js')
<link href="../css/base.css" rel="stylesheet" type="text/css" />
  <link href="../css/h_type1.css" rel="stylesheet" type="text/css" />
  <link href="../css/search.css" rel="stylesheet" type="text/css" />
  <link href="../css/feed_list.css" rel="stylesheet" type="text/css" />
  <script src="//code.jquery.com/jquery-latest.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
  <script src="/js/grid.js"></script>
@stop

@section('header')
  @include('layouts.header.header_type1')
  @include('layouts.header.menu_slide')
  @include('layouts.header.menu_search')
@stop


@section('container')
  <div class="hash_listwrap">
       <ul class="hash_list">
           @include('assets.result.hash_list')
       </ul>
   </div>
@stop

@section('footer_js')
  @include('assets.footer')
@stop

@section('footer_js')
  <script src="/js/common_menu.js"></script>
  <script src="/js/menuup.js"></script>
@stop
