@extends('layouts.adminlayout')

@section('homeContent')

    <!-- <h1>Add Coupons </h1> -->

    <section class="section">
        <x-alert-msg />
        <div class="section-body">

            <form enctype="multipart/form-data" action="{{ url('/admin/site-content') }}" class="form-sample p-3" method="post">
                @csrf
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Site Content</h4>
                            </div>

                            <div class="card-body">


                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Site Title</label>
                                            <input type="text" name="site_title" value="{{ $content->site_title ?? '' }}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 ">
                                        <div class="form-group">
                                            <label>Meta Title</label>
                                            <input type="text" value="{{ $content->meta_title ?? '' }}" name="meta_title" class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Meta Tags</label>
                                            <input type="text" value="{{ $content->meta_tag ?? '' }}" name="meta_tags" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 ">
                                        <div class="form-group">
                                            <label>Meta keywords</label>
                                            <input type="text" value="{{ $content->meta_keyword ?? '' }}" name="meta_keyword" class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea required name="meta_desc" type="text" class="form-control">{{ $content->meta_desc ?? '' }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Site About us</label>
                                    <textarea required name="site_about" type="text" class="form-control">{{ $content->site_about ?? '' }}</textarea>
                                </div>


                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="section-title" style="font-size:12px; ">Site Logo</div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="site_logo" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 ">
                                        <img alt="image" src="{{ asset('backend/images/uploads/' . ($content->site_logo ?? 'default.png')) }}"
                                            width="105">

                                    </div>

                                </div>

                                <div class="row mt-3">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="section-title" style="font-size:12px; ">Footer Logo</div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="footer_logo" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 ">
                                         <img alt="image" src="{{ asset('backend/images/uploads/' . ($content->footer_logo ?? 'default.png')) }}"
                                            width="105">
                                    </div>

                                </div>

                                <div class="row mt-3">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="section-title" style="font-size:12px; ">Favicon Logo</div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="favicon_logo" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 ">
                                          <img alt="image" src="{{ asset('backend/images/uploads/' . ($content->favicon_logo ?? 'default.png')) }}"
                                            width="105">

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