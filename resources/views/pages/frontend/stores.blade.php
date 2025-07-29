@extends('layouts.homelayout')

@section('homeContent')

    <div class="grid_frame page-content">

        <div class="mod-grp-coupon block clearfix" style="margin-top:30px;">
            <div class="grid_12">
                <h1 class="title-block has-link" style="text-align:center; font-size: 30px;">
                    All Stores
                </h1>
            </div>
        </div>

        <div class="container_grid">
            <div class="mod-brand-alphabetical block clearfix">

                <div class="block-content list-brand clearfix">
                    <div class="grid_12 alphabe">
                        <div class="wrap-list-char">
                            @foreach(range('A', 'Z') as $letter)
                                @if(isset($groupedStores[$letter]))
                                    <a href="#char-{{ $letter }}">{{ $letter }}</a>
                                @else
                                    <a class="disable">{{ $letter }}</a>
                                @endif
                            @endforeach
                            @if(isset($groupedStores['0-9']))
                                <a href="#char-0-9">0-9</a>
                            @else
                                <a class="disable">0-9</a>
                            @endif
                        </div>
                    </div>
                    <!-- <div class="clear"></div> -->
                    <div id="container_list_link" class="clearfix link-alpha-link">
                        @foreach($groupedStores as $letter => $stores)
                            <div class="grid_2 grp-by-alpha">
                                <div class="head-char" id="char-{{ $letter }}">{{ $letter }}</div>
                                <div class="list-follow">

                                    @foreach($stores as $store)
                                        <div style="width: 150px; text-align: center; margin: 10px 0px; display: inline-block;">
                                            <a href="{{ url('/store-profile/' . $store->slug) }}" style="text-decoration: none; ">
                                                <img src="{{ asset('backend/images/stores/' . $store->store_logo) }}"
                                                    alt="{{ $store->store_name }}"
                                                    style="width: 140px; height: 140px; object-fit: contain; display: block; margin: 0 auto 8px auto;">
                                                {{ $store->store_name }}

                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div><!--end block: Featured Coupons-->
        </div>

    </div>

@endsection