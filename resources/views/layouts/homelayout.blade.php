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
    <!--[if IE 9]>
    <link rel="stylesheet" href="css/ie9.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie8.css"/>
    <![endif]-->

    <link rel="stylesheet" href="{{ asset('frontend/css/res-menu.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}" />
    <!--[if lte IE 8]>
        <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->

</head>

<body class="gray"><!--<div class="alert_w_p_u"></div>-->
    <div class="container-page">
        <div class="mp-pusher" id="mp-pusher">
            <header class="mod-header">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="grid_12">
                            <div class="header-content clearfix">
                                <h1 id="logo" class="rs">
                                    <a href="/">
                                        <img style="max-width:50%"
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
                <div id="sys_pop_login" class="pop-login">
                    <div class="viewport-pop">
                        <div class="transport-viewer clearfix">
                            <div class="mod-register">
                                <h3 class="rs title-mod">Hello pretty! Welcome to Couponday.com</h3>
                                <div class="wrap-form-reg clearfix">
                                    <form action="#">
                                        <div class="left-form">
                                            <label class="wrap-txt" for="sys_email">
                                                <input class="input-txt" id="sys_email" type="email"
                                                    placeholder="you@mail.com">
                                            </label>
                                            <label class="wrap-txt" for="sys_pass">
                                                <input class="input-txt" id="sys_pass" type="password"
                                                    placeholder="password please!">
                                            </label>
                                            <label class="wrap-check" for="sys_chk_news">
                                                <input id="sys_chk_news" class="input-chk" type="checkbox"> Remember me
                                                <i class="icon iUncheck"></i>
                                                <a class="lost-pass" href="#">Forgot password ?</a>
                                            </label>
                                            <div class="wrap-login-btn">
                                                <button class="btn-flat gr btn-submit-reg" type="submit">Login</button>
                                                <div class="sep-connect">
                                                    <span>Or</span>
                                                </div>
                                                <div class="grp-connect">
                                                    <a class="btn-flat fb" href="#">Facebook</a>
                                                    <a class="btn-flat gg" href="#">Google</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-create-acc">
                                            <img class="account" src="images/reg-account.png" alt="Couponday.com">
                                            <p class="lbl-dung-lo rs">Not a member? Don’t worry</p>
                                            <a id="sys_link_reg_panel" href="register.html"
                                                class="btn-flat yellow btn-submit-reg">Create an account</a>
                                            <div id="sys_warning_sms" class="warning-sms"
                                                data-warning-txt="No spam guarantee,No disturb,Promotion News"></div>
                                        </div>
                                    </form>
                                    <i class="line-sep"></i>
                                </div>
                            </div><!--end: Login panel -->

                        </div>
                        <div id="sys_paging_state" class="paging-state">
                            <i class="active"></i>
                            <i></i>
                        </div>
                        <i id="sys_close_login_popup" class="icon iClose close-popop"></i>
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
                                © Copyrights {{ date('Y') }} <a href="/">{{ $site_content->site_title ?? 'Not Found' }}
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

    <!--[if lte IE 9]>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/create.placeholder.js"></script>
<![endif]-->
    <!--[if lte IE 8]>
<script type="text/javascript" src="js/ie8.js"></script>
<![endif]-->

</body>

</html>