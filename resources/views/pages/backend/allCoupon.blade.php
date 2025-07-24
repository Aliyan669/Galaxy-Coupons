
@extends('layouts.adminlayout')

@section('homeContent')

        <!-- Large modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title ml-2" id="myLargeModalLabel">Edit Coupon Detail</h5>
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
 
                            <div class="form-group">
                                <label>Coupon Title</label>
                                <input required name="e_coupon_title" id="e_coupon_title" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Coupon Description</label>
                                <input required name="e_coupon_desc" id="e_coupon_desc" type="text" class="form-control">
                            </div>

                                <div class="form-group">
                                <label>Store Url</label>
                                <input required name="e_store_url" id="e_store_url" type="text" class="form-control">
                            </div>

                       <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                    <label>Coupon Code</label>
                                    <input type="text" name="e_coupon_code" id="e_coupon_code" class="form-control">
                                </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 ">
                                        <div class="form-group">
                                            <label>Store</label>
                                            <select name="e_store" id="e_store" class="form-control selectric">
                                                 <option disabled selected>Select Store</option>
                                                  @foreach($stores as $item)
                                                <option value="{{ $item->id }}">{{ $item->store_name }}</option>
                                                    @endforeach
                                              </select>
                                        </div>
                                    </div>

                                </div>

                        </div>

                        <div class="text-right mt-4">
                            <button  class="btn btn-primary mr-1" type="submit" id="updateBtn">Save</button>
                            <button class="btn btn-secondary" data-dismiss="modal" type="reset">Close</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Delete Coupon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              Are you sure You want to delete?
              </div>
                  <input type="hidden" name="store_id" id="delete_coupon_id">

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
                <div class="card card-primary" >
                  <div class="card-header">
                    <h4>All Coupons</h4>
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
                            <th>Coupon Title</th>
                            <th>Coupon Description</th>
                            <th>Store Name</th>
                            <th>Coupon Type</th>
                            <th>Store Logo</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          
                          
@php
    $count = 1;
@endphp
                                @foreach ($coupons as $data)
                          <tr>
                            <td class="text-center pt-2">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                  id="checkbox-{{ $count }}">
                                <label for="checkbox-{{ $count }}" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td>{{ $count }}</td>
                            <td>{{  $data->coupon_title }}</td>
                            <td>{{  $data->coupon_desc }}</td>
                            <td>{{  $data->store_name }}</td>
                            <td>{{ !empty($data->coupon_code) ? 'Code' : 'Deal' }}</td>
                            <td>
                              <img alt="image" src="{{ asset('backend/images/stores')}}/{{ $data->store_logo }}" width="35">
                            </td>

                            <td>{{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</td>
                            
                            <td><button type="button" class="btn btn btn-danger deleteBtn mr-2 mt-1 mb-1" data-id="{{ $data->id }}"  data-toggle="modal" data-target="#deleteModal">Delete</button>
                            <button type="button" class="btn btn-success edit mr-2 mt-1 mb-1"  id="{{ $data->id }}" data-toggle="modal" data-target="#editModal">Edit</button>
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
                url: '/admin/coupon/' + id + '/edit',
                method: 'GET'
            }).done(function (val) {
                console.log(val)
                $.each(val, function (k, v) {
                    $('#e_id').val(v['id']);
                    $('#e_coupon_title').val(v['coupon_title']);
                    $('#e_coupon_desc').val(v['coupon_desc']);
                     $('#e_store_url').val(v['store_url']);
                    $('#e_coupon_code').val(v['coupon_code']);
                    $('#e_store').val(v['store_id']);

                    $('#e_store').val(v['store_id']).change();
                })
            })
        });


                // Edit AJAX Code
        $('#updateForm').submit(function (e) {
            e.preventDefault(); // Form ko reload hone se rokein
            var id = $('#e_id').val();
            var formData = new FormData(this)

            $.ajax({
                url: '/admin/coupon/'+ id, // Resource route follow karein
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
            let couponId = $(this).data("id");
            console.log(couponId);

            $("#delete_coupon_id").val(couponId);
        });



              // Delete AJAX functionality
        $('#deleteForm').click(function () {
            var id = $("#delete_coupon_id").val();
            console.log(id);
            $.ajax({
                url: '/admin/coupon/'+id,
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


