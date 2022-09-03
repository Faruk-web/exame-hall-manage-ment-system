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
                                <h2 class="mt-2">Registration List</h2>
                                    <thead>
                                        <tr>
                                            <th>Registration ID</th>
                                            <th>Customer ID</th>
                                            <th>Flat Name</th>
                                            <th>Booking Money</th>
                                            <th>Installment</th>
                                            <th>Others Payment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($registrations as $items)
                                        <tr>  
                                            <td>{{$items->id}}</td>
                                            <td>{{$items->customer_id}}</td>
                                            <td>{{$items->flat_name}}</td>
                                            <td>{{$items->booking_money}}</td>
                                            <td>{{$items->installment_name}}</td>
                                            <td>{{$items->othaer_payment}}</td>
                                            <td>
                                                <button type="button" class="btn btn-relief-danger"><a href="{{ route('registration.delete',$items->id) }}"> <i class="fas fa-backspace"></i> </a> </button>
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
                                  <h3 class="card-title">Registration</h3>
                                </div>
                                <form method="POST" action="{{ route('regitration.store') }}" class="form form-vertical"
                                        enctype="multipart/form-data">
                                 @csrf
                                  <div class="card-body">
                                    <div class="form-group">
                                        <label for="pet-select">Customer Name:</label>
                                        <select type="text" name="customer_id" class="form-control" id="exampleInputlocation" placeholder="Enter ">
                                            @foreach ($customers as $customeritem)
                                            <option value="{{$customeritem->id}}">{{$customeritem->customer_name}}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="pet-select">Flat Name:</label>
                                        <select type="text" name="flat_name" class="form-control" id="exampleInputlocation" placeholder="Enter ">
                                            @foreach ($buildings as $buildingitem)
                                            <option value="{{$buildingitem->flate_name}}">{{$buildingitem->flate_name}}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Booking Money</label>
                                      <input type="number" name="booking_money" class="form-control" id="exampleInputEmail1" placeholder="Enter booking money">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputAddress">Down payment</label>
                                      <input type="number" name="down_payment" class="form-control" id="exampleInputAddress" placeholder="Enter downpayment">
                                    </div>
                                    <div class="form-group">
                                        <label for="pet-select">Installment:</label>
                                        <select type="text" name="installment_name" class="form-control" id="exampleInputlocation" placeholder="Enter ">
                                            <option value="your option">your option</option>
                                            <option value="1at Installment">1at Installment</option>
                                            <option value="2nd Installment">2nd Installment</option>
                                            <option value="3rd Installment">3rd Installment</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAddress">Paymend Installment</label>
                                        <input type="number" name="payment_installment" class="form-control" id="exampleInputAddress" placeholder="Enter installment payment">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputAddress">Others Payment</label>
                                        <input type="number" name="othaer_payment" class="form-control" id="exampleInputAddress" placeholder="Enter others payment">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputAddress">Full Payment</label>
                                        <input type="number" name="full_payment" class="form-control" id="exampleInputAddress" placeholder="Enter full payment">
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
