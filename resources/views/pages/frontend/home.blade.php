@extends('layouts.homelayout')


@section('homeContent')

    <!-- <div class="top-area"> -->
        
        <div class="mod-head-slide">
            <div class="">
                
                <div class="wrap-slide">
                    <p class="ta-c"><img src="images/ajax-loader.gif" alt="loading"></p>
                    <div id="sys_head_slide" class="head-slide flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('frontend/images/ex/banner_1.png')}}" alt="" />
                            </li>
                            <!-- <li>
                                <img src="{{ asset('frontend/images/ex/02_banner.jpg')}}" alt="" />
                            </li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    <!-- </div> -->

    <div id="sys_mod_filter" class="mod-filter">
        <div class="grid_frame">
            <div class="container_grid clearfix">
                <div class="grid_12">
                    <div class="lbl-search">
                        <input class="txt-search" id="sys_txt_search" type="search" placeholder="Search" />
                        <input type="submit" class="btn-search" value="" />
                    </div>
                    <div class="select-cate">
                        <div id="sys_selected_val" class="show-val">
                            <span data-cate-id="0">All type</span>
                            <i class="pick-down"></i>
                        </div>
                        <div id="sys_list_dd_cate" class="dropdown-cate">
                            <div class="first-lbl">All Categories</div>
                            <div class="wrap-list-cate clearfix">
                                <a href="#" data-cate-id="1">Baby &amp; Toddler</a>
                                <a href="#" data-cate-id="2">Automotive </a>
                                <a href="#" data-cate-id="3">Beverages</a>
                                <a href="#" data-cate-id="4">Books &amp; Magazines</a>
                                <a href="#" data-cate-id="5">Foods </a>
                                <a href="#" data-cate-id="6">Health Care</a>
                                <a href="#" data-cate-id="7">Home Entertainment</a>
                                <a href="#" data-cate-id="8">Personal Care </a>
                                <a href="#" data-cate-id="9">Pet Care </a>
                                <a href="#" data-cate-id="10">Professional Services </a>
                                <a href="#" data-cate-id="11">Toys and Games</a>
                                <a href="#" data-cate-id="12">Coupon Codes</a>
                                <a href="#" data-cate-id="13">Recipes</a>
                                <a href="#" data-cate-id="14">Household </a>
                            </div>
                        </div>
                    </div><!--end: .select-cate -->
                    <div class="range-days-left">
                        <span class="lbl-day">Days left</span>
                        <span id="sys_min_day" class="min-day"></span>
                        <div id="sys_filter_days_left" class="filter-days"></div>
                        <span id="sys_max_day" class="max-day"></span>
                    </div><!--end: .range-days-left -->
                    <input id="sys_apply_filter" class="btn btn-my type-1 btn-apply-filter" type="button"
                        value="Apply Filter">
                </div>
            </div>
        </div>
    </div><!--end: .mod-filter -->

    <div class="grid_frame page-content">
        <div class="container_grid">

<div class="grid_8 content">
                        <div class="mod-list-article">
                            <div class="list-article">
                                <div class="article-item">
                                    <a href="blog-detail.html"><img class="feature-img" src="{{ asset('frontend/images/ex/12-01.jpg')}}" alt="$ARTICLE_TITLE"/></a>
                                    <div class="flex">
                                        <div class="thumb-left wrap-date-post">
                                            <div class="date">
                                                <span class="day">12</span>
                                                <span class="my">May / 2013</span>
                                            </div>
                                            <a class="btn-more" href="blog-detail.html">Read more</a>
                                        </div>
                                        <div class="flex-body">
                                            <p class="art-title rs"><a href="blog-detail.html">Lorem ipsum dolor sit amet consectetuer </a></p>
                                            <p class="rs art-desc">Nullam magna velit, rhoncus at urna et, dapibus eu, fermentum eros. Integer sit amet purus hendrerit, porttitor ligula et, mollis est. Etiam odio est, pharetra non dui eu, blandit lacinia nunc. Proin vel pharetra lacus. Quisque at elit et elit elementum tempor quis quis mi</p>
                                        </div>
                                    </div>
                                </div><!--end: article-item -->
                                <div class="article-item">
                                    <a href="blog-detail.html"><img class="feature-img" src="{{ asset('frontend/images/ex/12-02.jpg')}}" alt="$ARTICLE_TITLE"/></a>
                                    <div class="flex">
                                        <div class="thumb-left wrap-date-post">
                                            <div class="date">
                                                <span class="day">31</span>
                                                <span class="my">Dec / 2013</span>
                                            </div>
                                            <a class="btn-more" href="blog-detail.html">Read more</a>
                                        </div>
                                        <div class="flex-body">
                                            <p class="art-title rs"><a href="blog-detail.html">Integer ut nisl eu mi aliquet</a></p>
                                            <p class="rs art-desc">Duis eleifend eu magna dapibus viverra. Proin lorem lorem, lacinia eu massa vel, tempus condimentum quam. Mauris nec cursus ipsum, nec rhoncus lectus. Sed velit magna, ullamcorper a metus quis, dictum sollicitudin diam. In sed metus sed augue tempor volutpat</p>
                                        </div>
                                    </div>
                                </div><!--end: article-item -->
                                <div class="article-item">
                                    <a href="blog-detail.html"><img class="feature-img" src="{{ asset('frontend/images/ex/12-04.jpg')}}" alt="$ARTICLE_TITLE"/></a>
                                    <div class="flex">
                                        <div class="thumb-left wrap-date-post">
                                            <div class="date">
                                                <span class="day">20</span>
                                                <span class="my">Feb / 2013</span>
                                            </div>
                                            <a class="btn-more" href="blog-detail.html">Read more</a>
                                        </div>
                                        <div class="flex-body">
                                            <p class="art-title rs"><a href="blog-detail.html">Nam lectus elit, condimentum sed imperdie</a></p>
                                            <p class="rs art-desc">Quisque justo magna, bibendum eget ante nec, luctus pellentesque libero. Duis interdum congue congue. Etiam purus lacus, tempus eu fringilla vehicula, ornare sed mauris.</p>
                                        </div>
                                    </div>
                                </div><!--end: article-item -->
                            </div>

                            <!-- <div class="pagination">
                                <a class="txt-nav" href="#">Newer post</a>
                                <a class="page-num active" href="#">1</a>
                                <a class="page-num" href="#">2</a>
                                <a class="page-num" href="#">3</a>
                                <a class="page-num" href="#">4</a>
                                <a class="page-num" href="#">5</a>
                                <a class="txt-nav" href="#">Older post</a>
                            </div> -->

                        </div><!--end: .mod-list-article -->
                    </div>

                    <div class="grid_4 sidebar">

                        <!-- <div class="mod-search block">
                            <h3 class="title-block">Find your coupon code</h3>
                            <div class="block-content">
                                <label class="lbl-wrap" for="sys_search_coupon_code">
                                    <input class="keyword-search" id="sys_search_coupon_code" type="search" placeholder="Search"/>
                                    <input type="submit" class="btn-search" value="">
                                </label>
                            </div>
                        </div> -->
                        <!--end: .mod-search -->
                        
                        <div class="mod-list-store block">
                            <h3 class="title-block">Popular store</h3>
                            <div class="block-content">
                                <div class="wrap-list-store clearfix">
                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="{{ asset('frontend/images/ex/04-07.jpg')}}" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="{{ asset('frontend/images/ex/04-12.jpg')}}" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="{{ asset('frontend/images/ex/04-11.jpg')}}" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                             <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="{{ asset('frontend/images/ex/04-12.jpg')}}" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="{{ asset('frontend/images/ex/04-11.jpg')}}" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="{{ asset('frontend/images/ex/04-10.jpg')}}" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <!-- end: .mod-list-store -->


                        <div class="mod-simple-coupon block">
                            <h3 class="title-block">Latest Blogs</h3>
                            <div class="block-content">
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/04-13.jpg')}}" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/04-14.jpg')}}" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/04-15.jpg')}}" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/04-16.jpg')}}" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/04-13.jpg')}}" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                            </div>
                        </div><!--end: .mod-simple-coupon -->
                        <div class="mod-ads"><a href="#"><img src="{{ asset('frontend/images/ex/04-17.jpg')}}" alt="$NAME"/></a></div>
                        <div class="mod-popular-tag block">
                            <h3 class="title-block">Popular Tag</h3>
                            <div class="block-content">
                                <a class="btn btn-gray type-tag" href="#">Sweet</a>
                                <a class="btn btn-gray type-tag" href="#">Lindor</a>
                                <a class="btn btn-gray type-tag" href="#">Food</a>
                                <a class="btn btn-gray type-tag" href="#">Lindt</a>
                                <a class="btn btn-gray type-tag" href="#">Walmart</a>
                                <a class="btn btn-gray type-tag" href="#">Chocolate</a>
                            </div>
                        </div>
                    </div>
        </div>

            
            <div class="mod-grp-coupon block clearfix">
                <div class="grid_12">
                    <h3 class="title-block has-link" style="text-align:center;">
                        Featured Coupons
                        <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                    </h3>
                </div>
                <div class="block-content list-coupon clearfix">
                    <div class="coupon-item grid_3">
                        <div class="coupon-content">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_02.jpg')}}"
                                            alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            <div class="coupon-price">$12.00 Off</div>
                            <div class="coupon-brand">Wallmart</div>
                            <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                            <div class="time-left">9 days 4 hours left</div>
                            <a class="btn btn-my btn-take-coupon" href="#">VIEW COUPON CODE</a>
                        </div>
                        <i class="stick-lbl hot-sale"></i>
                    </div><!--end: .coupon-item -->
                    <div class="coupon-item grid_3">
                        <div class="coupon-content">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_03.jpg')}}"
                                            alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            <div class="coupon-price">$17.50 off</div>
                            <div class="coupon-brand">Lindt Chocolate</div>
                            <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                            <div class="time-left">9 days 4 hours left</div>
                            <a class="btn btn-my btn-take-coupon" href="#">17GH0097</a>
                        </div>
                        <i class="stick-lbl trust-brand-y"></i>
                    </div><!--end: .coupon-item -->
                    <div class="coupon-item grid_3">
                        <div class="coupon-content">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_01.jpg')}}"
                                            alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            <div class="coupon-price">$3.00 Off</div>
                            <div class="coupon-brand">Lindt Chocolate</div>
                            <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                            <div class="time-left">2 days 14 hours left</div>
                            <a class="btn btn-my btn-take-coupon" href="#">Take Coupon</a>
                        </div>
                        <i class="stick-lbl trust-brand-b"></i>
                    </div><!--end: .coupon-item -->
                    <div class="coupon-item grid_3">
                        <div class="coupon-content">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_04.jpg')}}"
                                            alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            <div class="coupon-price">$7.00 Off</div>
                            <div class="coupon-brand">Wallmart</div>
                            <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off
                            </div>
                            <div class="time-left">12 days 1 hour left</div>
                            <a class="btn btn-my btn-take-coupon" href="#">Take Coupon</a>
                        </div>
                    </div><!--end: .coupon-item -->
                    <div class="coupon-item grid_3">
                        <div class="coupon-content">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_04.jpg')}}"
                                            alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            <div class="coupon-price">$2.00 Off</div>
                            <div class="coupon-brand">Lindt Chocolate</div>
                            <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                            <div class="time-left">9 days 4 hours left</div>
                            <a class="btn btn-my btn-take-coupon" href="#">Take Coupon</a>
                        </div>
                    </div><!--end: .coupon-item -->
                    <div class="coupon-item grid_3">
                        <div class="coupon-content">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_01.jpg')}}"
                                            alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            <div class="coupon-price">$11.50 off</div>
                            <div class="coupon-brand">Lindt Chocolate</div>
                            <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                            <div class="time-left">9 days 4 hours left</div>
                            <a class="btn btn-my btn-take-coupon" href="#">Take Coupon</a>
                        </div>
                    </div><!--end: .coupon-item -->
                    <div class="coupon-item grid_3">
                        <div class="coupon-content">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_03.jpg')}}"
                                            alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            <div class="coupon-price">$12.00 Off</div>
                            <div class="coupon-brand">SunMart</div>
                            <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                            <div class="time-left">2 days 14 hours left</div>
                            <a class="btn btn-my btn-take-coupon" href="#">Dismiss Coupon</a>
                        </div>
                    </div><!--end: .coupon-item -->
                    <div class="coupon-item grid_3">
                        <div class="coupon-content">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_02.jpg')}}"
                                            alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            <div class="coupon-price">$4.5 Off</div>
                            <div class="coupon-brand">Wallmart</div>
                            <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off
                            </div>
                            <div class="time-left">12 days 1 hour left</div>
                            <a class="btn btn-my btn-take-coupon" href="#">Take Coupon</a>
                        </div>
                    </div><!--end: .coupon-item -->
                </div>
                <!-- <a class="grid_6 btn btn-orange btn-load-more" href="#">Load more coupon</a> -->
            </div><!--end block: Featured Coupons-->
            <div class="mod-email-newsletter clearfix">
                <div class="grid_12">
                    <div class="wrap-form clearfix">
                        <div class="left-lbl">
                            <div class="big-lbl">newsletter</div>
                            <div class="sml-lbl">Don't miss a chance!</div>
                        </div>
                        <div class="wrap-email">
                            <label for="sys_email_newsletter">
                                <input type="email" id="sys_email_newsletter" placeholder="Enter your email here" />
                            </label>
                        </div>
                        <button class="btn btn-my btn-submit-email" type="submit">SUBSCRIBE NOW</button>
                    </div>
                </div>
            </div><!--end: .mod-email-newsletter-->
            <div class="mod-brands block clearfix">
                <div class="grid_12">
                    <h3 class="title-block has-link" style="text-align:center;">
                        Popular Categories
                        <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                    </h3>
                </div>
                <div class="block-content list-brand clearfix">
                    <div class="brand-item grid_4">
                        <div class="brand-content">
                            <div class="brand-logo">
                                <div class="wrap-img-logo">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}" alt="$BRAND_TITLE"></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end: .brand-item -->
                    <div class="brand-item grid_4">
                        <div class="brand-content">
                            <div class="brand-logo">
                                <div class="wrap-img-logo">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}" alt="$BRAND_TITLE"></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end: .brand-item -->
                    <div class="brand-item grid_4">
                        <div class="brand-content">
                            <div class="brand-logo">
                                <div class="wrap-img-logo">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}" alt="$BRAND_TITLE"></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end: .brand-item -->
                    <div class="brand-item grid_4">
                        <div class="brand-content">
                            <div class="brand-logo">
                                <div class="wrap-img-logo">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}" alt="$BRAND_TITLE"></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end: .brand-item -->
                    <div class="brand-item grid_4">
                        <div class="brand-content">
                            <div class="brand-logo">
                                <div class="wrap-img-logo">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}" alt="$BRAND_TITLE"></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end: .brand-item -->
                    <div class="brand-item grid_4">
                        <div class="brand-content">
                            <div class="brand-logo">
                                <div class="wrap-img-logo">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}" alt="$BRAND_TITLE"></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end: .brand-item -->
                </div>
            </div><!--end: .mod-brand -->
        </div>


    </div>



@endsection