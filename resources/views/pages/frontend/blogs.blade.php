@extends('layouts.homelayout')


@section('homeContent')




    <div class="grid_frame page-content">

        <div class="mod-grp-coupon block clearfix" style="margin-top:30px;">
            <div class="grid_12">
                <h1 class="title-block has-link" style="text-align:center; font-size: 30px;">
                    All Blogs
                </h1>
            </div>
        </div>

        <div class="container_grid">

            <div class="layout-2cols pt-hight clearfix">

                <div class="grid_8 content">
                    <div class="mod-list-article">
                        <div class="list-article">
                            @foreach ($blogs as $data)
                                <div class="article-item">
                                    <a><img class="feature-img" src="{{ asset('backend/images/blogs')}}/{{ $data->blog_logo }}"
                                            alt="$ARTICLE_TITLE" /></a>
                                    <div class="flex">
                                        <div class="thumb-left wrap-date-post">
                                            <div class="date">
                                                <span class="day">12</span>
                                                <span class="my">May / 2025</span>
                                            </div>
                                            <a class="btn-more">Read more</a>
                                        </div>
                                        <div class="flex-body">
                                            <p class="art-title rs"><a>{{  $data->blog_title }} </a></p>
                                            <p class="rs art-desc" style="font-weight: 1px !Important;">
                                                {!! $data->blog_content !!}
                                            </p>
                                        </div>
                                    </div>
                                </div><!--end: article-item -->
                            @endforeach
                        </div>

                        <div class="pagination">
                            <a class="txt-nav" href="#">Newer post</a>
                            <a class="page-num active" href="#">1</a>
                            <a class="page-num" href="#">2</a>
                            <a class="page-num" href="#">3</a>
                            <a class="page-num" href="#">4</a>
                            <a class="page-num" href="#">5</a>
                            <a class="txt-nav" href="#">Older post</a>
                        </div>
                    </div><!--end: .mod-list-article -->
                </div>

                <div class="grid_4 sidebar">

                    <!-- <div class="mod-search block">
                                <h3 class="title-block">Find your coupon code</h3>
                                <div class="block-content">
                                    <label class="lbl-wrap" for="sys_search_coupon_code">
                                        <input class="keyword-search" id="sys_search_coupon_code" type="search"
                                            placeholder="Search" />
                                        <input type="submit" class="btn-search" value="">
                                    </label>
                                </div>
                            </div> -->
                    <!--end: .mod-search -->
                    <div class="mod-list-store block">
                        <h3 class="title-block">Popular store</h3>
                        <div class="block-content">
                            <div class="wrap-list-store clearfix">
                                @foreach ($stores as $data)
                                    <a class="brand-logo" href="#">
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img
                                                        src="{{ asset('backend/images/stores')}}/{{ $data->store_logo }}"
                                                        alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div><!--end: .mod-list-store -->
                    <div class="mod-simple-coupon block">
                        <h3 class="title-block">Latest coupon</h3>
                        <div class="block-content">
                            <div class="coupons-code-item simple flex">
                                <div class="brand-logo thumb-left">
                                    <div class="wrap-logo">
                                        <div class="center-img">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img
                                                    src="{{ asset('frontend/images/ex/04-13.jpg')}}" alt="$BRAND_NAME"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-content flex-body">
                                    <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating
                                            Price Match Guarantee Hotels</a></p>
                                </div>
                            </div><!--end: .coupons-code-item -->
                            <div class="coupons-code-item simple flex">
                                <div class="brand-logo thumb-left">
                                    <div class="wrap-logo">
                                        <div class="center-img">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img
                                                    src="{{ asset('frontend/images/ex/04-14.jpg')}}" alt="$BRAND_NAME"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-content flex-body">
                                    <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating
                                            Price Match Guarantee Hotels</a></p>
                                </div>
                            </div><!--end: .coupons-code-item -->
                            <div class="coupons-code-item simple flex">
                                <div class="brand-logo thumb-left">
                                    <div class="wrap-logo">
                                        <div class="center-img">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img
                                                    src="{{ asset('frontend/images/ex/04-15.jpg')}}" alt="$BRAND_NAME"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-content flex-body">
                                    <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating
                                            Price Match Guarantee Hotels</a></p>
                                </div>
                            </div><!--end: .coupons-code-item -->
                            <div class="coupons-code-item simple flex">
                                <div class="brand-logo thumb-left">
                                    <div class="wrap-logo">
                                        <div class="center-img">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img
                                                    src="{{ asset('frontend/images/ex/04-16.jpg')}}" alt="$BRAND_NAME"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-content flex-body">
                                    <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating
                                            Price Match Guarantee Hotels</a></p>
                                </div>
                            </div><!--end: .coupons-code-item -->
                            <div class="coupons-code-item simple flex">
                                <div class="brand-logo thumb-left">
                                    <div class="wrap-logo">
                                        <div class="center-img">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img
                                                    src="{{ asset('frontend/images/ex/04-13.jpg')}}" alt="$BRAND_NAME"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-content flex-body">
                                    <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating
                                            Price Match Guarantee Hotels</a></p>
                                </div>
                            </div><!--end: .coupons-code-item -->
                        </div>
                    </div><!--end: .mod-simple-coupon -->
                    <div class="mod-ads"><a href="#"><img src="{{ asset('frontend/images/ex/04-17.jpg')}}"
                                alt="$NAME" /></a></div>
                    <div class="mod-popular-tag block">
                        <h3 class="title-block">Popular Tag</h3>
                        <div class="block-content">
                            <a class="btn btn-gray type-tag">Fashion</a>
                            <a class="btn btn-gray type-tag">Beauty</a>
                            <a class="btn btn-gray type-tag">Sports</a>
                            <a class="btn btn-gray type-tag">Coupon</a>
                            <a class="btn btn-gray type-tag">Saving</a>
                            <a class="btn btn-gray type-tag">Offers</a>
                            <a class="btn btn-gray type-tag">Brands</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

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
    </div>
@endsection