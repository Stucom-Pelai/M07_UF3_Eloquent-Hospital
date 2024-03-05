<?php
namespace App\Http\Controllers;
use App\Models\rooms;
class RoomsController{

public function getAvailableRooms(){
    $rooms = rooms::where('status', 'available')->get();
    try{
        return response()->json(['rooms' => $rooms]);
    }catch(\Exception $e){
        return response()->json(['action' => 'get', 'status' => false, 'error' => $e->getMessage()]);
    }
}

}