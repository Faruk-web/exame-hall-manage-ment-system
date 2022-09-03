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
                          <h2 class="mt-2">Customers List</h2>

                                    <thead>
                                        <tr>
                                            <th>Customer ID</th>
                                            <th>Customer Name</th>
                                            <th>Customer Mobile</th>
                                            <th>Customer Email</th>
                                            <th>Customer Address</th>
                                            <th>Customer File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $item)
                                        <tr>  
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->customer_name}}</td>
                                            <td>{{$item->customer_mobile}}</td>
                                            <td>{{$item->customer_email}}</td>
                                            <td>{{$item->customer_address}}</td>
                                            <td>
                                              <img src="{{asset($item->customer_file)}}" alt="image" style="height: 80px;">
                                            </td>
                                            <td>
                                                
                                                {{-- <button type="button" class="btn btn-relief-danger"><a href="{{ route('customer.edit',$item->id) }}"> <i class="fas fa-edit"></i> </a> </button> --}}
                                                <button type="button" class="btn btn-relief-danger"><a href="{{ route('customer.delete',$item->id) }}"> <i class="fas fa-backspace"></i> </a> </button>
                                               
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
                                  <h3 class="card-title">Add Customer</h3>
                                </div>
                                <form method="POST" action="{{ route('customer.store') }}" class="form form-vertical"
                                        enctype="multipart/form-data">
                                 @csrf
                                  <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputName">Customer Name</label>
                                        <input type="text" name="customer_name" class="form-control" id="exampleInputName" placeholder="Enter customer name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputMobile">Customer Mobile</label>
                                        <input type="number" name="customer_mobile" class="form-control" id="exampleInputMobile" placeholder="Enter customer mobile">
                                      </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" name="customer_email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputAddress">Customer Address</label>
                                      <input type="text" name="customer_address" class="form-control" id="exampleInputAddress" placeholder="Enter customer address">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputFile">File input</label>
                                      <div class="input-group">
                                        <div class="custom-file">
                                          <input type="file" name="customer_file" class="custom-file-input" id="exampleInputFile">
                                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                          <span class="input-group-text">Upload</span>
                                        </div>
                                      </div>
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
