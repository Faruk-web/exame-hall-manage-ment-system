<?php

namespace App\Http\Controllers\ClientDueAmount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Building;
use App\Models\Land;
use App\Models\DuePaymen;
use Carbon\Carbon;
class ClientDueAmountController extends Controller
{
    //
    public function ClientDueAmount(){
        $customers = Customer::with('DuePaymentflat','DuePaymentland','DuePayment')->get();
        // dd($customers);
        $buildings = Building::all();
        $lands = Land::all();
        return view('client_due_amount.view',compact('customers','buildings','lands'));
    }
      // land store
      public function DuePaymentStore(Request $request){
        $request->validate([
            'customer_id' => 'required',
            'land_id' => 'required',
            'land_payment' => 'required',
        ]);
        DuePaymen::create([
                'customer_id' => $request->customer_id,
                'land_id' => $request->land_id,
                'land_payment' => $request->land_payment,
                'mutation_payment' => $request->mutation_payment,
                'building_id' => $request->building_id,
                'paower_attoney_payment' => $request->paower_attoney_payment,
                'flate_payment' => $request->flate_payment,
                'created_at' => Carbon::now(),
            ]);
            return Redirect()->back();
    }
        public function DuePaymentDelete($id){
            $land_delete = Customer::find($id)->delete();
            return redirect()->back();
        }
        public function RegistrationAmountPayment(){
            $customers = Customer::with('Registration')->get();
            // dd($customers);
            return view('client_due_amount.list',compact('customers'));
        }
        public function RegistrationDelete($id){
            $land_delete = Customer::find($id)->delete();
            return redirect()->back();
        }
        public function RegistrationDetails($id){
            $registration_details = Customer::with('Registration')->find($id);
            // dd($registration_details);
            return view('registration.details',compact('registration_details'));
            // return redirect()->back();
        }
}
