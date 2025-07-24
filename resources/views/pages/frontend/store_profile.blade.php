@extends('layouts.homelayout')

@section('homeContent')

<!-- Custom Coupon Modal -->
<div id="customModal" style="display:none; position:fixed; z-index:9999; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5);">
  <div style="width:400px; margin:100px auto; background:#fff; padding:20px; border-radius:8px; text-align:center; position:relative;">
    <h4 id="modalCouponTitle"  style="margin-bottom:10px; font-size:25px; color: black; "></h4>

    <div id="codeSection" style="display:none;  ">
      <input type="text" id="couponCodeInput" style="padding:4px 10px; width:50%; text-align: center; font-size:18px; border: none;"> 
      <button class="btn btn-my btn-take-coupon" style="margin-top: 20px; margin-bottom:25px; margin-left:5px;" onclick="copyCode()">Copy Code</button>
    </div>

    <div id="dealSection" style="display:none; font-size: 15px; margin-top: 20px; ">
      <p>This is a deal – no code needed</p>
    </div>
    <button class="btn btn-red" onclick="closeModal()" style="margin-top:10px;">Close</button>
  </div>
</div>


        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-brand-detail-4 clearfix">
                    <div class="grid_12">
                        <div class="brand-top-info clearfix">
                            <div class="brand-logo">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{ asset('backend/images/stores/' . $store->store_logo) }}" alt="{{ $store->store_name }}" alt="$BRAND_NAME"/></a>
                                    </div>
                                </div>
                                <i class="stick-lbl trust-brand-b"></i>
                            </div>
                            <div class="brand-desc">
                                <div class="title-desc">{{ $store->store_name }}</div>
                                <p class="rs">{{ $store->store_desc }}</p>
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
                                                                        @php
  $storeUrl = Str::startsWith($store->store_url, ['http://', 'https://']) 
                ? $store->store_url 
                : 'https://' . $store->store_url;
@endphp
                                    <a class="btn btn-my btn-follow-brand" href='{{ $storeUrl }}' target="_blank">Follow brand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mod-grp-coupon block">
                        <div class="block-content list-coupon clearfix">
                              @forelse ($coupons as $coupon)
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a class="ver_container"><img src="{{ asset('backend/images/stores/' . $store->store_logo) }}" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">{{ $coupon->coupon_title }}</div>
                                    <div class="coupon-desc">{{ $coupon->coupon_desc }}</div>
                                    <div class="time-left">9 days 4 hours left</div>
                                    @php
  $storeUrl = Str::startsWith($coupon->store_url, ['http://', 'https://']) 
                ? $coupon->store_url 
                : 'https://' . $coupon->store_url;  
@endphp
                                 <a class="btn btn-my btn-take-coupon"
   data-title="{{ $coupon->coupon_title }}"
   data-code="{{ $coupon->coupon_code }}"
   data-storeurl="{{ $storeUrl }}"
   href=""
   onclick="openCouponModal(event)">
   {{ !empty($coupon->coupon_code) ? 'View Code' : 'View Deal' }}
</a>
                                </div>
                            </div><!--end: .coupon-item -->

                            @empty
              <h3 style="text-align:center;">  No coupons available for this store.</h3>
            @endforelse
      
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


