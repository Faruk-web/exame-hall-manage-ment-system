<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Building;
use App\Models\Registration;
use Carbon\Carbon;
class RegistrationInfoController extends Controller
{
    //Registration List
    public function RegistrationList(){
        $customers=Customer::all();
        $buildings=Building::all();
        $registrations=Registration::all();
        return view('registration.list',compact('customers','buildings','registrations'));
    }
    public function RegistrationStore(Request $request){
        $request->validate([
              'customer_id'=>'required',
              'flat_name'=>'required',
              'booking_money'=>'required',
        ]);
          Registration::create([
            'customer_id'=>$request->customer_id,
            'flat_name'=>$request->flat_name,
            'booking_money'=>$request->booking_money,
            'installment_name'=>$request->installment_name,
            'payment_installment'=>$request->payment_installment,
            'down_payment'=>$request->down_payment,
            'othaer_payment'=>$request->othaer_payment,
            'full_payment'=>$request->full_payment,
            'created_at' => Carbon::now(),
          ]);
          return Redirect()->Back();
    }
        public function RegistrationDelete($id){
            $registration_delete = Registration::find($id)->delete();
            return redirect()->back();
        }
}
