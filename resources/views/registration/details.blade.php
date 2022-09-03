@extends('admin.adminMaster')
@section('admin')
    <div class="content-wrapper">
      <div class="row">
        <div style="width:40%" class="mx-auto my-5">
          <div >
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{asset($registration_details->customer_file)}}" alt="image" style="height: 80px;">
                </div>
        
                <h3 class="profile-username text-center">{{$registration_details->customer_name}}</h3>
        
                <p class="text-muted text-center">Customer's ID = {{$registration_details->id}}</p>
        
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Installment </b> <a class="float-right">{{optional($registration_details->Registration)->installment_name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Booking Money</b> <a class="float-right">{{optional($registration_details->Registration)->booking_money}} tk</a>
                  </li>
                  <li class="list-group-item">
                    <b>Down payment</b> <a class="float-right">{{optional($registration_details->Registration)->down_payment}} tk</a>
                  </li>
                  <li class="list-group-item">
                    <b>Installment Payment</b> <a class="float-right">{{optional($registration_details->Registration)->payment_installment}} tk</a>
                  </li>
                  <li class="list-group-item">
                    <b>Total Payment</b> <a class="float-right">{{(optional($registration_details->Registration)->othaer_payment)+(optional($registration_details->Registration)->booking_money)+(optional($registration_details->Registration)->down_payment)}} tk</a>
                  </li>
                </ul>
                <a href="{{url('/')}}" class="btn btn-primary btn-block"><b>Back To Home</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
        
    </div>

@endsection





