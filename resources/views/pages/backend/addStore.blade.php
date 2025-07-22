@extends('layouts.adminlayout')

@section('homeContent')

    <!-- <h1>Add Store </h1> -->

    <section class="section">
        <x-alert-msg />
        <div class="section-body">


            <form enctype="multipart/form-data" action="{{route('store.store')}}" class="form-sample p-3" method="post">
                @csrf
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Add New Store</h4>
                            </div>

                            <div class="card-body">

                                <div class="form-group">
                                    <label>Store Name</label>
                                    <input required name="store_name" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Store Description</label>
                                    <input required name="store_desc" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Store Url</label>
                                    <input type="text" required name="store_url" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" required name="meta_title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <input type="text" required name="meta_desc" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6" style="margin-top:-30px;">
                                        <div class="section-title" style="font-size:12px; ">Store Logo</div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="store_logo" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 ">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="category" class="form-control selectric">
                                                <option disabled selected>Select Category</option>
                                                @foreach($categories as $item)
                                                    <option value="{{ $item->id }}">{{ $item->cate_name }}</option>
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