<!DOCTYPE html>
<html lang="ko">

<head>
	<meta name="theme-color" content="rgb(255,255,255)" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<title>@yield('title')</title>
	<link rel="icon" sizes="192x192" href="/icon.png" />
	@yield('header_js')
</head>

<body>
	<header>
		@yield('header')
	</header>
	<!--헤더 메뉴-->
	@yield('header_menu')
	<!--헤더 메뉴-->
	<!--alert-->
	<div class="clip_alert" style="display:none;">
		<p>리뷰를 클립했습니다. 클립보드를 확인해 보세요!</p>
	</div>
	<!--alert-->
	<div id="container">
		@yield('content')
	</div>
	<!--제이쿼리----->
	@yield('footer_js')
	<!--제이쿼리----->
</body>

</html>