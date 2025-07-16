@extends('layouts.homelayout')


@section('homeContent')

        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-brand-detail-4 clearfix">
                    <div class="grid_12">
                        <div class="brand-top-info clearfix">
                            <div class="brand-logo">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/08-02.jpg')}}" alt="$BRAND_NAME"/></a>
                                    </div>
                                </div>
                                <i class="stick-lbl trust-brand-b"></i>
                            </div>
                            <div class="brand-desc">
                                <div class="title-desc">Lindt Coupon Code</div>
                                <p class="rs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis metus non nunc iaculis dapibus. Nullam tempus accumsan metus vitae facilisis. Nullam non faucibus nisi, nec auctor neque. Ut consequat consequat purus. Sed vestivbulum viverra nulla vel fermentum. Fusce luctus ultrices lorem, in placerat nibh adipiscing ut. </p>
                            </div>
                            <div class="right-counter">
                                <div class="wrap-content">

                                    <div class="rate-brand clearfix">
                                        <span class="star-rate"><span style="width: 50%;"></span></span>
                                        <span class="wrap-rate-score">
                                            <i class="star-rate s-rated"></i> 5/5
                                        </span>
                                    </div>

                                    <div class="count-info clearfix">
                                        <span class="lbl">Follower</span>
                                        <span class="val">258.332</span>
                                    </div>
                                    <div class="count-info clearfix">
                                        <span class="lbl">Coupons</span>
                                        <span class="val">214</span>
                                    </div>
                                    <div class="count-info clearfix">
                                        <span class="lbl">Coupons code</span>
                                        <span class="val">31</span>
                                    </div>
                                    <a class="btn btn-my btn-follow-brand" href="#">Follow brand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mod-grp-coupon block">
                        <div class="block-content list-coupon clearfix">
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_01.jpg')}}" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$2.00 Off</div>
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
                                            <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_02.jpg')}}" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">Save $1.50 on two</div>
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
                                            <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_03.jpg')}}" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$5.00 Off</div>
                                    <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                    <div class="time-left">2 days 14 hours left</div>
                                    <a class="btn btn-my btn-take-coupon untake" href="#">Un Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_04.jpg')}}" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$7.00 Off</div>
                                    <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                    <div class="time-left">12 days 1 hour left</div>
                                    <a class="btn btn-my btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_02.jpg')}}" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$12.00 Off</div>
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
                                            <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_03.jpg')}}" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$17.50 off</div>
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
                                            <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_01.jpg')}}" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$3.00 Off</div>
                                    <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                    <div class="time-left">2 days 14 hours left</div>
                                    <a class="btn btn-my btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_04.jpg')}}" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$7.00 Off</div>
                                    <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                    <div class="time-left">12 days 1 hour left</div>
                                    <a class="btn btn-my btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item -->                           
                        </div>
                     </div><!--end block: List Coupons-->


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
            </div>
        </div>

@endsection