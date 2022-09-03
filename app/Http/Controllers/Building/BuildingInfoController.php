<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Customer;
use Carbon\Carbon;
class BuildingInfoController extends Controller
{
    //BuildingList
    public function BuildingList(){
        $buildings = Building::all();
        $customers = Customer::all();
        return view('building.list',compact('buildings','customers'));
    }
    public function BuildingStore(Request $request){
        $request->validate([
            'building_name' => 'required',
            'building_location' => 'required',
            'flate_price' => 'required',
        ]);
        Building::create([
                'building_name' => $request->building_name,
                'customer_id' => $request->customer_id ,
                'building_location' => $request->building_location,
                'total_flat_no' => $request->total_flat_no,
                'flate_price' => $request->flate_price,
                'flate_size' => $request->flate_size,
                'flate_name' => $request->flate_name,
                'power_attorney_cost' => $request->power_attorney_cost,
                'created_at' => Carbon::now(),
            ]);
            return Redirect()->back();

    }
    public function BuildingDelete( $id){
        $building_delete = Building::find($id)->delete();
      
        return redirect()->back();
    }
    
}
