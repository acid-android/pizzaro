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
    <div class="footer-v1-static-content">
        <div class="kc-css-994088 kc_row">
            <div class="kc-row-container  kc-container">
                <div class="kc-wrap-columns">
                    <div class="kc-css-194963 kc_col-sm-12 kc_column kc_col-sm-12">
                        <div class="stretch-full-width kc-col-container">
                            <div class="kc-css-126640 kc_shortcode kc_wrap_instagram  kc_ins_col_6">
                                <ul class="row">
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4Gyf2hTkr/" target="_blank"><img alt="" src="assets/images/footer/1.jpg"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4Gtf1BCmM/" target="_blank"><img alt="" src="assets/images/footer/2.jpg"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4GnvhBqNt/" target="_blank"><img alt="" src="assets/images/footer/3.jpg"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4GhsuhQE4/" target="_blank"><img alt="" src="assets/images/footer/4.jpg"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4F_ZbBuxI/" target="_blank"><img alt="" src="assets/images/footer/5.jpg"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4F8fLhgkp/" target="_blank"><img alt="" src="assets/images/footer/6.jpg"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="newsletter-subscription stretch-full-width"  style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/26.jpg ); height: 460px;">
        <div class="caption">
            <h3 class="title">Subscribe to Newsletter</h3>
            <span class="marketing-text">Subscribe to receive our weekly Hot Promotions every Monday!</span>
            <form>
                <div class="newsletter-form">
                    <input type="text" placeholder="Type here your email address to receive our newsletter">
                    <button class="button" type="button">Sign Up</button>
                </div>
            </form>
        </div>
    </section>

    @include('layouts.footer');
    <!-- #colophon -->
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
