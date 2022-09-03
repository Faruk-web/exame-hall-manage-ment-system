@extends('admin.adminMaster')
@section('admin')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 mt-3">
                        <div>
                            <table id="example1" class="table test table-bordered table-striped">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <h2 class="mt-2">Buildings List</h2>
                                    <thead>
                                        <tr>
                                            <th>Building ID</th>
                                            <th>Customer ID</th>
                                            <th>building_name</th>
                                            <th>flate_price</th>
                                            <th>flate_size</th>
                                            <th>flate_name</th>
                                            <th>power_attorney_cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($buildings as $item)
                                        <tr>  
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->customer_id}}</td>
                                            <td>{{$item->building_name}}</td>
                                            <td>{{$item->flate_price}} tk</td>
                                            <td>{{$item->flate_size}}</td>
                                            <td>{{$item->flate_name}}</td>
                                            <td>{{$item->power_attorney_cost}} tk</td>
                                            <td>

                                                <button type="button" class="btn btn-relief-danger"><a href="{{ route('building.delete',$item->id) }}"> <i class="fas fa-backspace"></i> </a> </button>
                                               
                                            </td>                                     
                                        </tr>  
                                        @endforeach
                                    </tbody> 
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="col-4 mt-5">
                            <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title">Add Building</h3>
                                </div>
                                <form method="POST" action="{{ route('building.store') }}" class="form form-vertical"
                                        enctype="multipart/form-data">
                                 @csrf
                                  <div class="card-body">
                                    <label for="pet-select">Customer Name:</label>
                                        <select type="text" name="customer_id" class="form-control" id="exampleInputlocation" placeholder="Enter ">
                                            @foreach ($customers as $item)
                                            <option value="{{$item->id}}">{{$item->customer_name}}</option>
                                            @endforeach
                                        </select>
                                    <div class="form-group">
                                        <label for="exampleInputName">Building Name</label>
                                        <input type="text" name="building_name" class="form-control" id="exampleInputName" placeholder="Enter building name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputlocation">Building location</label>
                                        <input type="text" name="building_location" class="form-control" id="exampleInputlocation" placeholder="Enter building location">
                                      </div>
                                    <div class="form-group">
                                      <label for="exampleInputFlate">Total Flate</label>
                                      <input type="text" name="total_flat_no" class="form-control" id="exampleInputFlate" placeholder="Enter total flate">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPrice">Flat Price</label>
                                      <input type="number" name="flate_price" class="form-control" id="exampleInputPrice" placeholder="Enter flat price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputSize">Flat Size</label>
                                        <input type="text" name="flate_size" class="form-control" id="exampleInputSize" placeholder="Enter flat size">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputSize">Flat Name</label>
                                        <input type="text" name="flate_name" class="form-control" id="exampleInputSize" placeholder="Enter flat size">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputSize">Power Of Attorney Cost</label>
                                        <input type="number" name="power_attorney_cost" class="form-control" id="exampleInputSize" placeholder="Enter flat size">
                                      </div>
                                  
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                  </div>
                                  <!-- /.card-body -->
                  
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </form>
                              </div>
                        </div>
                    </div>
                    
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
   
    {{-- =================Modal======================= --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
                </div>
            </div>
            </div>
    {{-- =================Modal======================= --}}
@endsection
@section('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
