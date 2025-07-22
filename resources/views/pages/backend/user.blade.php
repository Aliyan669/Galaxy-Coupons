@extends('layouts.adminlayout')

@section('homeContent')

    <!-- <h1>Add Coupons </h1> -->

    <section class="section">
        <x-alert-msg />
        <div class="section-body">

            <form enctype="multipart/form-data" action="{{ url('/admin/user') }}" class="form-sample p-3" method="post">
                @csrf
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>User Credentials</h4>
                            </div>

                            <div class="card-body">


                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 ">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" name="password" class="form-control">
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