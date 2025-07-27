
@extends('layouts.adminlayout')

@section('homeContent')


        <!-- Edit modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title ml-2" id="myLargeModalLabel">Edit Store Detail</h5>
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
                                <label>Store Name</label>
                                <input required name="e_store_name" id="e_store_name" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Store Description</label>
                                <textarea required name="e_store_desc" id="e_store_desc" type="text" class="form-control">
                                  </textarea>
                            </div>

                                <div class="form-group">
                                <label>Store Url</label>
                                <input required name="e_store_url" id="e_store_url" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" required name="e_meta_title" id="e_meta_title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea type="text"  required name="e_meta_desc" id="e_meta_desc" class="form-control">
                                  </textarea>
                            </div>

                       <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6" style="margin-top:10px;">
                                        <div class="section-title" style="font-size:12px; ">Store Logo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Size Should be 200px by 200px)</div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="e_store_logo" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-6 ">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="e_category" id="e_category" class="form-control selectric">
                                                 <option disabled selected>Select Category</option>
                                                   @foreach($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->cate_name }}</option>
                                                    @endforeach
                                              </select>
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
                <h5 class="modal-title" id="exampleModalLabel">Delete Store</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              Are you sure You want to delete?
              </div>
                  <input type="hidden" name="store_id" id="delete_store_id">

              <div class="modal-footer bg-whitesmoke br">
                <button type="submit" class="btn btn-danger" id="deleteForm">Delete</button>
                <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>



          <!-- Sort modal -->
        <div class="modal fade" id="sortModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title ml-2" id="myLargeModalLabel">Sort Store All Coupon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="row">
              <div class="col-12">
                <div class="">
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped" id="sortable-table">
                        <thead>
                          <tr>
                            <th class="text-center">
                              <i class="fas fa-th"></i>
                            </th>
                            <th>S.No</th>
                            <th>Coupon Title</th>
                            <th>Coupon Type</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>

                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="text-right">
            <button class="btn btn-primary mt-3" id="saveSortBtn">Save Sort</button>
             </div>

              </div>
            </div>
          </div>
        </div>

<!-- <h1>All Stores</h1> -->

        <section class="section">
          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card card-primary" >
                  <div class="card-header">
                    <h4>All Stores</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>

                            <th style="padding-left:20px;">S.No</th>
                            <th>Store Name</th>
                            <th>Store Category</th>
                            <th>Store Logo</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          
                          
@php
    $count = 1;
@endphp
                                @foreach ($store as $data)
                          <tr>
                           
                            <td style="padding-left:20px;">{{ $count }}</td>
                            <td>{{  $data->store_name }}</td>
                            <td>{{  $data->cate_name }}</td>

                            <td>
                              <img alt="image" src="{{ asset('backend/images/stores')}}/{{ $data->store_logo }}" width="50">
                            </td>
                            <td>{{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</td>
                            
                            <td ><button type="button" class="btn btn btn-danger deleteBtn mr-2 mt-1 mb-1" data-id="{{ $data->id }}"  data-toggle="modal" data-target="#deleteModal">Delete</button>
                            <button type="button" class="btn btn-success edit mr-2 mt-1 mb-1" id="{{ $data->id }}" data-toggle="modal" data-target="#editModal">Edit</button>
                           <button type="button" data-toggle="modal" data-id="{{ $data->id }}" data-target="#sortModal" class="btn btn-info sort-btn mt-1 mb-1">Sort</button></td>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>


<script>
  var el = document.getElementById('sortable-table').getElementsByTagName('tbody')[0];
Sortable.create(el, {
    handle: '.sort-handler',
    animation: 150
});
</script>


        <script>
          
    $(document).ready(function () {



            // Sort functionality
      $(document).on('click', '.sort-btn', function () {
    var storeId = $(this).data('id');
    $('#sortModal').data('store-id', storeId);

    $.ajax({
        url: '/admin/store/' + storeId + '/coupons',
        method: 'GET',
        success: function (data) {
            let tbody = $('#sortable-table tbody');
            tbody.empty();

            data.forEach((coupon, index) => {
                tbody.append(`
                    <tr data-id="${coupon.id}">
                    
                        <td><div class="sort-handler"><i class="fas fa-th"></i></div></td>
                        <td>${index + 1}</td>
                        <td>${coupon.coupon_title}</td>
                        <td>${coupon.coupon_code ? coupon.coupon_code : 'Deal'}</td>
                       <td>${new Date(coupon.created_at).toISOString().slice(0, 10)}</td>
                      </tr>
                `);
            });
        }
    });
});



$('#saveSortBtn').click(function () {
    var rows = $('#sortable-table tbody tr');
    var sortData = [];

    rows.each(function (index) {
        sortData.push({
            id: $(this).data('id'),
            sort_order: index + 1
        });
    });

    var storeId = $('#sortModal').data('store-id');

    $.ajax({
        url: '/admin/store/' + storeId + '/update-coupon-sort',
        method: 'POST',
        data: {
            sortData: sortData,
            _token: '{{ csrf_token() }}'
        },
        success: function (res) {
            // alert('Sort Order Saved!');
            $('#sortModal').modal('hide');
        }
    });
});




            // Edit functionality
        $(document).on('click', '.edit', function () {
            var id = $(this).attr('id');
            // alert(id)
            $.ajax({
                url: '/admin/store/' + id + '/edit',
                method: 'GET'
            }).done(function (val) {
                console.log(val)
                $.each(val, function (k, v) {
                    $('#e_id').val(v['id']);
                    $('#e_store_name').val(v['store_name']);
                    $('#e_store_desc').val(v['store_desc']);
                     $('#e_store_url').val(v['store_url']);
                    $('#e_meta_title').val(v['meta_title']);
                    $('#e_meta_desc').val(v['meta_desc']);
                    $('#e_category').val(v['cate_id']);


                    $('#e_category').val(v['cate_id']).change();
                })
            })
        });


                // Edit AJAX Code
        $('#updateForm').submit(function (e) {
            e.preventDefault(); // Form ko reload hone se rokein
            var id = $('#e_id').val();
            var formData = new FormData(this)

            $.ajax({
                url: '/admin/store/'+ id, // Resource route follow karein
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
            let storeId = $(this).data("id");
            console.log(storeId);

            $("#delete_store_id").val(storeId);
        });



              // Delete AJAX functionality
        $('#deleteForm').click(function () {
            var id = $("#delete_store_id").val();
            console.log(id);
            $.ajax({
                url: '/admin/store/'+id,
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


