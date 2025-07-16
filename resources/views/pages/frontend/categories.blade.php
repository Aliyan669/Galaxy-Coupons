@extends('layouts.homelayout')


@section('homeContent')




    <div class="grid_frame page-content">
        <div class="mod-grp-coupon block clearfix" style="margin-top:30px;">
            <div class="grid_12">
                <h1 class="title-block has-link" style="text-align:center; font-size: 30px;">
                    Categories
                </h1>
            </div>
        </div>
        <div class="mod-brands block clearfix">
            <div class="grid_12">
            </div>
            <div class="block-content list-brand clearfix">
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}"
                                        alt="$BRAND_TITLE"> </a>


                            </div>

                        </div>

                    </div>
                    <h2 style="text-align:center;">E-Commerce</h2>
                </div><!--end: .brand-item -->
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}"
                                        alt="$BRAND_TITLE"></a>
                            </div>
                        </div>
                    </div>
                    <h2 style="text-align:center;">Health</h2>
                </div><!--end: .brand-item -->
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}"
                                        alt="$BRAND_TITLE"></a>
                            </div>
                        </div>
                    </div>
                    <h2 style="text-align:center;">Beauty</h2>

                </div><!--end: .brand-item -->
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}"
                                        alt="$BRAND_TITLE"></a>
                            </div>
                        </div>
                    </div>
                    <h2 style="text-align:center;"></h2>

                </div><!--end: .brand-item -->
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}"
                                        alt="$BRAND_TITLE"></a>
                            </div>
                        </div>
                    </div>
                    <h2 style="text-align:center;">E-Commerce</h2>

                </div><!--end: .brand-item -->
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="{{ asset('frontend/images/ex/01_07.jpg')}}"
                                        alt="$BRAND_TITLE"></a>
                            </div>
                        </div>
                    </div>
                    <h2 style="text-align:center;">E-Commerce</h2>

                </div><!--end: .brand-item -->
            </div>
        </div><!--end: .mod-brand -->

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