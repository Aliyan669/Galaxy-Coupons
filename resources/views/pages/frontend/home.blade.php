@extends('layouts.homelayout')


@section('homeContent')

<!-- Custom Coupon Modal -->
<div id="customModal" style="display:none; position:fixed; z-index:9999; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5);">
  <div style="width:400px; margin:100px auto; background:#fff; padding:20px; border-radius:8px; text-align:center; position:relative;">
    <h4 id="modalCouponTitle"  style="margin-bottom:10px; font-size:25px; color: black; "></h4>

    <div id="codeSection" style="display:none; ">
      <input type="text" id="couponCodeInput" style="padding:4px 10px; width:50%; text-align: center; font-size:18px; border: none;"> 
      <button class="btn btn-my btn-take-coupon" style="margin-top: 20px; margin-bottom:25px; margin-left:5px;" onclick="copyCode()">Copy Code</button>
    </div>

    <div id="dealSection" style="display:none; font-size: 15px; margin-top: 20px; ">
      <p>This is a deal – no code needed</p>
    </div>
    <button class="btn btn-red" onclick="closeModal()" style="margin-top:10px;">Close</button>
  </div>
</div>

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
                           @foreach ($blogs as $data)
                        <div class="article-item">
                            <a ><img class="feature-img"
                                    src="{{ asset('backend/images/blogs')}}/{{ $data->blog_logo }}" alt="$ARTICLE_TITLE" /></a>
                            <div class="flex">
                                <div class="thumb-left wrap-date-post">
                                    <div class="date">
                                        <span class="day">12</span>
                                        <span class="my">May / 2025</span>
                                    </div>
                                    <a class="btn-more">Read more</a>
                                </div>
                                <div class="flex-body">
                                    <p class="art-title rs"><a >{{  $data->blog_title }} </a></p>
                                    <p class="rs art-desc" style="font-weight: 1px !Important;"> {!! $data->blog_content !!}</p>
                                </div>
                            </div>
                        </div><!--end: article-item -->
                          @endforeach
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

                <div class="mod-list-store block">
                    <h3 class="title-block">Popular store</h3>
                    <div class="block-content">
                        <div class="wrap-list-store clearfix">
                            @foreach ($stores as $data)
                                <a class="brand-logo" href="/store">
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
                                        <a href="#" class="ver_container"><img
                                                src="{{ asset('frontend/images/ex/04-13.jpg')}}" alt="$BRAND_NAME"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-content flex-body">
                                <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price
                                        Match Guarantee Hotels</a></p>
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
                                <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price
                                        Match Guarantee Hotels</a></p>
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
                                <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price
                                        Match Guarantee Hotels</a></p>
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
                                <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price
                                        Match Guarantee Hotels</a></p>
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
                                <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price
                                        Match Guarantee Hotels</a></p>
                            </div>
                        </div><!--end: .coupons-code-item -->
                    </div>
                </div><!--end: .mod-simple-coupon -->
                <div class="mod-ads"><a href="#"><img src="{{ asset('frontend/images/ex/04-17.jpg')}}" alt="$NAME" /></a>
                </div>
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


        <div class="mod-grp-coupon block clearfix">
            <div class="grid_12">
                <h3 class="title-block has-link" style="text-align:center;">
                    Featured Coupons
                    <a href="/store" class="link-right">See all <i class="pick-right"></i></a>
                </h3>
            </div>
            <div class="block-content list-coupon clearfix">
                @foreach ($coupons as $data)
                    <div class="coupon-item grid_3">
                        <div class="coupon-content">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a  class="ver_container"><img
                                            src="{{ asset('backend/images/stores')}}/{{ $data->store_logo }}"
                                            alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            <div class="coupon-price">{{  $data->coupon_title }}</div>
                            <div class="coupon-desc">{{  $data->coupon_desc }}</div>
                            <div class="time-left">9 days 4 hours left</div>
                            
                            @php
  $storeUrl = Str::startsWith($data->store_url, ['http://', 'https://']) 
                ? $data->store_url 
                : 'https://' . $data->store_url;  
@endphp
                                 <a class="btn btn-my btn-take-coupon"
   data-title="{{ $data->coupon_title }}"
   data-code="{{ $data->coupon_code }}"
   data-storeurl="{{ $storeUrl }}"
   href=""
   onclick="openCouponModal(event)">
   {{ !empty($data->coupon_code) ? 'View Code' : 'View Deal' }}
</a>
                        </div>
                        <i class="stick-lbl hot-sale"></i>
                    </div><!--end: .coupon-item -->
                @endforeach


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
                    <a href="/categories" class="link-right">See all <i class="pick-right"></i></a>
                </h3>
            </div>
            <div class="block-content list-brand clearfix">
                @foreach ($categories as $data)
                    <div class="brand-item grid_4">
                        <div class="brand-content">
                            <div class="brand-logo">
                                <div class="wrap-img-logo">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img
                                            src="{{ asset('backend/images/categories')}}/{{ $data->cate_logo }}"
                                            alt="$BRAND_TITLE"> </a>
                                </div>
                            </div>
                        </div>
                        <h2 style="text-align:center;">{{  $data->cate_name }}</h2>
                    </div><!--end: .brand-item -->
                @endforeach

            </div>
        </div><!--end: .mod-brand -->
    </div>


    </div>

<script>
  function closeModal() {
    document.getElementById('customModal').style.display = 'none';
  }

  function openCouponModal(event) {
    event.preventDefault();

    var btn = event.currentTarget;
    var title = btn.getAttribute("data-title");
    var code = btn.getAttribute("data-code");
    var storeUrl = btn.getAttribute("data-storeurl");

    document.getElementById("modalCouponTitle").innerText = title;
    document.getElementById("couponCodeInput").value = code;

    if (code && code.trim() !== "") {
      document.getElementById("codeSection").style.display = "block";
      document.getElementById("dealSection").style.display = "none";
    } else {
      document.getElementById("codeSection").style.display = "none";
      document.getElementById("dealSection").style.display = "block";
    }

    document.getElementById("customModal").style.display = "block";

    // Optional: Open store link
    if (storeUrl) {
      window.open(storeUrl, "_blank");
    }
  }

  function copyCode() {
    var copyText = document.getElementById("couponCodeInput");
    copyText.select();
    document.execCommand("copy");

    var copyBtn = document.querySelector('#codeSection button');
    var originalText = copyBtn.innerText;
    copyBtn.innerText = "Copied!";
    
    setTimeout(() => {
      copyBtn.innerText = originalText;
    }, 3000);
  }
</script>

@endsection