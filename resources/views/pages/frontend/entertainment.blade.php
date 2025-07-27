@extends('layouts.homelayout')


@section('homeContent')

    <div class="grid_frame page-content">

        <div class="mod-grp-coupon block clearfix" style="margin-top:30px;">
            <div class="grid_12">
                <h1 class="title-block has-link" style="text-align:center; font-size: 30px;">
                    Entertainment </h1>
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
                                                    href="{{ url('/blog-detail/' . $data->slug) }}">{{  $data->blog_title }} </a>
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
                        <h3 class="title-block" style="margin-bottom: 10px;">Latest News & Articles</h3>

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
                            </div><!--end: .brand-item -->

                        @endforeach


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