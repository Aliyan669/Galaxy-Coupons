@extends('layouts.homelayout')

@section('homeContent')

    <!-- <div class="top-area"> -->

    <!-- <div class="mod-head-slide">
                            <div class="">

                                <div class="wrap-slide">
                                    <p class="ta-c"><img src="images/ajax-loader.gif" alt="loading"></p>
                                    <div id="sys_head_slide" class="head-slide flexslider">
                                        <ul class="slides">
                                            <li>
                                                <img src="{{ asset('frontend/images/ex/banner_1.png')}}" alt="" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div> -->

    <!-- </div> -->

    <!-- <div id="sys_mod_filter" class="mod-filter">
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
                                        </div>
                                        <div class="range-days-left">
                                            <span class="lbl-day">Days left</span>
                                            <span id="sys_min_day" class="min-day"></span>
                                            <div id="sys_filter_days_left" class="filter-days"></div>
                                            <span id="sys_max_day" class="max-day"></span>
                                        </div>
                                        <input id="sys_apply_filter" class="btn btn-my type-1 btn-apply-filter" type="button"
                                            value="Apply Filter">
                                    </div>
                                </div>
                            </div>
                        </div> -->
    <!--end: .mod-filter -->



    <div class="grid_frame page-content">

        <div class="mod-brands block clearfix" style="margin:5px 0px;">

            <!-- <div class="grid_12">
                                    <h3 class="title-block has-link" style="text-align:center;">
                                        Popular Categories
                                        <a href="/categories" class="link-right">See all <i class="pick-right"></i></a>
                                    </h3>
                                </div> -->
            <div class="grid_12">
                <div class="block-content list-brand" style="display: flex; flex-wrap: wrap; gap: 10px;">

                    @foreach ($top_blogs as $data)
                        <div style="display: flex; width: 47%; background: #fff; padding: 12px; border-radius: 2px;">

                            <!-- Image Section -->
                            <div
                                style="flex-shrink: 0; width: 100px; height: 100px; overflow: hidden; border-radius: 2px; margin-right: 15px;">
                                <img src="{{ asset('backend/images/blogs') }}/{{ $data->blog_logo }}" alt="Blog Image"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>

                            <!-- Text Section -->
                            <div style="flex-grow: 1 ">
                                <p class="art-title rs" style="font-size:15px"><a
                                        href="{{ url('/blog-detail/' . $data->slug) }}"
                                        style="color:#3d5366; ">{{  $data->blog_title }} </a></p>
                                <p style="font-size: 11px; margin: 2px 0px;">
                                    {!! Str::words(strip_tags($data->blog_content), 30, '...') !!}
                                </p>
                                <a style="display: inline-block;  font-size: 12px; color: #3d5366; text-decoration: none;"
                                    href="{{ url('/blog-detail/' . $data->slug) }}">Read
                                    More</a>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>

        </div>

        <div class="container_grid">



            <div class="layout-2cols  clearfix">

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
                                            <a href="{{ url('/blog-detail/' . $data->slug) }}" class="btn-more">Read more</a>
                                        </div>
                                        <div class="flex-body">
                                            <p class="art-title rs"><a
                                                    href="{{ url('/blog-detail/' . $data->slug) }}">{{  $data->blog_title }}
                                                </a>
                                            </p>
                                            <p class="rs art-desc" style="font-weight: 1px !Important;">
                                                {!! collect(explode('</p>', $data->blog_content))->take(1)->implode('</p>') !!}


                                            </p>
                                        </div>
                                    </div>
                                </div><!--end: article-item -->
                            @endforeach
                        </div>
                    </div><!--end: .mod-list-article -->
                </div>

                <div class="grid_4 sidebar">

                    <div class="mod-simple-coupon block">


                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container" style="margin-bottom: 30px;">
                            <div id="tradingview-widget"></div>
                            <script type="text/javascript"
                                src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                    {
                                        "colorTheme": "dark",
                                            "dateRange": "1D",
                                                "showChart": true,
                                                    "locale": "en",
                                                        "largeChartUrl": "",
                                                            "isTransparent": false,
                                                                "showSymbolLogo": true,
                                                                    "width": "100%",
                                                                        "height": "550",
                                                                            "tabs": [
                                                                                {
                                                                                    "title": "Gainers",
                                                                                    "symbols": [
                                                                                        { "s": "NASDAQ:TSLA", "d": "Tesla" },
                                                                                        { "s": "NASDAQ:AAPL", "d": "Apple" },
                                                                                        { "s": "NASDAQ:AMZN", "d": "Amazon" },
                                                                                        { "s": "NASDAQ:MSFT", "d": "Microsoft" },
                                                                                        { "s": "NYSE:NKE", "d": "Nike" }
                                                                                    ],
                                                                                    "originalTitle": "Gainers"
                                                                                },
                                                                                {
                                                                                    "title": "Losers",
                                                                                    "symbols": [
                                                                                        { "s": "NYSE:T", "d": "AT&T" },
                                                                                        { "s": "NYSE:WMT", "d": "Walmart" },
                                                                                        { "s": "NYSE:DIS", "d": "Disney" }
                                                                                    ],
                                                                                    "originalTitle": "Losers"
                                                                                }
                                                                            ]
                                    }
                                </script>
                        </div>

                        @foreach ($site_blogs as $data)
                            <div class="brand-item">
                                <div class="brand-content" style="padding:5px;">
                                    <div class="brand-logo  ">
                                        <div class="wrap-img-logo">
                                            <span class="ver_hold"></span>
                                            <a class="ver_container"><img
                                                    src="{{ asset('backend/images/blogs')}}/{{ $data->blog_logo }}"
                                                    alt="$BRAND_TITLE"> </a>

                                            <p style="text-align:left; padding-left: 5px; font-size:15px"><a
                                                    href="{{ url('/blog-detail/' . $data->slug) }}"
                                                    style="color:#3d5366; ">{{  $data->blog_title }} </a></p>
                                            <p style="text-align:left; padding: 0px 5px; font-weight: 100; font-size:12px; ">
                                                {!! Str::words(strip_tags($data->blog_content), 20, '...') !!}

                                                <a href="{{ url('/blog-detail/' . $data->slug) }}"
                                                    style="display: inline-block;  font-size: 12px; color: #3d5366; text-decoration: none;">Read
                                                    More</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        <h3 class="title-block">Latest News & Articles</h3>
                        <div class="block-content">
                            @foreach ($latest_blogs as $data)
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img"
                                                style="flex-shrink: 0; width: 70px; height: 70px; overflow: hidden; border-radius: 2px; ">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img
                                                        style="width: 100%; height: 100%; object-fit: cover;"
                                                        src="{{ asset('backend/images/blogs')}}/{{ $data->blog_logo }}"
                                                        alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body" style="flex-grow: 1 ">


                                        <p class="rs save-price" style="font-size: 11px; margin: 2px 5px;">
                                            {!! Str::words(strip_tags($data->blog_content), 21, '...') !!}
                                        </p>


                                    </div>
                                </div><!--end: .coupons-code-item -->

                            @endforeach

                        </div>



                    </div><!--end: .mod-simple-coupon -->
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

            <div class="mod-brands block clearfix">

                <!-- <div class="grid_12">
                                    <h3 class="title-block has-link" style="text-align:center;">
                                        Popular Categories
                                        <a href="/categories" class="link-right">See all <i class="pick-right"></i></a>
                                    </h3>
                                </div> -->
                <div class="grid_12">
                    <div class="block-content list-brand clearfix">

                        @foreach ($new_blogs as $data)
                            <div class="brand-item grid_4">
                                <div class="brand-content" style="padding:5px;">
                                    <div class="brand-logo  ">
                                        <div class="wrap-img-logo">
                                            <span class="ver_hold"></span>
                                            <a class="ver_container"><img
                                                    src="{{ asset('backend/images/blogs')}}/{{ $data->blog_logo }}"
                                                    alt="$BRAND_TITLE"> </a>

                                            <p style="text-align:left; padding-left: 5px; font-size:15px"><a
                                                    href="{{ url('/blog-detail/' . $data->slug) }}" style="color:#3d5366; ">
                                                    {{  $data->blog_title }} </a></p>
                                            <p style="text-align:left; padding-left: 5px; font-weight: 100; font-size:12px; ">
                                                {!! Str::words(strip_tags($data->blog_content), 20, '...') !!} <a
                                                    href="{{ url('/blog-detail/' . $data->slug) }}"
                                                    style="display: inline-block;  font-size: 12px; color: #3d5366; text-decoration: none;">Read
                                                    More</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end: .brand-item -->
                        @endforeach

                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection