@extends('layouts.adminlayout')

@section('homeContent')

    <!-- <h1>Add Coupons </h1> -->

    <section class="section">
        <x-alert-msg />
        <div class="section-body">


            <form enctype="multipart/form-data" action="{{route('coupon.store')}}" class="form-sample p-3" method="post">
                @csrf
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Add New Coupon</h4>
                            </div>

                            <div class="card-body">

                                <div class="form-group">
                                    <label>Coupon Title</label>
                                    <input required name="coupon_title" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Coupon Description</label>
                                    <input required name="coupon_desc" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Store Url</label>
                                    <input type="text" required name="store_url" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Coupon Code</label>
                                            <input type="text" name="coupon_code" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 ">
                                        <div class="form-group">
                                            <label>Store</label>
                                            <select name="store" class="form-control selectric">
                                                <option disabled selected>Select Store</option>
                                                @foreach($store as $item)
                                                    <option value="{{ $item->id }}">{{ $item->store_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Save</button>
                                <button class="btn btn-secondary" type="reset">Cancel</button>
                            </div>

                        </div>
                    </div>
                </div>

            </form>

        </div>
    </section>

@endsection