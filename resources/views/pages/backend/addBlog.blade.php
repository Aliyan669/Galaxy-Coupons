@extends('layouts.adminlayout')

@section('homeContent')

    <!-- <h1>Add Blogs </h1> -->

    <section class="section">
        <x-alert-msg />
        <div class="section-body">


            <form enctype="multipart/form-data" action="{{route('blog.store')}}" class="form-sample p-3" method="post">
                @csrf
                <div class="row">

  <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Write Your Blogs</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-2">Title</label>
                      <div class="col-sm-12 col-md-8">
                        <input type="text" required name="blog_title" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-2">Category</label>
                      <div class="col-sm-12 col-md-8" >
                        <select class="form-control selectric" name="category"  required>
                            <option disabled  selected>Select Category</option>
                                                @foreach($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->cate_name }}</option>
                                                    @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-2">Content</label>
                      <div class="col-sm-12 col-md-8">
                        <textarea class="summernote-simple" name="blog_content" required ></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-2">Blog Image &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Size Should be 700px by 310px)</label>
                      <div class="col-sm-12 col-md-8">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="blog_image" id="image-upload" />
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