<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beyond Attraction</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Mitko Tochev">
    <meta name="theme-color" content="#ffd965">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/large-style.css" rel="stylesheet">

    <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
            crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126646318-1"></script>--}}
    {{--<script>--}}
    {{--window.dataLayer = window.dataLayer || [];--}}
    {{--function gtag(){dataLayer.push(arguments);}--}}
    {{--gtag('js', new Date());--}}

    {{--gtag('config', 'UA-126646318-1');--}}
    {{--</script>--}}

    @yield('page-header')
</head>
<body>
<div class="content container-grid">
    @include('theme.menu')
    @include('theme.header')
    @include('theme.content')
    @include('theme.footer')
</div>
</body>
</html>