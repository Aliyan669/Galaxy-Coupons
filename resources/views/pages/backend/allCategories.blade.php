@extends('layouts.adminlayout')

@section('homeContent')

<!-- <h1>All Categories</h1> -->
        <section class="section">
          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Categories</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                            <th class="text-center pt-3">
                              <div class="custom-checkbox custom-checkbox-table custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                  class="custom-control-input" id="checkbox-all">
                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                              </div>
                            </th>
                            <th>S.No</th>
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          
                          
@php
    $count = 1;
@endphp
                                @foreach ($categories as $data)
                          <tr>
                            <td class="text-center pt-2">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                  id="checkbox-{{ $count }}">
                                <label for="checkbox-{{ $count }}" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td>{{ $count }}</td>
                            <td>{{  $data->cate_name }}</td>

                            <td>
                              <img alt="image" src="{{ asset('backend/images/categories')}}/{{ $data->cate_logo }}" width="35">
                            </td>
                            <td>{{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</td>
                            
                            <td><a href="#" class="btn btn btn-danger mr-3">Delete</a><a href="#" class="btn btn-success  ">Edit</a></td>
                          </tr>
                              @php
                $count++;

            @endphp
                                @endforeach                       
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>

@endsection