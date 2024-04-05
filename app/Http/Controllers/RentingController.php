<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renting;

class RentingController extends Controller
{
    public function getRentings()
    {
        $rentings = Renting::all();

        return response()->json(["data"=> $rentings]);
    }
    public function addRenting(Request $request)
    {    
        $input = $request->all();
        $renting = new Renting;

        $renting->writer = $input ["writer"];
        $renting->type = $input["type"];
        $renting->title = $input["title"];
        $renting->renter_id = (new RenterController)->getRenterId( $input["name"]);

        $renting->save();
        return response()->json([
            "message"=>"Sikeres felvétel!",
            "success" => true
        ]);
    }
    public function getRenting( $id )
    {
        $renting = Renting::find($id);
        
        return response()->json([
            "renting" => $renting,
            "success" => true
        ]);
    }
    public function updateRenting(Request $request, $id)
    {
        $input = $request->all();
        $renting = Renting::find($id);

        $renting->writer = $input ["writer"];
        $renting->type = $input["type"];
        $renting->title = $input["title"];
        $renting->renter_id = (new RenterController)->getRenterId( $input["name"]);

        $renting->save();
        return response()->json([
            "message"=>"sikeres frissítés", 
            "success"=>true,
            "data"=>$renting
        ]);
    }

    public function deleteRenting($id){
        $renting = Renting::find($id);
        $renting->delete();
        return response()->json([
            "message"=>"sikeres törlés"
        ]);
    }
}
