

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $siteinfo['title'] }}</title>
    <meta name="keywords" content="{{ $siteinfo['keywords'] }}">
    <meta name="description" content="{{ $siteinfo['description'] }}">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    @include('index.common.header')

    <div class="container">
        @yield('content')
    </div>

    @include('index.common.footer')
    @yield('script')
</body>
</html>
