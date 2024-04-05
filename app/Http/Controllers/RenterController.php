<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renter;

class RenterController extends Controller
{
    public function getRenters(){

        $renters = Renter::with("renting")->get();
        return response()->json([
            "data"=> $renters,
            "message"=>"Renterek adait sikeresen lekérte"
        ]);
    }
    public function getRenterById($id){
        $renter = Renter::with("renting")->find($id);
        // $renter = Renter::with("rentings")->where('id', $id)->get();
        return response()->json([
            'data'=>$renter
        ]);
    }
    public function getRenterId($name){
        $renter = Renter::where("name", $name)->first();
        $id = $renter ->id;
        return $id;
    }
}
