@extends('admin.adminMaster')
@section('admin')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mt-3">
                        <button type="button"  id="smallButton" class="btn btn-secondary btn-sm" ><a href="{{route('client.due.amount')}}" style="color: white;">Flat Price Payment</a></button>
                        <button style="background-color: white;" type="button" id="twoButton" class="btn btn-secondary btn-sm"><a href="{{route('client.due.amount.test')}}" style="color: black;">Registration Payment</a> </button>
                        <div>
                            <table id="example1" class="table test table-bordered table-striped">
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <thead>
                                        <tr>
                                            <th>Customer's id</th>
                                            <th>Customer's Name</th>
                                            <th>File No</th>
                                            <th>Booking Money</th>
                                            <th>Down payment</th>
                                            <th>Installment Payment</th>
                                            <th>Installment Payment Due</th>
                                            <th>Other Payment</th>
                                            <th>Total Payment</th>
                                            <th>Payment Complete</th>
                                            <th>Payment Due</th>
                                            <th>Send Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $allitems)
                                            <tr>
                                                <td>{{$allitems->id}}</td>
                                                <td>{{$allitems->customer_name}}</td>
                                                {{-- <td>{{$allitems->customer_file}}</td> --}}
                                                <td>
                                                    <img src="{{asset($allitems->customer_file)}}" alt="image" style="height:65px;">
                                                </td>
                                                <td>{{optional($allitems->Registration)->booking_money}} tk</td>
                                                <td>{{optional($allitems->Registration)->down_payment}} tk</td>
                                                <td>{{optional($allitems->Registration)->payment_installment}} tk</td>
                                                <td>{{(optional($allitems->DuePaymentflat)->flate_price)-(optional($allitems->Registration)->payment_installment)}} tk</td>
                                                <td>{{optional($allitems->Registration)->othaer_payment}} tk</td>
                                                <td>{{(optional($allitems->Registration)->othaer_payment)+(optional($allitems->Registration)->booking_money)+(optional($allitems->Registration)->down_payment)}} tk</td>
                                                <td>{{(optional($allitems->Registration)->full_payment)}} tk</td>
                                                <td>{{(optional($allitems->Registration)->othaer_payment)+(optional($allitems->Registration)->booking_money)+(optional($allitems->Registration)->down_payment)-(optional($allitems->Registration)->full_payment)}} tk</td>
                                                <td>
                                                    <a style="font-size: 20px;" target="_blank" href="https://api.WhatsApp.com/send?phone=+8801911655303&amp;text=Hello ! " class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                    <a style="font-size: 20px;" target="_blank" href="https://www.facebook.com/login.php?api_key=127760087237610&skip_api_login=1&display=popup&logged_in=0&page_id=103832382237009&switch_user=0&request_id=acd36930-51bb-4ea6-bde1-3a775529b838&chat_plugin_upgrade=0&cookie_access_denied=0&referer_uri=https%3A%2F%2Fbppshop.com.bd%2F&guest_id=0&referrer=https%3A%2F%2Fbppshop.com.bd%2F&social_plugin=customer_chat&next=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fplugin.optin%3F_path%3Dplugin.optin%26app_id%3D127760087237610%26client_id%3D127760087237610%26display%3Dpopup%26secure%3Dtrue%26social_plugin%3Dcustomer_chat%26return_params%3D%257B%2522ret%2522%253A%2522optin%2522%252C%2522app_id%2522%253A%2522%2522%252C%2522attribution%2522%253A%2522biz_inbox%2522%252C%2522channel%2522%253A%2522https%253A%255C%252F%255C%252Fstaticxx.facebook.com%255C%252Fx%255C%252Fconnect%255C%252Fxd_arbiter%255C%252F%253Fversion%253D46%2523cb%253Df38527f78382c04%2526domain%253Dbppshop.com.bd%2526is_canvas%253Dfalse%2526origin%253Dhttps%255Cu00253A%255Cu00252F%255Cu00252Fbppshop.com.bd%255Cu00252Ff185b56a8d8297c%2526relation%253Dparent.parent%2522%252C%2522container_width%2522%253A%25221903%2522%252C%2522current_url%2522%253A%2522https%253A%255C%252F%255C%252Fbppshop.com.bd%255C%252F%2522%252C%2522is_loaded_by_facade%2522%253A%2522true%2522%252C%2522local_state%2522%253A%2522%257B%255C%2522v%255C%2522%253A1%252C%255C%2522path%255C%2522%253A2%252C%255C%2522chatState%255C%2522%253A1%252C%255C%2522visibility%255C%2522%253A%255C%2522hidden%255C%2522%252C%255C%2522showUpgradePrompt%255C%2522%253A%255C%2522not_shown%255C%2522%252C%255C%2522greetingVisibility%255C%2522%253A%255C%2522hidden%255C%2522%252C%255C%2522shouldShowLoginPage%255C%2522%253Afalse%257D%2522%252C%2522locale%2522%253A%2522en_US%2522%252C%2522log_id%2522%253A%2522114b7ba0-e6e5-4e0d-b711-cce6c811ea29%2522%252C%2522page_id%2522%253A%2522103832382237009%2522%252C%2522request_time%2522%253A%25221662009961215%2522%252C%2522sdk%2522%253A%2522joey%2522%252C%2522customer_chat_origin_uri%2522%253A%2522https%253A%255C%252F%255C%252Fbppshop.com.bd%255C%252F%2522%252C%2522referer_uri%2522%253A%2522https%253A%255C%252F%255C%252Fbppshop.com.bd%255C%252F%2522%257D%26login_params%3D%257B%2522logged_in%2522%253Afalse%252C%2522page_id%2522%253A%2522103832382237009%2522%252C%2522switch_user%2522%253Afalse%252C%2522request_id%2522%253A%2522acd36930-51bb-4ea6-bde1-3a775529b838%2522%252C%2522chat_plugin_upgrade%2522%253Afalse%252C%2522guest_access_token%2522%253Anull%252C%2522cookie_access_denied%2522%253Afalse%252C%2522referer_uri%2522%253A%2522https%253A%255C%252F%255C%252Fbppshop.com.bd%255C%252F%2522%252C%2522guest_id%2522%253A%25220%2522%252C%2522referrer%2522%253A%2522https%253A%255C%252F%255C%252Fbppshop.com.bd%255C%252F%2522%257D%26from_login%3D1" class="whatsapp"><i class="fab fa-facebook-messenger"></i></a>
                                                    <a style="font-size: 20px;" href="{{ route('registrati.details',$allitems->id) }}"><i class="fas fa-eye"></i></a>
                                                    
                                                </td> 
                                                <td>
                                                    <button type="button" class="btn btn-relief-danger"><a href="{{ route('registrationpayment.delete',$allitems->id) }}"> <i style="font-size: 25px;" class="fas fa-backspace"></i> </a> </button>
                                                </td> 
                                             </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <div class="fb-customerchat"
        page_id="<ENTER-YOUR-FACEBOOK-ID-HERE>"
        theme_color="#459645"
        logged_in_greeting="Hi! How can we help you?"
        logged_out_greeting="GoodBye!... Hope to see you soon."
        minimized="false">
        </div>
    </div>
  
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
        
        window.fbAsyncInit = function() {
            FB.init({
            appId            : '912333495590130',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.11'
            });
        };
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endsection
