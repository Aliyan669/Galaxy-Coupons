<!DOCTYPE html>
<html>

<head>
    <title>Galaxy Coupon</title>
    <meta charset="utf-8">
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
                                        <img style="max-width:50%" src="{{ asset('frontend/images/galaxylogo.png')}}"
                                            alt="$SITE_NAME" />
                                    </a>
                                </h1>
                                <a id="sys_head_login" style="color: #6375ff;"
                                    class="btn btn-green type-login btn-login" href="#">Login</a>
                                <nav class="main-nav">
                                    <ul id="main-menu" class="nav nav-horizontal clearfix">
                                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="{{ Request::is('store') ? 'active' : '' }}">
                                            <a href="/store">Stores</a>
                                        </li>

                                        <li class="{{ Request::is('blogs') ? 'active' : '' }}">
                                            <a href="/blogs">Blogs</a>
                                        </li>
                                        <li class="{{ Request::is('categories') ? 'active' : '' }}">
                                            <a href="/categories">Categories</a>
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
                            <div class="mod-register">
                                <h3 class="rs title-mod">Hello pretty! Welcome to Couponday.com</h3>
                                <div class="desc-reg">Sign up for free and get exclusive access to members-only savings,
                                    rewards and special promotions from Coupons.com. Enter in an email and a password or
                                    sign up with Facebook.</div>
                                <div class="wrap-form-reg clearfix">
                                    <form action="#">
                                        <div class="left-form">
                                            <label class="wrap-txt" for="sys_email_reg">
                                                <input class="input-txt" id="sys_email_reg" type="email"
                                                    placeholder="you@mail.com" />
                                            </label>
                                            <label class="wrap-txt" for="sys_pass_reg">
                                                <input class="input-txt" id="sys_pass_reg" type="password"
                                                    placeholder="password please!" />
                                            </label>
                                            <label class="wrap-check" for="sys_chk_news_reg">
                                                <input id="sys_chk_news_reg" class="input-chk" type="checkbox" /> Send
                                                me the weekly Couponday.com’s offers.
                                                <i class="icon iUncheck"></i>
                                            </label>
                                            <label class="wrap-check" for="sys_chk_agree">
                                                <input id="sys_chk_agree" class="input-chk" type="checkbox" /> I agree
                                                to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                                                <i class="icon iUncheck"></i>
                                            </label>
                                        </div>
                                        <div class="right-connect">
                                            <button class="btn-flat yellow btn-submit-reg" type="submit">Create an
                                                account</button>
                                            <div class="sep-connect">
                                                <span>Or</span>
                                            </div>
                                            <div class="grp-connect">
                                                <p class="rs">Sign up using your account on:</p>
                                                <a class="btn-flat fb" href="#">Facebook</a>
                                                <a class="btn-flat gg" href="#">Google</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <p class="rs wrap-link-back">
                                    <a id="sys_link_login_panel" href="login.html" class="link-back">
                                        <i class="pick-r"></i>
                                        Back to login
                                    </a>
                                </p>
                            </div><!--end: Register panel -->
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="coupon.html">Coupons</a></li>
                        <li class="has-sub">
                            <a href="coupon-code.html">Coupons Code</a>
                            <div class="mp-level">
                                <h2>Coupons Code</h2>
                                <a class="mp-back" href="#">back</a>
                                <ul>
                                    <li><a href="coupon-code.html">Coupons Code 1</a></li>
                                    <li><a href="coupon-code-2.html">Coupons Code 2</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-sub">
                            <a href="brand-list.html">Brands</a>
                            <div class="mp-level">
                                <h2>Brands</h2>
                                <a class="mp-back" href="#">back</a>
                                <ul>
                                    <li><a href="brand-detail-1.html">Brand Detail 1</a></li>
                                    <li><a href="brand-detail-2.html">Brand Detail 2</a></li>
                                    <li><a href="brand-detail-3.html">Brand Detail 3</a></li>
                                    <li><a href="brand-detail-4.html">Brand Detail 4</a></li>
                                    <li><a href="brand-detail-5.html">Brand Detail 5</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="my-coupon.html">My coupons(12)</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                </div>
            </nav><!--end: .mp-menu -->

            @yield('homeContent')


            <footer class="mod-footer">
                <div class="footer-top">
                    <div class="grid_frame">
                        <div class="container_grid clearfix">
                            <div class="grid_3">
                                <div class="company-info">
                                    <img src="{{ asset('frontend/images/galaxylogo.png')}}" alt="CouponDay" />
                                    <p class="rs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                        wisi enim ad minim veniam, quis nostrud</p>
                                    <p class="rs">
                                        1200 Balh Blah Avenue <br />
                                        Hanoi, Vietnam 12137
                                    </p>
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
                                            <a class="thumb-left" href="#">
                                                <img src="{{ asset('frontend/images/ex/04-15.jpg')}}" alt="$TITLE" />
                                            </a>
                                            <div class="flex-body"><a href="#">Lorem ipsum dolor sit amet, consectetuer
                                                    adipiscing eli</a></div>
                                        </div>
                                        <div class="entry-item flex">
                                            <a class="thumb-left" href="#">
                                                <img src="{{ asset('frontend/images/ex/04-16.jpg')}}" alt="$TITLE" />
                                            </a>
                                            <div class="flex-body"><a href="#">Ut wisi enim ad minim veniam, quis
                                                    nostrud</a></div>
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
                                <a href="templateshub.net">Templates Hub</a>
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