
@extends('layouts.adminlayout')

@section('homeContent')

        <!-- Edit modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title ml-2" id="myLargeModalLabel">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                      <form enctype="multipart/form-data" class="form-sample p-2" id="updateForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="_method" value="PUT">

            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="">
                        <div class="">

                       <input required type="hidden" id="e_id" name="e_id" class="form-control" />
 
                   <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Banner Name</label>
                                            <input type="text" name="e_banner_name" id="e_banner_name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 " style="margin-top:10px;">
                                        <div class="form-group">
                                        <div class="section-title" style="font-size:12px; ">Banner Image</div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="e_banner_image" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        </div>
                                    </div>

                                </div>

                        </div>

                        <div class="text-right mt-4">
                            <button  class="btn btn-primary mr-1" type="submit" id="updateBtn">Save</button>
                            <button class="btn btn-secondary" data-dismiss="modal" type="reset">Cancel</button>
                        </div>

                    </div>
                </div>
            </div>

            </form>

              </div>
            </div>
          </div>
        </div>



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
                  <input type="hidden" name="cate_id" id="delete_banner_id">

              <div class="modal-footer bg-whitesmoke br">
                <button type="submit" class="btn btn-danger" id="deleteForm">Delete</button>
                <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        
<!-- <h1>All Banners</h1> -->
        <section class="section">
          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h4>All Banners</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>

                            <th style="padding-left:20px;">S.No</th>
                            <th>Banner Name</th>
                            <th>Banner Image</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
@php
    $count = 1;
@endphp
                                @foreach ($banner as $data)
                          <tr>

                            <td style="padding-left:20px;">{{ $count }}</td>
                            <td>{{  $data->banner_name }}</td>

                            <td>
                              <img alt="image" src="{{ asset('backend/images/banner')}}/{{ $data->banner_image }}" width="100">
                            </td>
                            <td>{{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</td>
                            
                            <td><button type="button" class="btn btn btn-danger deleteBtn mr-3" data-id="{{ $data->id }}"  data-toggle="modal" data-target="#deleteModal">Delete</button>
                            <button type="button" class="btn btn-success edit" id="{{ $data->id }}" data-toggle="modal" data-target="#editModal">Edit</button></td>
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


            // Edit functionality
        $(document).on('click', '.edit', function () {
            var id = $(this).attr('id');
            // alert(id)
            $.ajax({
                url: '/admin/banner/' + id + '/edit',
                method: 'GET'
            }).done(function (val) {
                console.log(val)
                $.each(val, function (k, v) {
                    $('#e_id').val(v['id']);
                    $('#e_banner_name').val(v['banner_name']);
                

                })
            })
        });

                // Edit AJAX Code
        $('#updateForm').submit(function (e) {
            e.preventDefault(); // Form ko reload hone se rokein
            var id = $('#e_id').val();
            var formData = new FormData(this)

            $.ajax({
                url: '/admin/banner/'+ id, // Resource route follow karein
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ensure this exists
                }

            }).done(function (res) {
                // alert('done')    
                $('#editModal').modal('hide');
                location.reload();
            });
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

              // Delete functionality
        $(".deleteBtn").click(function () {
            let bannerId = $(this).data("id");
            console.log(bannerId);

            $("#delete_banner_id").val(bannerId);
        });


              // Delete AJAX functionality
        $('#deleteForm').click(function () {
            var id = $("#delete_banner_id").val();
            console.log(id);
            $.ajax({
                url: '/admin/banner/'+id,
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


