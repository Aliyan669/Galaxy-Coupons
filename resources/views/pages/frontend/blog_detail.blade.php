@extends('layouts.homelayout')

@section('homeContent')



        <div class="grid_frame page-content">
                <div class="mod-grp-coupon block clearfix" style="margin-top:30px;">
            <div class="grid_12">
                <h1 class="title-block has-link" style="text-align:center; font-size: 30px;">
                 Blog Detail                </h1>
            </div>
        </div>

             <div class="container_grid">
                <div class="layout-2cols  clearfix">
                    <div class="grid_8 content">
                        <div class="mod-breadcrumb no-pt clearfix" style="color:#3d5366; ">
                            <a href="/">Home</a>
                            <span>&gt;</span>

                            <a >{{ $blog_detail->blog_title }}</a>
                        </div><!--end: .mod-breadcrumb-->
                        <div class="mod-blog-detail">
                            <img class="feature-img" src="{{ asset('backend/images/blogs') }}/{{ $blog_detail->blog_logo }}" alt="$ARTICLE_TITLE"/>
                            <div class="top-detail clearfix">
                                <div class="left-title">
                                    <p style="color:#3d5366; " class="blog-title" >{{ $blog_detail->blog_title }} </p>
                                </div>
                                <div class="right-date">
                                    <span class="day">12</span>
                                    <span class="my">May / 2013</span>
                                </div>
                            </div>
                            <div class="blog-full-content">
                               <p>{!! $blog_detail->blog_content !!}</p>
                            </div>
                            <div class="wrap-tag">
                                <span class="btn btn-gray type-tag tag-lbl">Tag</span>
                            <a class="btn btn-gray type-tag">Beauty</a>
                            <a class="btn btn-gray type-tag">Sports</a>
                            <a class="btn btn-gray type-tag">Coupon</a>
                            <a class="btn btn-gray type-tag">Saving</a>
                            <a class="btn btn-gray type-tag">Offers</a>
                            <a class="btn btn-gray type-tag">Brands</a>
                            </div>
                        </div><!--end: .mod-blog-detail-->

                    </div>
                    <div class="grid_4 sidebar">

                        <div class="mod-simple-coupon block">
                            <h3 class="title-block">Latest News & Articles</h3>
                             @foreach ($site_blogs as $data)
                            <div class="brand-item">
                                <div class="brand-content" style="padding:5px;">
                                    <div class="brand-logo  ">
                                        <div class="wrap-img-logo">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img
                                                    src="{{ asset('backend/images/blogs')}}/{{ $data->blog_logo }}"
                                                    alt="$BRAND_TITLE"> </a>

                                            <p style="text-align:left; padding-left: 5px; font-size:15px"><a
                                                    style="color:#3d5366; ">{{  $data->blog_title }} </a></p>
                                            <p style="text-align:left; padding: 0px 5px; font-weight: 100; font-size:12px; ">
                                                {!! Str::words(strip_tags($data->blog_content), 20, '...') !!}

                                                <a
                                                    style="display: inline-block;  font-size: 12px; color: #3d5366; text-decoration: none;">Read
                                                    More</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div><!--end: .brand-item -->

                        @endforeach
                        </div><!--end: .mod-simple-coupon -->
                       
                    </div>
                </div>
            </div>
            
        </div>




@endsection


