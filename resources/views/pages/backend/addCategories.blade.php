@extends('layouts.adminlayout')

@section('homeContent')

    <!-- <h1>Add Categories</h1> -->

    <section class="section">
          <x-alert-msg/>
        <div class="section-body">
            

          <form enctype="multipart/form-data" action="{{route('categories.store')}}" class="form-sample p-3" method="post">
                        @csrf
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
  
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Add New Category</h4>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <label>Category Name</label>
                                <input required name="cate_name" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" required name="meta_title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea type="text"  required name="meta_desc" class="form-control"></textarea>
                            </div>

                            <div class="section-title" style="font-size:12px; ">Category Image &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Size Should be 715px by 400px)</div>
                            <div class="custom-file">
                                <label>Meta Description</label>
                                <input type="file" class="custom-file-input" name="cate_logo" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>

                        </div>

                        <div class="card-footer text-right">
                            <button  class="btn btn-primary mr-1" type="submit">Save</button>
                            <button class="btn btn-secondary" type="reset">Cancel</button>
                        </div>

                    </div>
                </div>
            </div>

            </form>

        </div>
    </section>

@endsection