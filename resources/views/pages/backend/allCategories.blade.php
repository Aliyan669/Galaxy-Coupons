
@extends('layouts.adminlayout')

@section('homeContent')





                    <!-- Delete modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              Are you sure You want to delete?
              </div>
                  <input type="hidden" name="cate_id" id="delete_cate_id">

              <div class="modal-footer bg-whitesmoke br">
                <button type="submit" class="btn btn-danger" id="deleteForm">Delete</button>
                <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

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
                            
                            <td><button type="button" class="btn btn btn-danger deleteBtn mr-3" data-id="{{ $data->id }}"  data-toggle="modal" data-target="#deleteModal">Delete</button>
                            <a href="#" class="btn btn-success  ">Edit</a></td>
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
          
    $(document).ready(function () {

                    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

              // Delete functionality
        $(".deleteBtn").click(function () {
            let cateId = $(this).data("id");
            console.log(cateId);

            $("#delete_cate_id").val(cateId);
        });



              // Delete AJAX functionality
        $('#deleteForm').click(function () {
            var id = $("#delete_cate_id").val();
            console.log(id);
            $.ajax({
                url: '/admin/categories/'+id,
                type: 'DELETE',
                data: {
                   _method: 'DELETE' // Laravel requires this method override
                },
                success: function (data) {
                    console.log('deleted');
                    $('#deleteModal').modal('hide');
                    location.reload();
                },
                error: function (res) {
                    console.log(res.message);

                }
            });
        });

    });

    
</script>
@endsection


