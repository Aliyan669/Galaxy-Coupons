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

                @foreach ($categories as $data)
                    <div class="brand-item grid_3">
                        <div class="brand-content">
                            <div class="brand-logo">
                                <div class="wrap-img-logo">
                                    <span class="ver_hold"></span>
                                    <a class="ver_container"><img
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

@endsection