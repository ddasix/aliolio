<!DOCTYPE html>
<html>

<head>
    <meta name="theme-color" content="rgb(255,255,255)" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <link rel="icon" sizes="192x192" href="/icon.png" />
    <title>@yield('title')</title>
    @yield('header_css_js')
</head>

<body>
    @yield('header')
    <div id="container">
        @yield('container')
    </div>
    @yield('out_footer')
    @yield('footer_js')
</body>

</html>
