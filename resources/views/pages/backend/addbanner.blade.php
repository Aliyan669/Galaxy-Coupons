@extends('layouts.adminlayout')

@section('homeContent')

    <!-- <h1>Add banner </h1> -->

    <section class="section">
        <x-alert-msg />
        <div class="section-body">


            <form enctype="multipart/form-data" action="{{route('banner.store')}}" class="form-sample p-3" method="post">
                @csrf
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Add New Banner</h4>
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Banner Name</label>
                                            <input type="text" name="banner_name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 " style="margin-top:-30px;">
                                        <div class="form-group">
                                        <div class="section-title" style="font-size:12px; ">Banner Image</div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="banner_image" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
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