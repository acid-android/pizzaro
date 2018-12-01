<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizzaro</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/font-awesome.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/animate.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/font-pizzaro.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/colors/red.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/jquery.mCustomScrollbar.min.css')}}" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="{{'assets/images/fav-icon.png'}}">
</head>
<body class="@yield('body-class')">
<div id="page" class="hfeed site">
    @include('layouts.header')

    @yield('content')

    @include('layouts.instagram-content')

    @include('layouts.subscribe')

    @include('layouts.footer');
</div>
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/social.share.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/scripts.min.js')}}"></script>

</body>
</html>
