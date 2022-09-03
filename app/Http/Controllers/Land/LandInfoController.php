<?php

namespace App\Http\Controllers\Land;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Building;
use App\Models\Land;
use Carbon\Carbon;
class LandInfoController extends Controller
{
    //land info list
    public function LandList(){
        $customers = Customer::all();
        $buildings = Building::all();
        $lands = Land::all();
        return view('land.list',compact('customers','buildings','lands'));
    }
    // land store
    public function LandStore(Request $request){
        $request->validate([
            'land_name' => 'required',
            'land_location' => 'required',
            'land_price' => 'required',
        ]);
           Land::create([
                'land_name' => $request->land_name,
                'land_location' => $request->land_location,
                'land_price' => $request->land_price,
                'land_size' => $request->land_size,
                'customer_id' => $request->customer_id,
                'flat_name' => $request->flat_name,
                'mutation_cost' => $request->mutation_cost,
                'created_at' => Carbon::now(),
            ]);
            return Redirect()->back();
    }
    public function LandDelete($id){
        $land_delete = Land::find($id)->delete();
        return redirect()->back();
    }
}
