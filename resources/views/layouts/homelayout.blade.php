<!DOCTYPE html>
<html>

<head>
    <title>{{ $site_content->site_title ?? 'Not Found' }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css')}}" />
    <!--css plugin-->
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.nouislider.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.popupcommon.css')}}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style-dark.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style-gray.css')}}">
    <link rel="shortcut icon" href="{{ asset('backend/images/uploads/' . $site_content->favicon_logo) }}"
        type="image/x-icon">


    <link rel="stylesheet" href="{{ asset('frontend/css/res-menu.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}" />

</head>

<body class="gray">
    <div class="container-page">
        <div class="mp-pusher" id="mp-pusher">
            <header class="mod-header">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="grid_12">
                            <div class="header-content clearfix">
                                <h1 id="logo" class="rs">
                                    <a href="/">
                                        <img style="max-height:30px; display:block;"
                                            src="{{ asset('backend/images/uploads/' . $site_content->site_logo) }}"
                                            alt="$SITE_NAME" />
                                    </a>
                                </h1>
                                <!-- <a style="color: #6375ff; margin-top:2px;"
                                    class="btn btn-green type-login btn-login" href="{{ route('admin.login') }}">Login</a> -->
                                <nav class="main-nav">
                                    <ul id="main-menu" class="nav nav-horizontal clearfix">
                                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                                            <a href="/">Home</a>
                                        </li>

                                        <li class="{{ Request::is('entertainment') ? 'active' : '' }}">
                                            <a href="/entertainment">Entertainment</a>
                                        </li>

                                        <li class="{{ Request::is('apparel') ? 'active' : '' }}">
                                            <a href="/apparel">Apparel & Clothing</a>
                                        </li>
                                        <li class="{{ Request::is('travel') ? 'active' : '' }}">
                                            <a href="/travel">Travel</a>
                                        </li>

                                        <li class="{{ Request::is('categories') ? 'active' : '' }}">
                                            <a href="/categories">All Categories</a>
                                        </li>
                                    </ul>
                                    <a id="sys_btn_toogle_menu" class="btn-toogle-res-menu" href="#alternate-menu"></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header><!--end: header.mod-header -->

            <nav id="mp-menu" class="mp-menu alternate-menu">
                <div class="mp-level">
                    <h2>Menu</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/entertainment">Entertainment</a></li>
                        <li><a href="/apparel">Apparel & Clothing</a></li>
                        <li><a href="/travel">Travel</a></li>
                        <li><a href="/categories">All Categories</a></li>
                    </ul>
                </div>
            </nav><!--end: .mp-menu -->

            @yield('homeContent')

            <div class="grid_frame page-content">
                <div class="container_grid">
                    <div class="mod-email-newsletter clearfix">
                        <div class="grid_12">
                            <div class="wrap-form clearfix">
                                <div class="left-lbl">
                                    <div class="big-lbl">newsletter</div>
                                    <div class="sml-lbl">Don't miss a chance!</div>
                                </div>
                                <div class="wrap-email">
                                    <label for="sys_email_newsletter">
                                        <input type="email" id="sys_email_newsletter"
                                            placeholder="Enter your email here" />
                                    </label>
                                </div>
                                <button class="btn btn-my btn-submit-email" type="submit">SUBSCRIBE NOW</button>
                            </div>
                        </div>
                    </div><!--end: .mod-email-newsletter-->
                </div>
            </div>


            <footer class="mod-footer">
                <div class="footer-top">
                    <div class="grid_frame">
                        <div class="container_grid clearfix">
                            <div class="grid_3">
                                <div class="company-info">
                                    <img src="{{ asset('backend/images/uploads/' . $site_content->footer_logo) }}"
                                        alt="CouponDay" />
                                    <p class="rs">{{ $site_content->site_about }}</p>
                                </div>
                            </div>
                            <div class="grid_3">
                                <div class="block social-link">
                                    <h3 class="title-block" style="color:white;">Follow us</h3>
                                    <div class="block-content">
                                        <ul class="rs">
                                            <li>
                                                <i class="fa fa-facebook-square fa-2x"></i>
                                                <a href="#" target="_blank">Our Facebook page</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-twitter-square fa-2x"></i>
                                                <a href="#" target="_blank">Follow our Tweets</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-pinterest-square fa-2x"></i>
                                                <a href="#" target="_blank">Follow our Pin board</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--end: Follow us -->
                            <div class="grid_3">
                                <div class="block intro-video">
                                    <h3 class="title-block" style="color:white;">Intro Video</h3>
                                    <div class="block-content">
                                        <div class="wrap-video" id="sys_wrap_video">
                                            <div class="lightbox-video">
                                                <a class="html5lightbox" href="http://player.vimeo.com/video/36932496"
                                                    title=""><i class="btn-play"></i><img
                                                        src="{{ asset('frontend/images/video-img.png')}}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end: Intro Video -->
                            <div class="grid_3">
                                <div class="block blog-recent">
                                    <h3 class="title-block" style="color:white;">Latest blog</h3>
                                    <div class="block-content">
                                        <div class="entry-item flex">
                                            <a class="thumb-left">
                                                <img src="{{ asset('frontend/images/ex/04-15.jpg')}}" alt="$TITLE" />
                                            </a>
                                            <div class="flex-body"><a>In today’s digital-first world, personal branding
                                                    is more important.</a></div>
                                        </div>
                                        <div class="entry-item flex">
                                            <a class="thumb-left">
                                                <img src="{{ asset('frontend/images/ex/04-16.jpg')}}" alt="$TITLE" />
                                            </a>
                                            <div class="flex-body"><a>Let’s start with the positives. Social media is a
                                                    powerful tool</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end: blog-recent -->
                        </div>
                    </div>
                </div><!--end: .foot-top-->

                <div class="foot-copyright">
                    <div class="grid_frame">
                        <div class="container_grid clearfix">
                            <div class="left-link">
                                <a href="#">Home</a>
                                <a href="#">Term of conditions</a>
                                <a href="#">Privacy</a>
                                <a href="#">Support</a>
                                <a href="#">Contact</a>
                            </div>
                            <div class="copyright">
                                ©Copyrights {{ date('Y') }} <a href="/">{{ $site_content->site_title ?? 'Not Found' }}
                                </a>All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.10.2.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.nouislider.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.popupcommon.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/html5lightbox.js')}}"></script>
    <!--//js for responsive menu-->
    <script type="text/javascript" src="{{ asset('frontend/js/modernizr.custom.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/classie.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/mlpushmenu.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/script.js')}}"></script>

</body>

</html>