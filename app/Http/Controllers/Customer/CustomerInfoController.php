<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Customer;
use Carbon\Carbon;
// Use Image;
use Intervention\Image\Exception\NotReadableException;
class CustomerInfoController extends Controller
{
    //CustomerList
    public function CustomerList(){
        $customers = Customer::all();
        $customers = Customer::all();
        return view('cutomer.list',compact('customers'));
    }
    // customer store
    public function CustomerStore(Request $request){
        $request->validate([
            'customer_name' => 'required',
            'customer_mobile' => 'required',
            'customer_address' => 'required',
        ]);

            // Banner Img upload and save
            $image = $request->file('customer_file');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 400)->save('upload/customer/' . $name_gen);
            $save_url = 'upload/customer/' . $name_gen;

           Customer::create([
                'customer_name' => $request->customer_name,
                'customer_mobile' => $request->customer_mobile,
                'customer_address' => $request->customer_address,
                // 'customer_file' => $request->customer_file,
                'customer_file' => $save_url,
                'customer_email' => $request->customer_email,
                'created_at' => Carbon::now(),
            ]);
            return Redirect()->back();
    }
    public function CustomerEdit($id){
        $customer_edit = Customer::find($id);
        return view('cutomer.list');
    }
    public function CustomerDelete($id){
        $customer_delete = Customer::find($id)->delete();
        return redirect()->back();
    }
}
